<?php
/* Smarty version 4.1.0, created on 2022-02-25 08:57:44
  from 'F:\cshop\view\template\users\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62188bf8e44989_98405942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28bd53402e27b7a43e4b4b3b8651cc47cf29512b' => 
    array (
      0 => 'F:\\cshop\\view\\template\\users\\register.tpl',
      1 => 1645775863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_62188bf8e44989_98405942 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <label class="rejestracja">
                            <input type="text" name="login" class="form-control" placeholder="Login:" value="" />
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="rejestracja">
                            <input type="password" name="password" class="form-control" placeholder="Hasło:" value="" />
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="rejestracja">
                            <input type="password" name="password2" class="form-control" placeholder="Powtórz hasło:" value="" />
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Zarejestruj się!" />
                    </div>
                </form>
            </div>
        </div>
<?php $_smarty_tpl->_subTemplateRender('file:layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
