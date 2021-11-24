{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section class="login">
            <h3>Login</h3>
            <div class="rounded">
                <h4>Ingresá</h4>
                <form method="POST" action="verify">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email"/>
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password"/>
                    <button>Ingresar</button>
                </form>
                <h4>Creá tu cuenta</h4>
                <form method="POST" action="signin">
                    <label for="email">Email</label>
                    <input type="text" name="email"/>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/>
                    <button>Crear cuenta</button>
                </form>
                {$message}
            </div>
        </section>
    </article>
</main>    
{include file='templates/footer.tpl'}