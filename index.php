<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

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
    <title>Olym - Homepage</title>
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
    <link rel="stylesheet" href="http://olymcollections.tk/app/content/assets/css/animate.css">
    <link rel="stylesheet" href="http://olymcollections.tk/app/content/assets/css/core.css">
    <link rel="stylesheet" href="http://olymcollections.tk/app/content/assets/css/dark.css">

</head>

<body style="overflow: hidden;">
    <!--<div class="loader">
        <span class="square"><span class="inner"></span></span>
    </div>-->
    <header>
        <nav class="navbar">
            <a class="logo" href="#" data-animate="fadeInDown" data-delay=".5">
                <img src="http://olymcollections.tk/app/content/assets/img/logo.png" alt="Olym - Logo">
                <span>Olym</span>
            </a>
            <button class="om float-left hidden-lg-up">
                <div class="om-box">
                    <span class="om-inner"></span>
                </div>
            </button>
            <ul class="menu" data-animate="fadeInDown" data-delay=".8" data-width="992">
                <li><a class="nav-item" href="">Início</a></li>
                <li><a class="nav-item" href="#plugins">Plugins</a></li>
                <li><a class="nav-item" href="https://discord.gg/tBPSESkGcV">Suporte</a></li>
                <a class="nav-button" href="authentication.php">Entrar</a>
            </ul>
        </nav>
    </header>

    <div class="content">
        <div class="about" data-animate="fadeInUp" data-delay=".9">
            <img src="http://olymcollections.tk/app/content/assets/img/logo.png" alt="Logo">
            <div style="text-align: center;">
                <h2>LOJA DE PLUGINS</h2>
                <p>Olá 👋🏻, sejá bem-vindo ao meu site de plugins de minecraft, aqui você pode baixar ou
                    comprar eles, e fique ligado nas atualizações!</p>
            </div>
        </div>
        <div class="features">
            <h3 class="header" data-animate="fadeInDown" data-delay=".2">vantagens</h3>
            <div class="cards">
                <div class="card" data-animate="fadeInUp" data-delay=".2">
                    <img src="http://olymcollections.tk/app/content/assets/img/updates.png" alt="Olym - Atualizações">
                    <h3 class="card-title">atualizações</h3>
                    <p class="card-subtitle">Todos os nossos plugins são atualizados sempre que possível, informando
                        todas as mudanças.</p>
                </div>
                <div class="card" data-animate="fadeInUp" data-delay=".3">
                    <img src="http://olymcollections.tk/app/content/assets/img/control.png" alt="Olym - Control">
                    <h3 class="card-title">facilidade</h3>
                    <p class="card-subtitle">Através do nosso servidor do Discord você poderá controlar o seu plugin.
                    </p>
                </div>
                <div class="card" data-animate="fadeInUp" data-delay=".1">
                    <img src="http://olymcollections.tk/app/content/assets/img/security.png" alt="Olym - Segurança">
                    <h3 class="card-title">confiabilidade</h3>
                    <p class="card-subtitle">Pode ficar tranquilo! Todos os nossos plugins estarão livres de códigos
                        maliciosos.</p>
                </div>
                <div class="card" data-animate="fadeInUp" data-delay=".4">
                    <img src="http://olymcollections.tk/app/content/assets/img/support.png" alt="Olym - Suporte">
                    <h3 class="card-title">atendimento</h3>
                    <p class="card-subtitle">Nossos clientes tem atendimento priorizado por nosso suporte através do
                        Discord.</p>
                </div>
            </div>
        </div>
        <section id="plugins">
            <div class="plugins">
                <h3 class="header" data-animate="fadeInDown" data-delay=".2">meus plugins</h3>
                <div class="cards">
                    <div class="card" data-animate="fadeInUp" data-delay="0.1">
                        <img src="http://olymcollections.tk/app/content/assets/img/plugin.png" alt="Plugin - Logo">
                        <h3>OlymCore <span>[1.0]</span></h3>
                        <p>Gratuito<br>Já Adquirido!</p>
                        <a href="baixar/OlymCore.jar" class="btn grow" target="_blank">BAIXAR</a>
                    </div>
                    <div class="card" data-animate="fadeInUp" data-delay="0.2">
                        <img src="http://olymcollections.tk/app/content/assets/img/plugin.png" alt="Plugin - Logo">
                        <h3>Nome <span>[Version]</span></h3>
                        <p>Gratuito | ou Pago <br>Valor | ou Adquirido!</br></p>
                        <a href="baixar/NomeDaJar.jar" class="btn grow">BAIXAR</a>
                    </div>
                    <div class="card" data-animate="fadeInUp" data-delay="0.3">
                        <img src="http://olymcollections.tk/app/content/assets/img/plugin.png" alt="Plugin - Logo">
                        <h3>Nome <span>[Version]</span></h3>
                        <p>Gratuito | ou Pago <br>Valor | ou Adquirido!</br></p>
                        <a href="baixar/NomeDaJar.jar" class="btn grow">BAIXAR</a>
                    </div>
                    <div class="card" data-animate="fadeInUp" data-delay="0.3">
                        <img src="http://olymcollections.tk/app/content/assets/img/plugin.png" alt="Plugin - Logo">
                        <h3>Nome <span>[Version]</span></h3>
                        <p>Gratuito | ou Pago <br>Valor | ou Adquirido!</br></p>
                        <a href="https://discord.gg/tBPSESkGcV" class="btn grow">COMPRAR</a>
                    </div>
                    <div class="card" data-animate="fadeInUp" data-delay="0.4">
                        <img src="http://olymcollections.tk/app/content/assets/img/plugin.png" alt="Plugin - Logo">
                        <h3>Nome <span>[Version]</span></h3>
                        <p>Gratuito | ou Pago <br>Valor | ou Adquirido!</br></p>
                        <a href="https://discord.gg/tBPSESkGcV" class="btn grow">COMPRAR</a>
                    </div>
                    <div class="card" data-animate="fadeInUp" data-delay="0.4">
                        <img src="http://olymcollections.tk/app/content/assets/img/plugin.png" alt="Plugin - Logo">
                        <h3>Nome <span>[Version]</span></h3>
                        <p>Gratuito | ou Pago <br>Valor | ou Adquirido!</br></p>
                        <a href="https://discord.gg/tBPSESkGcV" class="btn grow">COMPRAR</a>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <footer data-animate="fadeInUp" data-delay=".1">
        <div class="bottom" data-animate="fadeInUp" data-delay=".3">
            <h4>&copy 2021 Olym. Todos os direitos reservados.</h4>
        </div>
        </div>
    </footer>
    <script src="http://olymcollections.tk/app/content/assets/js/jquery/jquery.js"></script>
    <script src="http://olymcollections.tk/app/content/assets/js/waypoint/jquery.waypoints.min.js"></script>
    <script src="http://olymcollections.tk/app/content/assets/js/core.js"></script>
    <div
        style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">
        <a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank"
            href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img
                src="../cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"
                alt="www.000webhost.com"></a>
    </div>
    <script>function getCookie(t) { for (var e = t + "=", n = decodeURIComponent(document.cookie).split(";"), o = 0; o < n.length; o++) { for (var i = n[o]; " " == i.charAt(0);)i = i.substring(1); if (0 == i.indexOf(e)) return i.substring(e.length, i.length) } return "" } getCookie("hostinger") && (document.cookie = "hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;", location.reload()); var wordpressAdminBody = document.getElementsByClassName("wp-admin")[0], notification = document.getElementsByClassName("notice notice-success is-dismissible"), hostingerLogo = document.getElementsByClassName("hlogo"), mainContent = document.getElementsByClassName("notice_content")[0]; if (null != wordpressAdminBody && notification.length > 0 && null != mainContent) { var googleFont = document.createElement("link"); googleFontHref = document.createAttribute("href"), googleFontRel = document.createAttribute("rel"), googleFontHref.value = "https://fonts.googleapis.com/css?family=Roboto:300,400,600,700", googleFontRel.value = "stylesheet", googleFont.setAttributeNode(googleFontHref), googleFont.setAttributeNode(googleFontRel); var css = "@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}", style = document.createElement("style"), sheet = window.document.styleSheets[0]; style.styleSheet ? style.styleSheet.cssText = css : style.appendChild(document.createTextNode(css)), document.getElementsByTagName("head")[0].appendChild(style), document.getElementsByTagName("head")[0].appendChild(googleFont); var button = document.getElementsByClassName("upgrade_button_red")[0], link = button.parentElement; link.setAttribute("href", "https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp"), link.innerHTML = '<button class="upgrade_button_red_sale">Go for it</button>', (notification = notification[0]).setAttribute("style", "padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"), notification.className = "notice notice-error is-dismissible"; var mainContentHolder = document.getElementById("main_content"); mainContentHolder.setAttribute("style", "padding: 0;"), hostingerLogo[0].remove(); var h1Tag = notification.getElementsByTagName("H1")[0]; h1Tag.className = "000-h1", h1Tag.innerHTML = "Black Friday Prices", h1Tag.setAttribute("style", 'color: white; font-family: "Roboto", sans-serif; font-size: 22px; font-weight: 700; text-transform: uppercase;'); var h2Tag = document.createElement("H2"); h2Tag.innerHTML = "Get 90% Off!", h2Tag.setAttribute("style", 'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'), h1Tag.parentNode.insertBefore(h2Tag, h1Tag.nextSibling); var paragraph = notification.getElementsByTagName("p")[0]; paragraph.innerHTML = "Get Web Hosting for $0.99/month + SSL Certificate for FREE!", paragraph.setAttribute("style", 'font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 700; margin-bottom: 15px;'); var list = notification.getElementsByTagName("UL")[0]; list.remove(); var org_html = mainContent.innerHTML, new_html = '<div class="content-wrapper">' + mainContent.innerHTML + '</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2020-wp-inject-img.png"></div>'; mainContent.innerHTML = new_html; var saleImage = mainContent.getElementsByClassName("web-hosting-90-off-image")[0] }</script>
</body>

</html>
