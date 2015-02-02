<header class="pt-7 pb-7 hidden-sm-down">
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
              echo '<h4 class="light">Hola '.$current_user->user_nicename.'</h4>';
							echo '<a href="'.wp_logout_url().'" title="Logout" class="light">Cierra tu sesión</a>';
              echo '</div>';

            } else {

              echo do_shortcode('[dm_login_form]'); 

            }
          ?>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- MOBILE NAVIGATION -->
<div class="mobile-header hidden-sm-up">
  <div class="top-bar">
    <div class="left">
      <a href="#" class="logo" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-red-prolid-icon.png)"></a>
    </div>
    <div class="right">
      <div class="menu-trigger"><i class="flaticon-logo3"></i></div>
    </div>
  </div>
  <div class="nav-display"></div>
</div>

















