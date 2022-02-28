<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    require_once("DatabaseController.php");
//    global $Statement;
//    $login = $_POST['login'];
//    $password = $_POST['password'];
//    if ($login === NULL || $password === NULL) {
//        $_SESSION['ErrorMsg'] = "Pola nie mogą być pustę";
//        header("Refresh:0");
//        exit();
//    }
//    $login = filter_var($login, FILTER_SANITIZE_SPECIAL_CHARS);
//    $Query = "SELECT * from `users` where `name`=:login";
//    $Stmt = $Statement->prepare($Query);
//    $Stmt->bindValue(":login", $login, PDO::PARAM_STR);
//    $Stmt->execute();
//    $Result = $Stmt->fetch();
//    echo $Result['password'];
//    if ($Result > 0) {
//        echo $Result['password'];
//        if(password_verify($password, $Result['password'])) {
//            $_SESSION['Logged'] = TRUE;
//            $_SESSION['Login_id'] = $Result['id'];
//            $_SESSION['Name'] = $Result['name'];
//            $_SESSION['Wallet'] = $Result['wallet'];
//            $_SESSION['Steam_id'] = $Result['Steam_id'];
//            unset($_SESSION['ErrorMsg']);
//            header("Location: /?page=login&success=1");
//        }
//        else {
//            $_SESSION['ErrorMsg'] = "Login lub hasło jest błędnę!";
//            header("Refresh:0");
//            exit();
//        }
//    }
//    $_SESSION['ErrorMsg'] = "Login lub hasło jest błędnę!";
//    header("Refresh:0");
//    exit();
//}
require("DatabaseController.php");
require("Core.php");
class LoginController extends Core {
    public string $login;
    private PDO $conn;
    public function __construct() {
        global $Statement;
        $this->conn = $Statement;
    }
    public function PasswordVerify($password, $password2): bool {
        if(!password_verify($password, $password2)) {
            return FALSE;
        }
        return TRUE;
    }
    public function getData(string $login) {
        $Stmt = $this->conn->prepare("SELECT `password` FROM `users` WHERE `name` = :login");
        $Stmt->execute(array(':login' => $login));
        return $Stmt->fetch()["password"] ?? null;
    }
    public function GetUser($login, $password): void
    {
        $Query = "SELECT `name`, `password` from `users` where `name`=:login";
        try {
            $Stmt = $this->conn->prepare($Query);
            $Stmt->bindValue(":login", $login, PDO::PARAM_STR_CHAR);
            $Stmt->execute();
            $pwHashed = $this->getData($login);
            if ($this->PasswordVerify($password, $pwHashed) == 1) {
                $Query = "SELECT * from `users` where `name`=:login";
                $Stmt = $this->conn->prepare($Query);
                $Stmt->execute(array(':login' => $login));
                $Result = $Stmt->fetch();
                $_SESSION['Logged'] = TRUE;
                $_SESSION['Login_id'] = $Result['id'];
                $_SESSION['Name'] = $Result['name'];
                $_SESSION['Wallet'] = $Result['wallet'];
                $_SESSION['Steam_id'] = $Result['Steam_id'];
                $this->Redirect("/?page=login&success=1");
            }
        }
        catch (PDOException $error) {
            echo $error->getMessage();
            exit('</br>Database error');
        }
    }
}