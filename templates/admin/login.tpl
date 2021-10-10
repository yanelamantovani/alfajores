{include file='templates/admin/header.tpl'}
<div class="container p-3">
    <h2>Login:</h2>
    <form class="row g-3" action="admin/verify" method="POST">
        <div class="col-md-auto">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control" required>
        </div>
        <div class="col-md-auto">   
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="container">
            <input type="submit" class="btn btn-primary btn-sm" value="Login" class="form-control">
        </div>
        <div class="container">
            {if $error != null}
                <div class="alert alert-danger" role="alert">
                    {$error}
                </div>
            {/if}
        </div>
    </form>
</div>
{include file='templates/admin/footer.tpl'}