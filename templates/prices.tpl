{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section class="prices">
            <h3>Precios</h3>
            <div class="rounded">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>x1</th>
                            <th>x6</th>
                            <th>x12</th>
                        </tr>  
                    </thead>
                    <tbody>
                        {foreach from=$productTypes item=productType}
                            <tr>
                                <td><a href="precios/{$productType->id}">{$productType->name}</a></td>
                                <td>{$productType->price1}</td>
                                <td>{$productType->price6}</td>
                                <td>{$productType->price12}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </section>
    </article>
</main>    
{include file='templates/footer.tpl'}