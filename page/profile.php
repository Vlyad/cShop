<?php
global $Smarty, $Statement;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['changesid'] === "1") {
    $Steam_ID = preg_replace('/[^-a-zA-Z0-9_]/', '', $_POST['Steam_ID']);
    $Query = "UPDATE `users` SET `Steam_id`=':Steam_id' WHERE `name`=':id'";
    $Stmt = $Statement->prepare($Query);
    $Stmt->bindValue(":Steam_id", $Steam_ID, PDO::PARAM_STR);
    $Stmt->bindValue(":id", $_SESSION['Login_id'], PDO::PARAM_INT);
    $Stmt->execute();
}

$Smarty->assign("Name", $_SESSION['Name']);
$Smarty->assign("Wallet", $_SESSION['Wallet']);
$Smarty->assign("Steam_id", $_SESSION['Steam_id']);
$Smarty->assign("title", "Profil użytkownika ".$_SESSION['Name']);
$Smarty->display("users/profile.tpl");
