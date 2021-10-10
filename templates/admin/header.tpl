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
    <header class="container">
        <nav>
            <h1>MANTO Admin</h1>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="admin/manageProducts" class="nav-link text-dark {if $active == 'manageProducts'}active{/if}">Administrar Productos</a></li>
                <li class="nav-item"><a href="admin/manageProductTypes" class="nav-link text-dark {if $active == 'manageProductTypes'}active{/if}">Administrar Categorías</a></li>
            </ul>
        </nav>
    </header>