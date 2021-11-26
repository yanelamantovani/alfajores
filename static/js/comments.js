"use strict";
document.addEventListener("DOMContentLoaded", function(event) {
    const BASE_URL = "http://localhost/alfajores/api/comments";
    
    let form = document.querySelector("#form");
    if (form) {
        form.addEventListener("submit", postComment);
    }
    
    let commentsView = document.querySelector("#comments");
    if (commentsView) {
        getComments();
    }

    /*
        Borra un comentario cuyo ID es pasado cómo parámetro.
     */
    async function deleteComment(id) {
        console.log(`Deleting comment #${id}`)
        try {
            const response = await fetch(`${BASE_URL}/${id}`, {
                method: 'DELETE'
            });
            if (response.ok) {
                console.log(`Comment #${id} deleted.`)
                let json = await response.json();
                getComments();
            } else {
                console.log("Status de respuesta inválido");    
            }
        } catch(e) {
            console.log(e);
        }    
    }

    /**
     * Postea un comentario.
     */
    async function postComment(e) {
        console.log(`Posting comment.`);
        e.preventDefault();
        let formData = new FormData(this);
        let formObj = Object.fromEntries(formData.entries());
        try {
            const response = await fetch(BASE_URL, { 
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(formObj)
            });
            if (response.ok) {
                let json = await response.text();
                console.log(json);
                getComments();
            } else {
                console.log("Status de respuesta inválido");
            }
        } catch(e) {
            console.log(e);
        }    
    }

    /**
     * Busca los comentarios y los muestra.
     */
    async function getComments() {
        fetchComments(null, null, null);
    }

    /**
     * Clickear Buscar comentarios por rating.
     */
    let search = document.querySelector("#search");
    if (search) {
        search.addEventListener("click", async function () {
            let searchBy = document.querySelector("#searchBy").value;
            console.log(`Searching comments searchBy=${searchBy}.`);
            fetchComments(searchBy, null, null);
        });
    }
    

    /**
     * Clickear Ordenar ordena los comentarios por el criterio y dirección seleccionados.
     */
    let sort = document.querySelector("#sort");
    if (sort) { 
        sort.addEventListener("click", async function () {
            let sortBy = document.querySelector("#sortBy").value;
            let sortDirection = document.querySelector("#sortDirection").value;
            fetchComments(null, sortBy, sortDirection);
        });
    }

    /**
     * Returno la url para hacer un get
     */
    async function fetchComments(searchBy, sortBy, sortDirection) {
        console.log(`Fetching comments searchBy=${searchBy},sortBy=${sortBy},sortDirection=${sortDirection}.`);
        try {
            let commentsView = document.querySelector("#comments");
            commentsView.innerHTML = `<tr>
                                        <td colspan="4">Loading comments...</td>
                                    </tr>`;
            let url = getUrl(searchBy, sortBy, sortDirection);
            console.log(url);
            const response = await fetch(url);
            if (response.ok) {
                let comments = await response.json();
                console.log(comments);
                showComments(comments);
            } else {
                console.log("Status de respuesta inválido");
            }
        } catch(e) {
            console.log(e);
        }    
    }

    /**
     * Returno la url para hacer un get
     */
    function getUrl(searchBy, sortBy, sortDirection) {
        let url = BASE_URL;
        if (searchBy || sortBy && sortDirection) {
            url += `?`;
            if (searchBy) {
                url += `rating=${searchBy}&`
            }
            if (sortBy && sortDirection) {
                url+=`sortBy=${sortBy}&sortDirection=${sortDirection}`;
            }
        }
        return url;
    }

    /**
     * Muestra los pedidos.
     */
    function showComments(comments) {
        let isAdmin = document.querySelector("#role").value == 'ADMIN';
        let html = "<ul>";
        for (let index = 0; index < comments.length; index++) {
            const comment = comments[index];
            html += `<li><p>Comentario #${comment.id} Autor:${comment.name} Rating:${comment.rating}</p><p>${comment.comment}</p>`
            if (isAdmin) {
                html += ` <i id="deleteComment${comment.id}" class="fa fa-times" aria-hidden="true"></i></li>`;    
            }
        }
        html += "</ul>";
        commentsView.innerHTML = html;   
        // Agregamos eventos en cada X
        for (let index = 0; index < comments.length; index++) {
            let id = comments[index].id;
            let deleteButton = document.querySelector("#deleteComment" + id);
            if (deleteButton) {
                deleteButton.addEventListener("click", function() {
                    deleteComment(id);
                });
            }
        }
    }

});
