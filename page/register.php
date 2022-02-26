<?php
global $Smarty;
require_once(APP."RegisterController.php");
if (isset($_GET['done'])) {
    $Page = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['done']);
    if($Page = 1) {
        $Smarty->assign("title", "Rejestracja Udana!");
        $Smarty->display("users/register_done.tpl");
        unset($_SESSION['ErrorMsg']);
    }
}
elseif($_GET['page'] === "register") {
    $Smarty->assign("title", "Rejestracja");
    $Smarty->display("users/register.tpl");
    unset($_SESSION['ErrorMsg']);
}