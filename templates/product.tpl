{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section>
            <h3>{$product->name}</h3>
            <h4>{$product->description}</h4>
            <img src="static/images/{$product->image}" alt="{$product->name}">
            <div>
                <h4>Comentarios</h4>
                <form>
                    <input id="rating" type="range" min="1" max="5" value="1" class="slider" />
                    <textarea id="comment" name="comment" cols="30" rows="10"></textarea>
                    <input type="submit" value="Enviar">
                </form>    
            </div>

            <div class="comments">
                {foreach from=$comments item=comment}
                <div class="comment">
                    <h5>{$comment->name}</h5>
                    <p>{$comment->comment}</p>
                </div>
                {/foreach}
            </div>    
        </section>
    </article>
</main>    
{include file='templates/footer.tpl'}