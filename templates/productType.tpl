{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section>
            <h3>{$productType->name}</h3>
            <p>
                {$productType->description} 1x${$productType->price1} 6x${$productType->price6} 12x${$productType->price12}
            </p>
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