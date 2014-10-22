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
	<h4>Mi información</h4>
	<div class="form-group">
	  <!-- <input name="login_name" id="login-name" type="text" class="form-control login-field" placeholder="Usuario o correo electrónico"> -->
	  <input name="login_name" type="text" class="form-control login-field" value="" placeholder="Username" id="login-name" />
	</div>
	<div class="form-group">
<!-- 	  <input name="login_password" type="password" class="form-control login-field" placeholder="Contraseña"> -->
	  <input  name="login_password" type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
	</div>
	<div class="form-group row">
	  <div class="col-xs-7">
	    <a href="#" class="" data-toggle="modal" data-target="#myModal">Olvidé mi contraseña</a>
	  </div>
	  <div class="col-xs-5 text-right">
	    <input type="submit" name="dlf_submit" class="btn btn-primary btn-sm" value="Ingresa">
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
		$actual_link = "$_SERVER[REQUEST_URI]";

		wp_redirect(home_url($actual_link));

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







