<?php
/* Smarty version 3.1.39, created on 2021-10-09 18:15:51
  from '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/productType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6161c037db3f26_50641499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12dcbef23b08d44b3a42f160aa3d4e9d7738931c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/productType.tpl',
      1 => 1633795949,
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
function content_6161c037db3f26_50641499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section>
            <h3><?php echo $_smarty_tpl->tpl_vars['productType']->value->name;?>
</h3>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['productType']->value->description;?>
 1x$<?php echo $_smarty_tpl->tpl_vars['productType']->value->price1;?>
 6x$<?php echo $_smarty_tpl->tpl_vars['productType']->value->price6;?>
 12x$<?php echo $_smarty_tpl->tpl_vars['productType']->value->price12;?>

            </p>
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
