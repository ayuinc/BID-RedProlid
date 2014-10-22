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
              <h3>¿Quieres ser parte <br>de la Red PROLID?</h3>
              <a href="#" class="btn btn-primary">Únete</a>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <div class="user-sign-in-form">
                <?php echo do_shortcode('[dm_login_form]'); ?>
            </div>
          </div>
        </div>
      </div>
    </header>