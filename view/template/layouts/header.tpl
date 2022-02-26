<!DOCTYPE HTML>
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
            {if isset($smarty.session.Logged)}
                <li class="nav-item">
                    <a class="nav-link" href="/?page=profile">{$smarty.session.Name}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/?page=logout">Wyloguj!</a>
                </li>
            {else}
            <li class="nav-item">
                <a class="nav-link" href="/?page=login">Login</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="/?page=register">Register</a>
            </li>
            {/if}
        </ul>
    </div>
</nav>
<section>
    <div class="container">
        <div class="container-fluid">