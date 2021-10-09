<?php
/* Smarty version 3.1.39, created on 2021-10-09 18:00:26
  from '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6161bc9a07a837_81826540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea0e6f3002948aec8c1fdb9588cb68d2c4c0bba' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/alfajores/templates/prices.tpl',
      1 => 1633795219,
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
function content_6161bc9a07a837_81826540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- Contenido -->
<main id="main">
    <article class="content">
        <section class="prices">
            <h3>Precios</h3>
            <div class="rounded">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Descripción</th>
                            <th>x1</th>
                            <th>x6</th>
                            <th>x12</th>
                        </tr>  
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productTypes']->value, 'productType');
$_smarty_tpl->tpl_vars['productType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productType']->value) {
$_smarty_tpl->tpl_vars['productType']->do_else = false;
?>
                            <tr>
                                <td><a href="precios/<?php echo $_smarty_tpl->tpl_vars['productType']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['productType']->value->name;?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['productType']->value->description;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['productType']->value->price1;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['productType']->value->price6;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['productType']->value->price12;?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </section>
    </article>
</main>    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
