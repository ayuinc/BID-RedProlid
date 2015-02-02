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

    <title>Red Prolid | Banco Interamericano del Desarrollo BID</title>
    <!-- Project SEO -->
    <meta name="description" content="">
    <meta name="keywords" content="" /> 
    <meta name="author" content="" />

    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url('/'); ?>">
    <meta property="og:title" content="Red Prolid | Banco Interamericano del Desarrollo BID">
    <meta property="og:site_name" content="Red PROLID">
    <meta property="og:description" content="La Red PROLID es una plataforma para conectar, promover intercambios y aprendizajes entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo en el sector público en Latinoamérica">
    <meta property="og:image" content="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@redprolid">
    <meta name="twitter:title" content="Red PROLID">
    <meta name="twitter:url" content="<?php echo home_url('/'); ?>">
    <meta name="twitter:description" content="La Red PROLID es una plataforma para conectar, promover intercambios y aprendizajes entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo en el sector público en Latinoamérica">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo content_url('/'); ?>themes/redprolid/assets/img/favicon.png">

    <!-- WebFonts -->
    <script src="//use.typekit.net/nsv5vjx.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!-- APP STYLES -->
    <link rel="stylesheet" href="<?php echo content_url('/'); ?>themes/redprolid/stylesheets/main.css">
    <link rel="stylesheet" href="<?php echo content_url('/'); ?>themes/redprolid/stylesheets/ebm.css">
  </head>
  <body>
    <div class="site-wrapper pt-56-xs">
      <div class="mobile-navbar hidden-sm-up"> <!-- MOBILE NAVBAR -->
        <div class="left">
          <div class="logo" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-red-prolid-icon.png)"></div>
        </div>
        <div class="right">
          <a href="#" class="menu-trigger icon-menu">M</a>
        </div>
      </div> <!-- END:Mobile navbar -->
      <div class="mobile-menu hidden-sm-up"> <!-- MOBILE MENU -->
        <div class="mobile-nav-display-triggers">
          <ul>
            <li>
              <a href="#mobile-nav-display-1">mobile-nav-display-1</a>
            </li>
            <li>
              <a href="#mobile-nav-display-2">mobile-nav-display-2</a>
            </li>
            <li>
              <a href="#mobile-nav-display-3">mobile-nav-display-3</a>
            </li>
            <li>
              <a href="#mobile-nav-display-4">mobile-nav-display-4</a>
            </li>
            <li>
              <a href="#mobile-nav-display-5">mobile-nav-display-5</a>
            </li>
            <li>
              <a href="#mobile-nav-display-6">mobile-nav-display-6</a>
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
            <h1>mobile-nav-display-2</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="#">Publicaciones</a>
              </li>
              <li>
                <a href="#"><span>Empresas</span> y clientes</a>
              </li>
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-3">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>mobile-nav-display-3</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="#"><span>Ingeniería</span> Industrial</a>
              </li>
              <li>
                <a href="#"><span>Ingeniería</span> De la Energía</a>
              </li>
              <li>
                <a href="#" class="btn btn-primary btn-custom bold">Postular</a>
              </li>
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-4">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>mobile-nav-display-4</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="#"><span>Modalidades</span> de admisión</a>
              </li>
              <li>
                <a href="#"><span>Charlas</span> informativas</a>
              </li>
              <li>
                <a href="#" class="btn btn-primary btn-custom bold">Postular a la pre</a>
              </li>
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-5">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>mobile-nav-display-5</h1>           
          </div>
          <div class="center">
            <ul>
              <li>
                <a href="#"><span>Proceso de</span> ampliación</a>
              </li>
              <li>
                <a href="#"><span>Ven a</span> la utec</a>
              </li>
              <li>
                <a href="#"><span>Convenios de</span> Intercambio</a>
              </li>
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="mobile-nav-display" id="mobile-nav-display-6">
          <div class="top">
            <a class="back">Regresar</a>
            <h1>mobile-nav-display-6</h1>           
          </div>
          <div class="center">
            <ul>
              <li><a href="#">Diplomados</a></li>
              <li>
                <a href="#"><span>Cursos</span> online</a>
              </li>
              <li>
                <a href="#"><span>Cursos</span> Cortos</a>
              </li>
              <li>
                <a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold">Inscríbete</a>
              </li>
            </ul>
          </div>
          <div class="bottom"></div>
        </div>
      </div> <!-- END:Mobile menu -->
    