<?php
/* Smarty version 3.1.39, created on 2021-10-03 16:07:38
  from '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6159b92abad322_93112992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c720ec709f8740d3b7efb40711860f03a25c5124' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/header.tpl',
      1 => 1633269907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6159b92abad322_93112992 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANTO Alfajores</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/manto.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="static/js/topnav.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="static/js/model.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="static/js/orders.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Logo -->
        <figure alt="logo"></figure>
        <!-- Título -->
        <h1>Manto</h1>
        <h2>de Saladillo a tu boca</h2>
        <!-- Top Nav -->
        <div id="topNav" class="topnav">
            <i class="fa fa-bars"></i>
        </div>
    </header><?php }
}
