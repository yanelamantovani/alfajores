{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section>
            <h3>{$product->name}</h3>
            <h4>{$product->description}</h4>
            <img src="static/images/{$product->image}" alt="{$product->name}">
        </section>
    </article>
</main>    
{include file='templates/footer.tpl'}