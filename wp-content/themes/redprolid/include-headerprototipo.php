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
<header class="pt-7 pb-7 hidden-xs hidden-sm hidden-md">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="logo">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png" class="img-responsive"></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="user-sign-up text-center mt-28">
          <h3 class="medium">¿Quieres ser parte de la Red PROLID?</h3>
          <a href="<?php echo home_url("/"); ?>registrate" class="btn btn-primary">Únete</a>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-4">
        <div class="user-sign-in-form">
          <?php 
            if ( is_user_logged_in() ) {

              $current_user = wp_get_current_user();
              echo '<div class="text-right">';
              echo '<h4 class="light mb-0">Hola '.$current_user->user_firstname.' '.$current_user->user_lastname.'</h4>';
              echo '<a href="'.wp_logout_url().'" title="Logout" class="medium">Cierra tu sesión</a> | <a href="'.home_url("/").'tu-perfil" class="medium">Edita tu perfíl</a>';
              echo '</div>';
              
              if ( ($current_user instanceof WP_User) ) {
                  //print_r($current_user);
                  echo '<a href="'.home_url("/").'tu-perfil">'.get_avatar( $current_user->ID).'</a>';
              }              

            } else {
              echo do_shortcode('[dm_login_form]'); 
            }
          ?>       
        </div>
      </div>
    </div>
  </div>
</header>
