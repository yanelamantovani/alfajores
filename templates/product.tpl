{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section class="product">
            <h3>{$product->name}</h3>
            <h4>{$product->description}</h4>
            <img src="static/images/{$product->image}" alt="{$product->name}">
            <div class="comments">
                {if $loggedRole != null} 
                    <h5>Dejanos tu calificación y comentario</h5> 
                    <form id="form"> 
                        <div>       
                            <input type="hidden" id="product_id" name="product_id" value="{$product->id}" required>
                            <input type="hidden" id="user_id" name="user_id" value="{$userId}" required>
                            <input type="text" id="name" name="name" placeholder="Tu nombre" required>
                            <input type="range" min="1" max="5" value="3" class="slider" id="rating" name="rating" required>
                        </div>
                        <div>    
                            <textarea id="comment" name="comment" rows="10" cols="30" required></textarea>
                        </div>     
                        <input type="submit">
                    </form>
                {/if}
                <input type="hidden" id="role" value="{$loggedRole}">
                <h5>Comentarios</h5>
                <label for="searchBy">Rating:</label>
                <select id="searchBy">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
                <button id="search">Buscar</button> 
                <div id="comments"></div>
                <select id="sortBy">
                    <option value="id">Fecha</option>
                    <option value="rating">Rating</option>
                </select>
                <select id="sortDirection">
                    <option value="ASC">↑</option>
                    <option value="DESC">↓ </option>
                </select>
                <button id="sort">Ordenar</button>
            </div>
        </section>
    </article>
</main>    
{include file='templates/footer.tpl'}