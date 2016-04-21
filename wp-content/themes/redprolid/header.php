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
    <!-- Project SEO -->
    <title><?php wp_title(''); ?></title>
    
    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo content_url('/'); ?>themes/redprolid/assets/img/favicon.ico.png">

    <!-- WebFonts -->
    <!--New Menu-->
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/modernizr.custom.js" type="text/javascript"></script>   
    <!---->
    <script src="//use.typekit.net/nsv5vjx.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		
		fbq('init', '1005504112842099');
		fbq('track', "PageView");</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=1005504112842099&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->

    <?php wp_head(); ?> <!-- AVISAMOS QUE TERMINA EL HEAD -->
    <!--[if IE 9]>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/html5shiv.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/respond.min.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/placeholders.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wrapper pt-63-xs">
      <div class="mobile-navbar hidden-lg"> <!-- MOBILE NAVBAR -->
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
      <div class="mobile-menu  hidden-lg"> <!-- MOBILE MENU -->
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
            <!--<li>
              <a href="#mobile-nav-display-5">Concursos</a>
            </li>
            <li>
              <a href="#mobile-nav-display-6">Charlacafé</a>
            </li>-->
          </ul>
        </div>
        <div class="lista-sesion mt-35">
          <ul class="pl-0">
            <li>
              <a  class=" pv-7 pl-14 text-primary" href="<?php echo home_url('/'); ?>login-movil">Inicia Sesión</a></li>
            <li>
              <a  class=" pv-7 pl-14 text-primary" href="<?php echo home_url('/'); ?>registrate/">Regístrate en la Red</a>
            </li>
            <?php } ?>
            <li style="background-color: transparent;">
              <div class="col-sm-12 text-center-sm user-sign-in-form">
                <?php  
                  if ( is_user_logged_in() ) {
                    $current_user = wp_get_current_user();
                    echo '<div class="text-right text-left-sm text-left-xs pt-35-xs pt-35-sm" style="width:100%;>';
                    echo '< class="pt-7-xs" a href="'.home_url("/").'tu-perfil" style="width:20%; display: block !important;">'.get_avatar( $current_user->ID).'</a>';
                    echo '<h4 class="light mb-7 pl-14" style="text-align: left;">Hola '.$current_user->user_firstname.' '.$current_user->user_lastname.'</h4>';
                    echo '<a class="p-0 fs-18-md fs-12-sm fs-12-xs text-left-land-ipad" href="'.wp_logout_url().'" title="Logout" class="light pv-14-xs pv-21-sm" style="text-transform: none; color:#ed7133;text-align: left;">Cierra tu sesión | </a>   <a class="text-left-land-ipad p-0 fs-18-md fs-12-sm fs-12-xs" href="'.home_url("/").'tu-perfil" class="light" style="text-transform: none; color:#ed7133;text-align: left;">  Edita tu perfíl</a>';
                    echo '</div>';
                    
                    if ( ($current_user instanceof WP_User) ) {
                        //print_r($current_user);
                        echo '<a style="display:none;" href="'.home_url("/").'tu-perfil">'.get_avatar( $current_user->ID).'</a>';
                    }              
                  }
                ?>       
              </div> 
            </li>            
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
