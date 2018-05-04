<!DOCTYPE html>
<html>
<!-- Header -->
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html">
        
        <title>HPN</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <!-- Theme style -->
        <?php wp_enqueue_style( 'main', get_template_directory_uri() . '/main.css',false,'1.1','all'); ?>
        <!-- Iconos HPN -->
        <link rel="stylesheet" href="./wp-content/themes/hpn/assets/icons/css/materialdesignicons.css">
        <!-- Font HPN -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <!-- WP Head -->
        <?php wp_head(); ?>
    </head>
    <body class="full home">
    <!-- Header -->
    <header id="header" class="hpn-header">
        <div class="hpn-topbar">
            <!-- Datos de contacto -->
            <div class="hpn-topbar-subcontainer">
                <!-- Mail -->
                <div class="hpn-element-txt">
                    <img src="" alt="" class="hpn-icon">
                    <h6 class="txt-bold margin-left">hola@hospitalneuquen.org.ar</h6>
                </div>
                <!-- Direccion -->
                <div class="hpn-element-txt">
                    <img src="" alt="" class="hpn-icon">
                    <h6 class="txt-bold margin-left">Buenos Aires 450</h6>
                </div>
                <!-- Telefono -->
                <div class="hpn-element-txt">
                    <img src="" alt="" class="hpn-icon">
                    <h6 class="txt-bold margin-left">(299) 442-3154 | (299) 53654334</h6>
                </div>
            </div>
            <!-- Numeros de emergencia -->
            <div class="hpn-topbar-subcontainer rounded fondo azul-oscuro">
                <div class="hpn-element-txt sm">
                    <h5 class="txt-xs txt-cyan txt-bold">112</h5>
                    <h6 class="txt-blanco txt-bold margin-left">fnskfnas fndks</h6>
                </div>
                <div class="hpn-element-txt sm">
                    <h5 class="txt-xs txt-cyan txt-bold">432</h5>
                    <h6 class="txt-blanco txt-bold margin-left">dnaslkdnas</h6>
                </div>
                <div class="hpn-element-txt sm">
                    <h5 class="txt-xs txt-cyan txt-bold">123</h5>
                    <h6 class="txt-blanco txt-bold margin-left">dknsalkdnas</h6>
                </div>
            </div>
            <!-- Redes sociales -->
            <div class="hpn-topbar-subcontainer ">
                <div class="hpn-icon-container">
                    <div class="hpn-icon" alt="" class=""><i class="mdi mdi-github-circle mdi-18px"></i></div>
                    <div class="hpn-icon" alt="" class=""><i class="mdi mdi-twitter-circle mdi-18px"></i></div>
                    <div class="hpn-icon" alt="" class=""><i class="mdi mdi-twitter-circle mdi-18px"></i></div>
                </div>
            </div>            
        </div>
        <!-- Navbar -->
        <div class="luxbar luxbar-default">
                <input type="checkbox" id="luxbar-checkbox" class="luxbar-checkbox">
                <div class="luxbar-menu luxbar-menu-light">
                    <ul class="luxbar-navigation">
                        <li class="luxbar-header">
                            <a class="" href="https://hospitalneuquen.org.ar"><img class="hpn-logo-desktop" src="./wp-content/themes/hpn/assets/svg/hpn-marca-h.svg" alt=""></a>
                            <a class="" href="https://hospitalneuquen.org.ar"><img class="hpn-logo-mobile" src="./wp-content/themes/hpn/assets/svg/hpn-marca-responsive.svg" alt="" class="logo hpn-logo-mobile"></a>
                            <label class="luxbar-hamburger luxbar-hamburger-doublespin" for="luxbar-checkbox"> <span></span> </label>
                        </li>
                        <li><?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?></li> 
                    </ul>
                </div>
            </div>

    </header>