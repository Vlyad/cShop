<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("DatabaseController.php");
    global $Statement, $config;
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if ($login === NULL || $password === NULL || $password2 === NULL) {
        $_SESSION['ErrorMsg'] = "Pola nie mogą być pustę";
        header("Refresh:0");
        exit();
    }
    $login = filter_var($login, FILTER_SANITIZE_SPECIAL_CHARS);
    $RegisterStatus = TRUE;
    if (strlen($login) < 3 || strlen($login) > 15) {
        $_SESSION['ErrorMsg'] = "Długość loginu musi być pomiędzy 3 a 15 znaków!";
        $RegisterStatus = FALSE;
        header("Refresh:0");
        exit();
    }
    if (ctype_alnum($login) === false) {
        $_SESSION['ErrorMsg'] = "Login musi się składać z liter i cyfr!(Bez polskich znaków)";
        $RegisterStatus = FALSE;
        header("Refresh:0");
        exit();
    }
    if ($password !== $password2) {
        $RegisterStatus = FALSE;
        $_SESSION['ErrorMsg'] = "Hasła nie są takie same!";
        header("Refresh:0");
        exit();
    }
    $Query = "SELECT `name` FROM `users` WHERE `name` =:login";
    $Stmt = $Statement->prepare($Query);
    $Stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $Stmt->execute();
    $UsersCount = $Stmt->rowCount();
    if ($UsersCount >= 1) {
        $_SESSION['ErrorMsg'] = "Podany login jest już zajęty!";
        $RegisterStatus = FALSE;
        header("Refresh:0");
        exit();
    }
    if ($RegisterStatus === TRUE) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $Query = "INSERT INTO `users`(`id`, `name`, `password`, `wallet`, `Steam_id`) VALUES (NULL,:login,:haslo,'0,00', '0')";
        $Stmt = $Statement->prepare($Query);
        $Stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $Stmt->bindValue(':haslo', $passwordHash, PDO::PARAM_STR);
        $Stmt->execute();
        header("Location: /?page=register&done=1");
        exit();
    }
}
