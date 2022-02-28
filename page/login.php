<?php
require_once(APP."/LoginController.php");
require_once(APP."/Core.php");
global $Smarty;
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['success'])) {
        $Page = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['success']);
        if ($Page = 1) {
            $Smarty->assign("title", "Logowanie");
            $Smarty->assign("Succes", "Logowanie Udane za 2 sekund zostaniesz przeniesiony!");
            $Smarty->display("users/login_done.tpl");
            header("Refresh: 2 url=/");
            unset($_SESSION['ErrorMsg']);
        }
    } elseif ($_GET['page'] === "login") {
        $Smarty->assign("title", "Logowanie");
        $Smarty->display("users/login.tpl");
        unset($_SESSION['ErrorMsg']);
    }
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Core = new Core();
    $Login = new LoginController();
    $login = $_POST['login'];
    $login = $Core->Clean($login);
    $password = $_POST['password'];
    if(!$Core->CheckInput($login) && !$Core->CheckInput($password)) {
        $_SESSION['ErrorMsg'] = "Pola nie mogą być pustę!";
        $Core->Refresh("0", "/?page=login");
    }
    if ($Login->GetUser($login, $password)) {
        $Core->Redirect("/?page=login?done=success");
    }
}