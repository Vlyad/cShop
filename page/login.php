<?php
require_once(APP."/LoginController.php");
global $Smarty;
if (isset($_GET['success'])) {
    $Page = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['success']);
    if ($Page = 1) {
        $Smarty->assign("title", "Logowanie");
        $Smarty->assign("Succes", "Logowanie Udane za 5 sekund zostaniesz przeniesiony!");
        $Smarty->display("users/login_done.tpl");
        header("Refresh: 5 url=/");
        unset($_SESSION['ErrorMsg']);
    }
} elseif ($_GET['page'] === "login") {
    $Smarty->assign("title", "Logowanie");
    $Smarty->display("users/login.tpl");
    unset($_SESSION['ErrorMsg']);
}