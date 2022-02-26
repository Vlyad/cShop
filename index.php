<?php
session_start();
const DIR = __DIR__;
const PAGE = DIR . "/page/";
const APP = DIR . "/app/";
require_once DIR."/vendor/autoload.php";
require_once DIR."/app/PageController.php";

global $Smarty, $config;
$Smarty = new Smarty();
$Smarty->setTemplateDir(DIR."/view/template/");
$Smarty->setConfigDir(DIR."/view/config/");
$Smarty->setCompileDir(DIR."/view/compile/");
$Smarty->setCacheDir(DIR.'/view/cache/');
