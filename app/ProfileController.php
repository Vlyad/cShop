<?php

use JetBrains\PhpStorm\NoReturn;

require("DatabaseController.php");
require("Core.php");
class ProfileController extends Core
{
    public int $id;
    private PDO $conn;
    public function __construct() {
        global $Statement;
        $this->conn = $Statement;
    }
    private function GetDatabase($what, $id) {
        $Stmt = $this->conn->prepare("SELECT `$what` FROM `users` WHERE `id` = :id");
        $Stmt->execute(array(':id' => $id));
        return $Stmt->fetch()[(string)$what] ?? null;
    }
    public function GetLogin($id) {
        return $this->GetDatabase("name", $id);
    }
    public function GetSteamId($id) {
        return $this->GetDatabase("Steam_id", $id);
    }
    public function GetWallet($id) {
        return $this->GetDatabase("wallet", $id);
    }
    public function GetWebGroup($id) {
        return $this->GetDatabase("webgroup", $id);
    }
    public function isAdmin($id): bool {
        if ($this->GetWebGroup($id)) {
            return $this->GetWebGroup($id) == 1;
        }
        return false;
    }
    #[NoReturn] public function SetSteamId($id, $steamid): void {
        $Query = "UPDATE `users` SET `Steam_id`=:Steam_id WHERE `id` = '$id'";
        $Stmt = $this->conn->prepare($Query);
        $Stmt->bindValue(":Steam_id", $steamid, PDO::PARAM_STR);
        $Stmt->execute();
        $_SESSION['Success'] = "Zmieniłeś SteamID";
        $this->Refresh("0", "/?page=profile");
    }
    public function SetWallet($id, $amount): void {
        $Query = "UPDATE `users` SET `wallet`=:amount WHERE `id` = '$id'";
        $Stmt = $this->conn->prepare($Query);
        $Stmt->bindValue(":amount", (float)$amount);
        $Stmt->execute();
    }
}