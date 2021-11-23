<!-- Nav -->
<nav>
    <ul>
        <li><a id="portada" class="route {if $highlighted eq "home"}highlighted{/if}" href="home">Home</a></li>
        <li><a id="productos" class="route {if $highlighted eq "productos"}highlighted{/if}" href="productos">Productos</a></li>
        <li><a id="pedidos" class="route {if $highlighted eq "precios"}highlighted{/if}" href="precios">Precios</a></li>
        {if $loggedUsername != null}
            <li><a id="logout" class="route" href="logout">Logout</a></li>
        {else}
            <li><a id="login" class="route {if $highlighted eq "login"}highlighted{/if}" href="login">Login</a></li>
        {/if}
    </ul>
</nav>