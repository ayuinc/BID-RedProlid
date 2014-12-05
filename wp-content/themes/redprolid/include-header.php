    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="logo">
              <a href="<?php echo home_url(); ?>"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png" class="img-responsive"></a>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <div class="user-sign-up text-center">
              <h3 class="lh-lg">¿Quieres ser parte <br>de la Red PROLID?</h3>
              <a href="<?php echo home_url("/"); ?>registrate" class="btn btn-primary">Únete</a>
<!--               <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#mailChimp">Únete</a> -->
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <div class="user-sign-in-form">
              <?php 
                if ( is_user_logged_in() ) {

                  $current_user = wp_get_current_user();
                  echo '<div class="text-right">';
                  echo '<h4>Hola '.$current_user->user_nicename.'</h4>';
									echo '<a href="'.wp_logout_url().'" title="Logout">Cierra tu sesión</a>';
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