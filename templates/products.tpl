{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section>
            <h3>Productos</h3>
            <ul>
                {foreach from=$products item=product}
                    <li>
                        <h4><a href='productos/{$product->id}'>{$product->name}</a></h4>
                        <img src="static/images/{$product->image}" alt="{$product->name}">
                        <p>{$product->description}</p>
                    </li>    
                {/foreach}
            </ul>
        </section>
    </article>
</main>    
{include file='templates/footer.tpl'}
