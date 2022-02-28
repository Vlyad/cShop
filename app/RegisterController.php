<?php
include("DatabaseController.php");
class RegisterController {
    public string $login;
    private PDO $conn;
    public function __construct() {
        global $Statement;
        $this->conn = $Statement;
    }
    public function CheckLogin($login): bool
    {
        if (strlen($login) < 3 || strlen($login) > 15) {
            $_SESSION['ErrorMsg'] = "Długość loginu musi być pomiędzy 3 a 15 znaków!";
            return FALSE;
        }
        if (ctype_alnum($login) === false) {
            $_SESSION['ErrorMsg'] = "Login musi się składać z liter i cyfr!(Bez polskich znaków)";
            return FALSE;
        }
        return TRUE;
    }
    public function CheckPassword($password, $password2): bool
    {
        if ($password !== $password2) {
            $_SESSION['ErrorMsg'] = "Hasła nie są takie same!";
            return FALSE;
        }
        return TRUE;
    }
    public function PasswordHash($password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public function GetUser($login): bool
    {
        $Query = "SELECT `name` FROM `users` WHERE `name` =:login";
        try {
            $Stmt = $this->conn->prepare($Query);
            $Stmt->bindValue(':login', $login, PDO::PARAM_STR);
            $Stmt->execute();
            $UsersCount = $Stmt->rowCount();
            if ($UsersCount > 0) {
                $_SESSION['ErrorMsg'] = "Podany login jest już zajęty!";
                return FALSE;
            }
            return TRUE;
        }
        catch (PDOException $error) {
            echo $error->getMessage();
            exit('</br>Database error');
        }


    }

}
