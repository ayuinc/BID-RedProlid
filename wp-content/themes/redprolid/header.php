<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">

    <!-- <title>Red Prolid | Banco Interamericano del Desarrollo BID</title> -->
    <!-- Project SEO -->
<!--     <meta name="description" content="">
    <meta name="keywords" content="" /> 
    <meta name="author" content="" /> -->

    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph -->
<!--     <meta property="og:type" content="website">
    <meta property="og:url" content="<?php //echo home_url('/'); ?>">
    <meta property="og:title" content="Red Prolid | Banco Interamericano del Desarrollo BID">
    <meta property="og:site_name" content="Red PROLID">
    <meta property="og:description" content="La Red PROLID es una plataforma para conectar, promover intercambios y aprendizajes entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo en el sector público en Latinoamérica">
    <meta property="og:image" content="<?php //echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png">

    Twitter Cards
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@redprolid">
    <meta name="twitter:title" content="Red PROLID">
    <meta name="twitter:url" content="<?php //echo home_url('/'); ?>">
    <meta name="twitter:description" content="La Red PROLID es una plataforma para conectar, promover intercambios y aprendizajes entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo en el sector público en Latinoamérica">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="<?php //echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png">
 -->
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo content_url('/'); ?>themes/redprolid/assets/img/favicon.ico.png">

    <!-- WebFonts -->
    <script src="//use.typekit.net/nsv5vjx.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?> <!-- AVISAMOS QUE TERMINA EL HEAD -->
    <!--[if IE 9]>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/html5shiv.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/respond.min.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/placeholders.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wrapper pt-63-xs">
      <div class="mobile-navbar hidden-md hidden-lg"> <!-- MOBILE NAVBAR -->
        <div class="left">
          <a href="<?php echo home_url(); ?>"><div class="logo" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png)"></div></a>
        </div>
        <div class="right pr-14-sm pr-14-xs">
          <button type="button" class="tcon tcon-menu--xcross menu-trigger pb-14-xs " aria-label="toggle menu">
            <span class="tcon-menu__lines" aria-hidden="true"></span>
            <span class="tcon-visuallyhidden">toggle menu</span>
          </button>
        </div>
      </div> <!-- END:Mobile navbar -->
      <div class="mobile-menu hidden-md hidden-lg"> <!-- MOBILE MENU -->
        <div class="mobile-nav-display-triggers">
          <ul>
            <li>
              <a href="<?php echo home_url(); ?>">Inicio</a>
            </li>
            <li>
              <a href="#mobile-nav-display-2">Red PROLID</a>
            </li>
            <li>
              <a href="#mobile-nav-display-3">Desarrolla tu liderazgo</a>
            </li>
            <li>
              <a href="#mobile-nav-display-4">Entérate</a>
            </li>
            <?php if (!is_user_logged_in() ) { ?>
            <li>
              <a href="<?php echo home_url('/'); ?>registrate#sign-in-form">Inicia Sesión</a></li>
            <li>
              <a href="<?php echo home_url('/'); ?>registrate/">Regístrate en la Red</a>
            </li>
            <?php } ?>
            <li>
              <div class="col-sm-12 text-center-sm user-sign-in-form">
                <?php 
                  if ( is_user_logged_in() ) {
                    $current_user = wp_get_current_user();
                    echo '<div class="text-right text-left-sm text-left-xs pt-35-xs pt-35-sm">';
                    echo '<h4 class="light mb-0">Hola '.$current_user->user_firstname.' '.$current_user->user_lastname.'</h4>';
                    echo '<a href="'.wp_logout_url().'" title="Logout" class="medium pv-14-xs pv-21-sm">Cierra tu sesión</a> | <a href="'.home_url("/").'tu-perfil" class="medium">Edita tu perfíl</a>';
                    echo '</div>';
                    
                    if ( ($current_user instanceof WP_User) ) {
                        //print_r($current_user);
                        echo '<a href="'.home_url("/").'tu-perfil">'.get_avatar( $current_user->ID).'</a>';
                    }              
                  }
                ?>       
              </div> 
          </li>            
            <!--<li>
              <a href="#mobile-nav-display-5">Concursos</a>
            </li>
            <li>
              <a href="#mobile-nav-display-6">Charlacafé</a>
            </li>-->
          </ul>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-1">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>mobile-nav-display-1</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="#">Respaldo</a>
              </li>
              <li>
                <a href="#">Autoridades</a>
              </li>           
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-2">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>Red PROLID</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="<?php echo home_url('/'); ?>redprolid/">¿Qué es Red PROLID?</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a>
              </li>
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-3">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>Desarrolla tu liderazgo</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/">ArTICuladas</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/">Nivelando la cancha</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/">Listas para la política</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/">Agenda de género</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas">Pistas</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-tu-estilo/">A tu estilo</a>
              </li>
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-4">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>Entérate</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="<?php echo home_url('/'); ?>enterate">Entérate</a>
              </li>            
              <li>
                <a href="<?php echo home_url('/'); ?>campeonas">Campeonas</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>puntos-de-vista">Puntos de vista</a>
              </li>              
              <li>
                <a href="<?php echo home_url('/'); ?>noticias">Noticias</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>video" class="videos">Videos</a>
              </li>              
              <li>
                <a href="<?php echo home_url('/'); ?>eventos">Eventos</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>publicaciones">Publicaciones</a>
              </li>              
              <!--<li>
                <a href="<?php echo home_url('/'); ?>boletin">Nuestro boletín</a>
              </li>-->
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-5">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>Concursos</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="<?php echo home_url('/'); ?>concursos">Concursos</a>
              </li>
              <li>
                <a href="<?php echo home_url('/'); ?>concursos-anteriores">Concursos anteriores</a>
              </li>
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-6">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>Charlacafé</h1>
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="<?php echo home_url('/'); ?>foros-proximamente">Foros virtuales</a>
              </li>
              <!--<li>
                <a href="#">¿Quieres ver los foros anteriores?</a>
              </li>-->
              <li>
                <a href="<?php echo home_url('/'); ?>webinarios-proximamente">Webinarios</a>
              </li>
              <!--<li>
                <a href="<?php echo home_url('/'); ?>webinarios-anteriores">Webinarios anteriores</a>
              </li>-->
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
      </div> <!-- END:Mobile menu -->
    
