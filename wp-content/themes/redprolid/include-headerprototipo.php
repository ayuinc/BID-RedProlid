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

    <?php wp_head(); ?> <!-- AVISAMOS QUE TERMINA EL HEAD -->
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
               <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-head.png" class="img-responsive">
           </div>
       </div>
   </header>
