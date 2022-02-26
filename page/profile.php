<?php
global $Smarty, $Statement;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['changesid'] === "1") {
    require_once(APP."DatabaseController.php");
    $Steam_ID = preg_replace('/[^-a-zA-Z0-9_:]/', '', $_POST['Steam_ID']);
    if ($Steam_ID === "") {
        $_SESSION['ErrorMsg'] = "Pole nie może być pustę";
        header("Location: /?page=profile");
        exit();
    }
    unset($_SESSION['ErrorMsg']);
    $Query = "UPDATE `users` SET `Steam_id`=:Steam_id WHERE `id`=:id";
    $Stmt = $Statement->prepare($Query);
    $Stmt->bindValue(":Steam_id", $Steam_ID);
    $Stmt->bindValue(":id", $_SESSION['Login_id']);
    $Stmt->execute();
    $Query = "SELECT `Steam_id` from `users` where `id`=:id";
    $Stmt = $Statement->prepare($Query);
    $Stmt->bindValue(":id", $_SESSION['Login_id']);
    $Stmt->execute();
    $Result = $Stmt->fetch();
    $_SESSION['Steam_id'] = $Result['Steam_id'];
    $_SESSION['Success'] = "Zmieniłeś SteamID";
    header("url=/?page=profile");
}

$Smarty->assign("Name", $_SESSION['Name']);
$Smarty->assign("Wallet", $_SESSION['Wallet']);
$Smarty->assign("Steam_id", $_SESSION['Steam_id']);
$Smarty->assign("title", "Profil użytkownika ".$_SESSION['Name']);
$Smarty->display("users/profile.tpl");
unset($_SESSION['ErrorMsg'], $_SESSION['Success']);
