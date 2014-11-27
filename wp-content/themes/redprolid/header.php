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
    <meta property="og:description" content="La Red PROLID es una plataforma para conectar, promover intercambios y aprendizajes">
    <meta property="og:image" content="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Apple Mobile -->
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Apple icons -->
    <link rel="apple-touch-icon" sizes="156x156" href="">
    <link rel="apple-touch-icon" sizes="128x128" href="">
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="apple-touch-icon" href="">

    <!-- WebFonts -->
    <script async type="text/javascript" src="//use.typekit.net/nsv5vjx.js"></script>
    <script async type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- APP STYLES -->
    <link rel="stylesheet" href="<?php echo content_url('/'); ?>themes/redprolid/stylesheets/main.css">
    <link rel="stylesheet" href="<?php echo content_url('/'); ?>themes/redprolid/stylesheets/ebm-loops.css">
    <!-- <link rel="stylesheet" href="stylesheets/main.min.css"> -->

		<style>
			#breadcrumbs{
			    list-style:none;
			    margin:0.7rem 0;
			    padding-left:0;
			    overflow:hidden;
			}
			 
			#breadcrumbs li{
			    float:left;
			    margin-right:5px;
			}
			 
			#breadcrumbs .separator{
			    font-weight:100;
			    font-size:20px;
			    color:#CCC;
			}			
		</style>	

  </head>
  <body>