<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>MANTO Admin</title>
</head>
<body>
    <!-- Header -->
    <header class="container p-3">
        <nav>
            <h1>MANTO Admin</h1>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                {if $active != null}
                    <a href="admin/logout" class="btn btn-primary btn-sm">Logout</a>
                {/if}
            </div>
            {if $active != null}
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="admin/manageProducts" class="nav-link text-dark {if $active == 'manageProducts'}active{/if}">Administrar Productos</a></li>
                    <li class="nav-item"><a href="admin/manageProductTypes" class="nav-link text-dark {if $active == 'manageProductTypes'}active{/if}">Administrar Categorías</a></li>
                </ul>
            {/if}    
        </nav>
    </header>