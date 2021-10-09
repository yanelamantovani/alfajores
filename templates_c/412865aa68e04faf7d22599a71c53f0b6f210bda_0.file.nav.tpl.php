<?php
/* Smarty version 3.1.39, created on 2021-10-03 16:07:38
  from '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6159b92abd3d44_30683348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '412865aa68e04faf7d22599a71c53f0b6f210bda' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/nav.tpl',
      1 => 1633270040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6159b92abd3d44_30683348 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Nav -->
<nav>
    <ul>
        <li><a id="portada" class="route <?php if ($_smarty_tpl->tpl_vars['highlighted']->value == "home") {?>highlighted<?php }?>" href="home">Home</a></li>
        <li><a id="productos" class="route <?php if ($_smarty_tpl->tpl_vars['highlighted']->value == "productos") {?>highlighted<?php }?>" href="productos">Productos</a></li>
        <li><a id="pedidos" class="route <?php if ($_smarty_tpl->tpl_vars['highlighted']->value == "precios") {?>highlighted<?php }?>" href="precios">Precios</a></li>
    </ul>
</nav><?php }
}
