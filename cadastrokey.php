<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <base>
    <style>
        img[alt="www.000webhost.com"] {
            display: none;
        }
    </style>

    <meta name="author" content="Noiser">
    <meta name="language" content="pt-br">
    <meta name="google" value="notranslate">
    <meta name="revisit-after" content="1 week">
    <meta name="robots" content="index,follow,noodp,noydir">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- General Website Info -->
    <title>Olym - Painel do Usúario</title>
    <meta name="description" content="Plugins de Minecraft.">
    <meta name="keywords" content="Olym, minecraft, plugins, loja, venda de plugins">
    <link rel="icon" href="app/content/assets/img/logo.png">

    <!-- Open Graphic Protocol -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Olym">
    <meta property="og:title" content="Olym">
    <meta property="og:description" content="Plugins de Minecraft.">
    <meta property="og:image" content="app/content/assets/img/logo.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="Olym">
    <meta name="twitter:title" content="Olym">
    <meta name="twitter:description" content="Plugins de Minecraft.">
    <meta name="twitter:image" content="app/content/assets/img/logo.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="app/content/assets/css/animate.css">
    <link rel="stylesheet" href="app/content/assets/css/auth.css">
    <link rel="stylesheet" href="app/content/assets/css/dark.css">
</head>

<body>

<main class="container">
        <h2>Criar um nova licença</h2>
        <form action="cadastrarkey.php" method="POST">
            <div class="input-field">
                <input type="text" name="buyer_id" id="buyer_id"
                    placeholder="Comprador">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="product" id="product"
                    placeholder="Produto">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="ip" id="ip"
                    placeholder="IP">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="license_key" id="license_key"
                    placeholder="Licença, Obs: em palavras.">
                <div class="underline"></div>
            </div>

            <input type="submit" value="CRIAR">
        </form>
    </main>
</body>

</html>