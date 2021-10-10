{include file='templates/admin/header.tpl'}
<div class="container row mt-4">
    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Login:</h2>
            <form class="form-alta" action="admin/verify" method="POST">
                <input type="text" name="email" id="email" placeholder="E-mail" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
            <h4 class="alert-danger">{$error}</h4>
        </div>
    </div>
</div>
{include file='templates/admin/footer.tpl'}