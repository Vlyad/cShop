<?php
/* Smarty version 4.1.0, created on 2022-02-25 19:33:38
  from 'F:\cshop\view\template\users\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621921027f9459_29693024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa9e1419cde72ed7fdbd01ca31a95428e34fa2c9' => 
    array (
      0 => 'F:\\cshop\\view\\template\\users\\login.tpl',
      1 => 1645813268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_621921027f9459_29693024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<head><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title></head>
<div class="main-text">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form-1">
            <h2 class="navbar-brand"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
            <form action="" method="post">
                <?php if ((isset($_SESSION['ErrorMsg']))) {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['ErrorMsg'];?>

                    </div>
                <?php }?>
                <div class="form-group">
                    <label class="logowanie">
                        <input type="text" name="login" class="form-control" placeholder="Login:" value="" />
                    </label>

                </div>
                <div class="form-group">
                    <label class="logowanie">
                        <input type="password" name="password" class="form-control" placeholder="Hasło:" value="" />
                    </label>

                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
            </form>
        </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
