<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HPN
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        <!-- Iconos HPN -->
        <link rel="stylesheet" href="./wp-content/themes/hpn/assets/icons/css/materialdesignicons.css">
        <!-- Font HPN -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body class="full home" <?php body_class(); ?>>
	<header id="header" class="hpn-header">
	<!-- Topbar -->
	<div class="hpn-topbar">
            <!-- Datos de contacto -->
            <div class="hpn-topbar-subcontainer">
                <!-- Mail -->
                <div class="hpn-element-txt">
                    <img src="" alt="" class="hpn-icon">
                    <h6 class="txt-bold margin-left-25">hola@hospitalneuquen.org.ar</h6>
                </div>
                <!-- Direccion -->
                <div class="hpn-element-txt">
                    <img src="" alt="" class="hpn-icon">
                    <h6 class="txt-bold margin-left-25">Buenos Aires 450</h6>
                </div>
                <!-- Telefono -->
                <div class="hpn-element-txt">
                    <img src="" alt="" class="hpn-icon">
                    <h6 class="txt-bold margin-left-25">(299) 442-3154 | (299) 53654334</h6>
                </div>
            </div>
            <!-- Numeros de emergencia -->
            <div class="hpn-topbar-subcontainer rounded fondo azul-oscuro">
                <div class="hpn-element-txt sm">
                    <h5 class="txt-xs txt-cyan txt-bold">112</h5>
                    <h6 class="txt-blanco txt-bold margin-left-12">fnskfnas fndks</h6>
                </div>
                <div class="hpn-element-txt sm">
                    <h5 class="txt-xs txt-cyan txt-bold">432</h5>
                    <h6 class="txt-blanco txt-bold margin-left-12">dnaslkdnas</h6>
                </div>
                <div class="hpn-element-txt sm">
                    <h5 class="txt-xs txt-cyan txt-bold">123</h5>
                    <h6 class="txt-blanco txt-bold margin-left-12">dknsalkdnas</h6>
                </div>
            </div>
            <!-- Redes sociales -->
            <div class="hpn-topbar-subcontainer ">
                <div class="hpn-icon-container">
                    <div class="hpn-icon" alt="" class=""><i class="mdi mdi-github-circle mdi-18px margin-left-12"></i></div>
                    <div class="hpn-icon" alt="" class=""><i class="mdi mdi-twitter-circle mdi-18px margin-left-12"></i></div>
                    <div class="hpn-icon" alt="" class=""><i class="mdi mdi-twitter-circle mdi-18px margin-left-12"></i></div>
                </div>
            </div>            
        </div>

		<!-- Logo HPN -->

        <!-- Navbar -->
		<nav class="luxbar luxbar-default">
			<input type="checkbox" id="luxbar-checkbox" class="luxbar-checkbox">
			<div class="luxbar-menu luxbar-menu-light">
				<ul class="luxbar-navigation">
					<li class="luxbar-header">
						<a class="" href="https://localhost/hpn"><img class="hpn-logo-desktop" src="./wp-content/themes/hpn/assets/svg/hpn-marca-h.svg" alt=""></a>
						<a class="" href="https://localhost/hpn"><img class="hpn-logo-mobile" src="./wp-content/themes/hpn/assets/svg/hpn-marca-responsive.svg" alt="" class="logo hpn-logo-mobile"></a>
						<!-- <?php the_custom_logo();
							if ( is_front_page() && is_home() ) : ?>
								<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif;
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?> -->
						<label class="luxbar-hamburger luxbar-hamburger-doublespin" for="luxbar-checkbox"> <span></span> </label>
					</li>
					<li class="hpn-nav-item"><?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu',) ); ?></li>
                    <li class="rounded-left w-xl h-sm"><?php get_search_form(); ?></li>
                    <!-- <button type="submit" value="Buscar" class="rounded-right magenta h-sm mdi mdi-github-circle mdi-18px"></button></li> -->
				</ul>
			</div>
		</nav>
	</header><!-- #masthead -->