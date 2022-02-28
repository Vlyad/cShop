<?php
/* Smarty version 4.1.0, created on 2022-02-26 21:55:26
  from 'F:\cshop\view\template\users\wallet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621a93be4c0595_44888771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb13c018d77355f7d807571a9f482828b3e50bc7' => 
    array (
      0 => 'F:\\cshop\\view\\template\\users\\wallet.tpl',
      1 => 1645908925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_621a93be4c0595_44888771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<head>
    <?php if ((isset($_SESSION['Logged']))) {?>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php } else { ?>
        <title>Musisz być zalogowany!</title>
    <?php }?>
</head>
<div class="main-text main-profile">
    <?php if ((isset($_SESSION['Logged']))) {?>
    <div class="row">
        <div class="col">
            Twoję pieniędzę: <?php echo $_smarty_tpl->tpl_vars['Wallet']->value;?>
zł
            <?php if ((isset($_SESSION['ErrorMsg']))) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['ErrorMsg'];?>

                </div>
            <?php }?>
            <?php if ((isset($_SESSION['Success']))) {?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['Success'];?>

                </div>
            <?php }?>
            <br><br>
            Doładuj poprzez
            <br><br>
            <a href="/?page=payments">
                <img class="wallet-payments-img" src="/public/img/paypal_logo.png" alt="paypal_logo" title="paypal_logo">
            </a>
            <br><br>
        </div>

    </div>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            Musisz być zalogowany! <a href="/?page=login">Zaloguj!</a>
        </div>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
