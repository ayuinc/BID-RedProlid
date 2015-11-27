<?php
/*
Template Name: Registro Confirmacion FB1
*/

get_header(); ?>

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
    <script src="//use.typekit.net/nsv5vjx.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <?php //wp_head(); ?> <!-- AVISAMOS QUE TERMINA EL HEAD -->
    <!--[if IE 9]>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/html5shiv.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/respond.min.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/placeholders.min.js"></script>
    <![endif]-->	
  </head>
  <body>
   <header class="header-content">
       <div class="header-logo">
           <div class="container-sm text-center">
               <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-head.png" class="img-responsive" style="width:40%;">
           </div>
       </div>     
   </header>
<section> 
  <div class="container">
    <!-- IF NO POSTS in FOROS -->
    <div class="ph-70 text-center">
    	<div class="container-sm">
	    	<div class="row pv-49">
	    		<div class="col-sm-8 col-sm-offset-2">
		    		<h3 class="medium text-center mt-35">Hemos recibido tu información</h3>
		    		<p>Conoce más de la red <a href="http://redprolid.org">aquí</a> </p>
	    		</div>
	    	</div>	    	
    	</div>
    </div>
    <!-- END:IF NO POSTS in FOROS -->
  </div>
</section>
<?php get_footer(); ?> 













