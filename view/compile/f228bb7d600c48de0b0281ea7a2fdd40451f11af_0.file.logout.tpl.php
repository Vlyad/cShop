<?php
/* Smarty version 4.1.0, created on 2022-02-25 20:09:12
  from 'F:\cshop\view\template\users\logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62192958145bb3_78671331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f228bb7d600c48de0b0281ea7a2fdd40451f11af' => 
    array (
      0 => 'F:\\cshop\\view\\template\\users\\logout.tpl',
      1 => 1645816144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_62192958145bb3_78671331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<head><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title></head>
<div class="main-text">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form-1">
            <h2 class="navbar-brand"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
            <div class="alert alert-success" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['Succes']->value;?>

            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
