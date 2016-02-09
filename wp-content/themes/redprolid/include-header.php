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
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=222368,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->  
</header>
