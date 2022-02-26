<?php
/* Smarty version 4.1.0, created on 2022-02-25 20:09:05
  from 'F:\cshop\view\template\layouts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621929514c6f11_13388900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5957a0b7fdd5a3a0c0060fd56d53008e5c2fb736' => 
    array (
      0 => 'F:\\cshop\\view\\template\\layouts\\header.tpl',
      1 => 1645816144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621929514c6f11_13388900 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/public/css/app.css" rel="stylesheet">
</head>
<body>
<header class="header-banner" role="banner">
    <div class="banner"><img src="/public/img/header1.png"> </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-5">
            <li class="nav-item active">
                <a class="nav-link" href="/">Główna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=forum">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=cennik">Cennik</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" id="navbar-nav-right">
            <?php if ((isset($_SESSION['Logged']))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="/?page=profile"><?php echo $_SESSION['Name'];?>
</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/?page=logout">Wyloguj!</a>
                </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="/?page=login">Login</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="/?page=register">Register</a>
            </li>
            <?php }?>
        </ul>
    </div>
</nav>
<section>
    <div class="container">
        <div class="container-fluid"><?php }
}
