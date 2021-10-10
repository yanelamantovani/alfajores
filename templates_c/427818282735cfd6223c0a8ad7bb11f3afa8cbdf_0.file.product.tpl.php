<?php
/* Smarty version 3.1.39, created on 2021-10-09 20:56:49
  from '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6161e5f1409853_96250275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427818282735cfd6223c0a8ad7bb11f3afa8cbdf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/product.tpl',
      1 => 1633794852,
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
function content_6161e5f1409853_96250275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section>
            <h3><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h3>
            <h4><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</h4>
            <img src="static/images/<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
">
        </section>
    </article>
</main>    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
