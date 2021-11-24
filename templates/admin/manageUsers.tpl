{include file='templates/admin/header.tpl'}
<main id="main">
    {if isset($index)}
        <section class="container p-3">
            <h3>Modificar {$users[$index -1]->email}</h3>
            <form action="admin/updateUser" method="POST" class="row">
                <input type="hidden" name="id" value="{$users[$index -1]->id}">
                <div class="col-md-3 p-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" id="email" class="form-control" value="{$users[$index -1]->email}" required>
                </div>
                <div class="col-md-3 p-3">
                    <label for="role" class="form-label">Rol:</label>
                    <select name="role" class="form-select">
                        <option value="USER" 
                            {if $users[$index -1]->role == 'USER'}
                                selected
                            {/if}>
                            USER
                        </option>
                        <option value="ADMIN" 
                            {if $users[$index -1]->role == 'ADMIN'}
                                selected
                            {/if}>
                            ADMIN
                        </option>
                    </select>
                </div>
                <div class="d-grid justify-content-md-end">
                    <input type="submit" value="Modificar" class="btn btn-success btn-sm">
                </div>
            </form>
        </section>
    {/if}
    <section class="container table-responsive p-3">
        <h3>Lista de usuarios</h3>
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$users item=user}
                    <tr>
                        <th scope="row">{$user->id}</th>
                        <td>{$user->email}</td>
                        <td>{$user->password}</td>
                        <td>{$user->role}</td>
                        <td><a href="admin/manageUsers/{counter}" type="button" class="btn btn-warning btn-sm">Modificar</a></td>
                        <td><a href="admin/deleteUser/{$user->id}" type="button" class="btn btn-danger btn-sm">Borrar</a></td>
                    </tr>    
                {/foreach}
            </tbody>
        </table>
    </section>
</main>    
{include file='templates/admin/footer.tpl'}
