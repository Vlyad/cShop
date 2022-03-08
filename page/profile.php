<?php
global $Smarty;
require_once APP."ProfileController.php";
$Profile = new ProfileController();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['changesid'] === "1") {
    $Steam_ID = preg_replace('/[^-a-zA-Z0-9_:]/', '', $_POST['Steam_ID']);
    if ($Steam_ID === "") {
        $_SESSION['ErrorMsg'] = "Pole nie może być pustę";
        header("Location: /?page=profile");
        exit();
    }
    $Profile->SetSteamId($_SESSION['Login_id'], $Steam_ID);
    $_SESSION['Steam_id'] = $Profile->GetSteamId($_SESSION['Login_id']);
    unset($_SESSION['ErrorMsg']);
}
if ($_SESSION['Logged'] === TRUE) {
    $_SESSION['Steam_id'] = $Profile->GetSteamId($_SESSION['Login_id']);
    $_SESSION['Wallet'] = $Profile->GetWallet($_SESSION['Login_id']);
    $Smarty->assign("Name", $_SESSION['Name']);
    $Smarty->assign("Wallet", $_SESSION['Wallet']);
    $Smarty->assign("Steam_id", $_SESSION['Steam_id']);
    $Smarty->assign("title", "Profil użytkownika " . $_SESSION['Name']);
}
$Smarty->display("users/profile.tpl");
unset($_SESSION['ErrorMsg'], $_SESSION['Success']);
