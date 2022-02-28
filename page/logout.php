<?php
global $Smarty;
$Smarty->assign("title", "Wylogowano");
$Smarty->assign("Succes", "Zostałeś poprawnie wylogowany!");
$Smarty->display("users/logout.tpl");
header("Refresh: 1 url=/");
session_destroy();
