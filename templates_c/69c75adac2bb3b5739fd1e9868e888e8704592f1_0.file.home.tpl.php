<?php
/* Smarty version 3.1.39, created on 2021-10-03 16:07:38
  from '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6159b92ab9c176_57114569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69c75adac2bb3b5739fd1e9868e888e8704592f1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/home.tpl',
      1 => 1633270055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6159b92ab9c176_57114569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- Contenido -->   
    <main id="main">
        <figure class="content">
            <img src="static/images/manto_portada.jpg" alt="Alfajores">
        </figure>
    </main>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
