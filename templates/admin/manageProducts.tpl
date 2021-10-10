{include file='templates/admin/header.tpl'}
<!-- Contenido -->
<main id="main">
    <section class="container p-3">
        <h3>{if isset($index)}Modificar {$products[$index -1]->name}{else}Agregar producto{/if}</h3>
        <form action="admin/createProduct" method="POST" class="row justify-content-md-center gy-5">
            <input type="hidden" name="id" value="{if isset($index)}{$products[$index -1]->id}{/if}">
            <div class="col-md-auto">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" value="{if isset($index)}{$products[$index -1]->name}{/if}" required>
            </div>
            <div class="col-md-auto">
                <label for="image">Imagen:</label>
                <input type="text" name="image" id="image" value="{if isset($index)}{$products[$index -1]->image}{/if}" required>
            </div>
            <div class="col-md-auto">
                <label for="description">Descripción:</label>
                <input type="text" name="description" id="description" value="{if isset($index)}{$products[$index -1]->description}{/if}" required>
            </div>
            <div class="col-md-auto">
                <label for="productType">Categoría:</label>
                <select name="productTypeId">
                    {foreach from=$productTypes item=productType}
                        <option value="{$productType->id}" 
                            {if isset($index) && $products[$index -1]->product_type_id == $productType->id}
                                selected
                            {/if}>
                            {$productType->name}
                        </option>
                    {/foreach}
                </select>
            </div>
            <div class="d-grid justify-content-md-end">
                <input type="submit" value="{if isset($index)}Modificar{else}Agregar{/if}" class="btn btn-success btn-sm">
            </div>
        </form>
    </section>
    <section class="container table-responsive p-3">
        <h3>Lista de productos</h3>
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Categoría</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$products item=product}
                    <tr>
                        <th scope="row">{$product->id}</th>
                        <td>{$product->name}</td>
                        <td>{$product->image}</td>
                        <td>{$product->description}</td>
                        <td>{$productTypes[$product->product_type_id - 1]->name}</td>
                        <td><a href="admin/manageProducts/{counter}" type="button" class="btn btn-warning btn-sm">Modificar</a></td>
                        <td><a href="admin/deleteProduct/{$product->id}" type="button" class="btn btn-danger btn-sm">Borrar</a></td>
                    </tr>    
                {/foreach}
            </tbody>
        </table>
    </section>
</main>    
{include file='templates/admin/footer.tpl'}
