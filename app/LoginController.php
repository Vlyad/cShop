<?php
require("DatabaseController.php");
require_once("ProfileController.php");
require_once("Core.php");
class LoginController extends Core {
    public string $login;
    private PDO $conn;
    public function __construct() {
        global $Statement;
        $this->conn = $Statement;
    }
    private function PasswordVerify($password, $password2): bool {
        if(!password_verify($password, $password2)) {
            return FALSE;
        }
        return TRUE;
    }
    private function getPassword(string $login) {
        $Stmt = $this->conn->prepare("SELECT `password` FROM `users` WHERE `name` = :login");
        $Stmt->execute(array(':login' => $login));
        return $Stmt->fetch()["password"] ?? null;
    }
    public function CheckAdmin($id): void
    {
        $Profile = new ProfileController();
        if ($Profile->isAdmin($id)) {
            $_SESSION['Admin'] = TRUE;
        }
    }
    public function GetUser($login, $password): void
    {
        global $_SESSION;
        $Query = "SELECT `name`, `password` from `users` where `name`=:login";
        try {
            $Stmt = $this->conn->prepare($Query);
            $Stmt->bindValue(":login", $login, PDO::PARAM_STR_CHAR);
            $Stmt->execute();
            $pwHashed = $this->getPassword($login);
            if ($this->PasswordVerify($password, $pwHashed) == 1) {
                $Query = "SELECT * from `users` where `name`=:login";
                $Stmt = $this->conn->prepare($Query);
                $Stmt->execute(array(':login' => $login));
                $Result = $Stmt->fetch();
                $_SESSION['Logged'] = TRUE;
                $_SESSION['Login_id'] = $Result['id'];
                $_SESSION['Name'] = $Result['name'];
                $this->CheckAdmin($_SESSION['Login_id']);
                $this->Redirect("/?page=login&success=1");
            }
        }
        catch (PDOException $error) {
            echo $error->getMessage();
            exit('</br>Database error');
        }
    }
}