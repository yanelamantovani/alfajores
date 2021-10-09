<?php
/* Smarty version 3.1.39, created on 2021-10-09 17:47:46
  from '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6161b9a24080b8_82065732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '635caa19dca6f28c820a9a681c8b8ff590cc8fd8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/products.tpl',
      1 => 1633794458,
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
function content_6161b9a24080b8_82065732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section>
            <h3>Productos</h3>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <li>
                        <h4><a href='productos/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></h4>
                        <img src="static/images/<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
">
                        <p><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</p>
                    </li>    
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </section>
    </article>
</main>    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
