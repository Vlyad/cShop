<?php
/* Smarty version 4.1.0, created on 2022-02-26 21:45:29
  from 'F:\cshop\view\template\users\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621a9169346865_47687540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28bd722188e0eb1bc1e835f42e978889a467b925' => 
    array (
      0 => 'F:\\cshop\\view\\template\\users\\profile.tpl',
      1 => 1645908327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_621a9169346865_47687540 (Smarty_Internal_Template $_smarty_tpl) {
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
                Twój Steam ID: <?php echo $_smarty_tpl->tpl_vars['Steam_id']->value;?>
 <span class="profile_addition" data-toggle="modal" data-target="#steamid">(zmień)</span>
            </div>
            <div class="col">
                Twoję pieniędzę: <?php echo $_smarty_tpl->tpl_vars['Wallet']->value;?>
zł <span class="profile_addition"><a href="/?page=wallet">(doładuj)</a></span>
            </div>
            <div class="col">
                Aktywne usługi: VIP - Mirage <span class="profile_addition">(kup usługę)</span>
            </div>
        </div>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                Musisz być zalogowany! <a href="/?page=login">Zaloguj!</a>
            </div>
        <?php }?>
    </div>





<div class="modal fade" id="steamid" tabindex="-1" role="dialog" aria-labelledby="steamidTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="steamidTitle">Zmień Steam_ID</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/?page=profile&changesid=1">
            <div class="modal-body">
                <span class="profile_addition">Użyj steamID np (STEAM_0:0:11111111)</span><br>
                <span class="profile_addition">SteamID możesz znaleźć na stronie <a href="https://steamid.io/" target="_blank">Steamid.io</a></span>
                    <div class="form-group">
                        <label class="logowanie">
                            <input type="text" name="Steam_ID" class="form-control" placeholder="Steamid:" value="" />
                        </label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Zmień</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
