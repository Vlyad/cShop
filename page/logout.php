<?php
global $Smarty;
$Smarty->assign("title", "Wylogowano");
$Smarty->assign("Succes", "Zostałeś poprawnie wylogowany!");
$Smarty->display("users/logout.tpl");
header("Refresh: 2 url=/");
session_destroy();
