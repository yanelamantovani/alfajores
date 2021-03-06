{include file='templates/admin/header.tpl'}
<main id="main">
    <section class="container p-3">
        <h3>{if isset($index)}Modificar {$productTypes[$index -1]->name}{else}Agregar categoría{/if}</h3>
        <form action="admin/createProductType" method="POST" class="row">
            <input type="hidden" name="id" value="{if isset($index)}{$productTypes[$index -1]->id}{/if}">
            <div class="col-md-3 p-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" value="{if isset($index)}{$productTypes[$index -1]->name}{/if}" required>
            </div>
            <div class="col-md-3 p-3">
                <label for="description" class="form-label">Descripción:</label>
                <input type="text" name="description" id="description" class="form-control" value="{if isset($index)}{$productTypes[$index -1]->description}{/if}" required>
            </div>
            <div class="col-md-2 p-3">
                <label for="price1" class="form-label">Precio x1:</label>
                <input type="number" name="price1" id="price1" class="form-control" value="{if isset($index)}{$productTypes[$index -1]->price1}{/if}" required>
            </div>
            <div class="col-md-2 p-3">
                <label for="price6" class="form-label">Precio x6:</label>
                <input type="number" name="price6" id="price6" class="form-control" value="{if isset($index)}{$productTypes[$index -1]->price6}{/if}" required>
            </div>
            <div class="col-md-2 p-3">
                <label for="price12" class="form-label">Precio x12:</label>
                <input type="number" name="price12" id="price12" class="form-control" value="{if isset($index)}{$productTypes[$index -1]->price12}{/if}" required>
            </div>
            <div class="d-grid justify-content-md-end">
                <input type="submit" value="{if isset($index)}Modificar{else}Agregar{/if}" class="btn btn-success btn-sm">
            </div>
        </form>
    </section>
    <section class="container table-responsive p-3">
        <h3>Lista de categorías</h3>
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio x1</th>
                    <th scope="col">Precio x6</th>
                    <th scope="col">Precio x12</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$productTypes item=productType}
                    <tr>
                        <th scope="row">{$productType->id}</th>
                        <td>{$productType->name}</td>
                        <td>{$productType->description}</td>
                        <td>${$productType->price1}</td>
                        <td>${$productType->price6}</td>
                        <td>${$productType->price12}</td>
                        <td><a href="admin/manageProductTypes/{counter}" type="button" class="btn btn-warning btn-sm">Modificar</a></td>
                        <td><a href="admin/deleteProductType/{$productType->id}" type="button" class="btn btn-danger btn-sm">Borrar</a></td>
                    </tr>    
                {/foreach}
            </tbody>
        </table>
    </section>
</main>    
{include file='templates/admin/footer.tpl'}
