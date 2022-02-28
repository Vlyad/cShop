<?php
global $Smarty, $Statement;
if ($_SESSION['Logged'] === TRUE) {
    $Smarty->assign("Wallet", $_SESSION['Wallet']);
    $Smarty->assign("title", "Doładuj portfel");
}
$Smarty->display("users/wallet.tpl");