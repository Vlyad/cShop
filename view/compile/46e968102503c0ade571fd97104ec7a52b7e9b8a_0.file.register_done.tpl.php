<?php
/* Smarty version 4.1.0, created on 2022-02-25 19:12:42
  from 'F:\cshop\view\template\users\register_done.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62191c1a4fd535_25928500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e968102503c0ade571fd97104ec7a52b7e9b8a' => 
    array (
      0 => 'F:\\cshop\\view\\template\\users\\register_done.tpl',
      1 => 1645812761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_62191c1a4fd535_25928500 (Smarty_Internal_Template $_smarty_tpl) {
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
                        Możesz teraz się zalogować! <a href="/?page=login" class="text-black">Klik</a>
                    </div>
            </div>
        </div>
<?php $_smarty_tpl->_subTemplateRender('file:layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
