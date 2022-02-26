<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("DatabaseController.php");
    global $Statement;
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login === NULL || $password === NULL) {
        $_SESSION['ErrorMsg'] = "Pola nie mogą być pustę";
        header("Refresh:0");
        exit();
    }
    $login = filter_var($login, FILTER_SANITIZE_SPECIAL_CHARS);
    $Query = "SELECT * from `users` where `name`=:login";
    $Stmt = $Statement->prepare($Query);
    $Stmt->bindValue(":login", $login, PDO::PARAM_STR);
    $Stmt->execute();
    $Result = $Stmt->fetch();
    echo $Result['password'];
    if ($Result > 0) {
        echo $Result['password'];
        if(password_verify($password, $Result['password'])) {
            $_SESSION['Logged'] = TRUE;
            $_SESSION['Login_id'] = $Result['id'];
            $_SESSION['Name'] = $Result['name'];
            $_SESSION['Wallet'] = $Result['wallet'];
            $_SESSION['Steam_id'] = $Result['Steam_id'];
            unset($_SESSION['ErrorMsg']);
            header("Location: /?page=login&success=1");
        }
        else {
            $_SESSION['ErrorMsg'] = "Login lub hasło jest błędnę!";
            header("Refresh:0");
            exit();
        }
    }
    $_SESSION['ErrorMsg'] = "Login lub hasło jest błędnę!";
    header("Refresh:0");
    exit();
}