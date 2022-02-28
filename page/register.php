<?php
global $Smarty, $Statement;
require_once(APP."RegisterController.php");
require_once(APP."Core.php");
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['done'])) {
        $Page = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['done']);
        if ($Page = 1) {
            $Smarty->assign("title", "Rejestracja Udana!");
            $Smarty->display("users/register_done.tpl");
            unset($_SESSION['ErrorMsg']);
        }
    } elseif ($_GET['page'] === "register") {
        $Smarty->assign("title", "Rejestracja");
        $Smarty->display("users/register.tpl");
        unset($_SESSION['ErrorMsg']);
    }
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Register = new RegisterController();
    $Core = new Core();
    $login = $_POST['login'];
    $login = $Core->Clean($login);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if (!$Core->CheckInput($login) && !$Core->CheckInput($password) && !$Core->CheckInput($password2)) {
        $_SESSION['ErrorMsg'] = "Pola nie mogą być pustę!";
        $Core->Refresh("0", "/?page=register");
    }
    if (!$Register->CheckLogin($login)) {
        $Core->Refresh("0", "/?page=register");
    }
    if (!$Register->CheckPassword($password, $password2)) {
        $Core->Refresh("0", "/?page=register");
    }
    if (!$Register->GetUser($login)) {
        $Core->Refresh("0", "/?page=register");
    }
    $Query = "INSERT INTO `users`(`id`, `name`, `webgroup`, `password`, `wallet`, `Steam_id`) VALUES (NULL, :login, '1', :haslo, '0,00', '0')";
    $Stmt = $Statement->prepare($Query);
    $Stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $Stmt->bindValue(':haslo', $Register->PasswordHash($password), PDO::PARAM_STR);
    $Stmt->execute();
    header("Location: /?page=register&done=1");
    exit();
}