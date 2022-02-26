<?php
/* Smarty version 4.1.0, created on 2022-02-26 08:33:56
  from 'F:\cshop\view\template\users\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6219d7e4bb44c4_28136250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28bd722188e0eb1bc1e835f42e978889a467b925' => 
    array (
      0 => 'F:\\cshop\\view\\template\\users\\profile.tpl',
      1 => 1645860798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_6219d7e4bb44c4_28136250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<head><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title></head>
    <div class="main-text main-profile">
        <div class="row">
            <div class="col">
                Twój Steam ID: <?php echo $_smarty_tpl->tpl_vars['Steam_id']->value;?>
 <span class="profile_addition">(zmień)</span>
            </div>
            <div class="col">
                Twoję pieniędzę: <?php echo $_smarty_tpl->tpl_vars['Wallet']->value;?>
zł <span class="profile_addition">(doładuj)</span>
            </div>
            <div class="col">
                Aktywne usługi: VIP - Mirage <span class="profile_addition">(kup usługę)</span>
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
