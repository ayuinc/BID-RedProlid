<?php
/*
  Plugin Name: Custom Login Form
  Description: Simple Login form plugin.
  Version: 1.0
  Author: Ayuinc.
 */
function dlf_form() {
 
?>

<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
	<h4 class="medium mb-7 text-gray-darker">Ingresa a la red</h4>
	<div class="form-group">
	  <!-- <input name="login_name" id="login-name" type="text" class="form-control login-field" placeholder="Usuario o correo electrónico"> -->
	  <input name="login_name" type="text" class="form-control login-field mb--7" value="" placeholder="Correo electrónico" id="login-name" required/>
	</div>
	<div class="form-group">
<!-- 	  <input name="login_password" type="password" class="form-control login-field" placeholder="Contraseña"> -->
	  <input  name="login_password" type="password" class="form-control login-field mb--7" value="" placeholder="Contraseña" id="login-pass" required />
	</div>
	<div class="form-group row">
	  <div class="col-xs-9">
	    <div>
	    	<?php do_action( 'wordpress_social_login' ); ?>
	    </div>
	    <br>
	    <small>
	    	<a href="<?php echo home_url('/'); ?>registrate/" class="light">Regístrate</a> 
	    	<span>|</span> 
	    	<a href="<?php echo wp_lostpassword_url( '/recuperar-password' ); ?>" class="light"  title="Olvidé mi contraseña">Olvidé mi contraseña</a>
			</small>
	  </div>
	  <div class="col-xs-3">
	    <input type="submit" name="dlf_submit" class="btn btn-primary btn-sm" value="Ingresa" style="margin-left:12px;">
	  </div>
	</div>
</form>
<?php
}
function dlf_auth( $username, $password ) {

	global $user;
	$creds = array();
	$creds['user_login'] = $username;
	$creds['user_password'] =  $password;
	$creds['remember'] = true;
	$user = wp_signon( $creds, false );

	if ( is_wp_error($user) ) {

		echo $user->get_error_message();

	}

	if ( !is_wp_error($user) ) {
		// $actual_link = "$_SERVER[REQUEST_URI]";

		wp_redirect(home_url());

	}
}

function dlf_process() {

	if (isset($_POST['dlf_submit'])) {

	    dlf_auth($_POST['login_name'], $_POST['login_password']);

	}
	 
	dlf_form();

}

function dlf_shortcode() {
	ob_start();
	dlf_process();
	return ob_get_clean();
}
 
add_shortcode('dm_login_form', 'dlf_shortcode');

add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url() );
  exit();
}




