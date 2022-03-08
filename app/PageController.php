<?php
global $Smarty;

$Smarty = new Smarty();
$Smarty->setTemplateDir(DIR."/view/template/");
$Smarty->setConfigDir(DIR."/view/config/");
$Smarty->setCompileDir(DIR."/view/compile/");
$Smarty->setCacheDir(DIR.'/view/cache/');
if (isset($_GET['page'])) {
    $Page = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['page']);
    switch ($Page) {
        case "cennik":
            require_once PAGE."price.php";
            break;
        case "forum":
            header("Location: https://cshusaria.pl/");
            break;
        case "login":
            require_once PAGE."login.php";
            break;
        case "register":
            require_once PAGE."register.php";
            break;
        case "logout":
            require_once PAGE."logout.php";
            break;
        case "profile":
            require_once PAGE."profile.php";
            break;
        case "wallet":
            require_once PAGE."wallet.php";
        case "admin":
            require_once PAGE."admin.php";
    }
}
else {
    require_once PAGE."home.php";
}
