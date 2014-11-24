<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage redprolid
 * @since Version 1.0
 */
?>

    <footer>
      <div class="container">
        <div class="row to-top">
          <a href="#"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/to-top.png" alt=""></a>
        </div>
        <div class="row">
          <div class="col-md-3">
            <ul class="list-unstyled text-muted">
              <li><a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a></li>
              <li><a href="<?php echo home_url('/'); ?>sitemap/">Mapa de sitio</a></li>
            </ul>
          </div>
          <div class="col-md-6 text-center">
            <a href="#"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-footer.png" width="322px" height="auto"></a>
          </div>
          <div class="col-md-3 text-center">
            <a href="#"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_BID-footer.png" width="145px" height="auto"></a>
          </div>
        </div>
        <div class="row mt-21">
          <div class="col-md-3">
            <p class="text-muted">Síguenos en las redes:</p>
            <ul class="list-unstyled social-links">
              <li><a href="https://www.facebook.com/redprolid" target="_blank"><i class="flaticon-facebook6"></i></a></li>
              <li><a href="https://twitter.com/RedPROLID" target="_blank"><i class="flaticon-social19"></i></a></li>
              <li><a href="https://plus.google.com/u/0/110729207092973287817/about" target="_blank"><i class="flaticon-google16"></i></a></li>
              <li><a href="#"><i class="flaticon-logo4"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6 text-center">
            <nav class="text-muted">
              <a href="#">Políticas de privacidad </a>
              <a href="#"> Políticas de cookies </a>
              <a href="#"> Políticas de uso</a>
            </nav>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </footer>
    <section class="copyright bg-gray-dark">
      <div class="container text-center">
        <p class="text-muted m-0">2014. Todos los derechos reservados</p>
      </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Recupera tu contraseña</h4>
          </div>
          
          <!--html code-->
          <form method="post">
            <div class="modal-body">
              <?php  
  
                global $wpdb;
                
                $error = '';
                $success = '';
                
                // check if we're in reset form
                if( isset( $_POST['action'] ) && 'reset' == $_POST['action'] ) 
                {
                  $email = trim($_POST['user_login']);
                  
                  if( empty( $email ) ) {
                    $error = 'Ingresa nombre de usuario o email...';
                  } else if( ! is_email( $email )) {
                    $error = 'Nombre de usuario o email invalido.';
                  } else if( ! email_exists( $email ) ) {
                    $error = 'No hay un usuario registrado con ese email.';
                  } else {
                    
                    $random_password = wp_generate_password( 12, false );
                    $user = get_user_by( 'email', $email );
                    
                    $update_user = wp_update_user( array (
                        'ID' => $user->ID, 
                        'user_pass' => $random_password
                      )
                    );
                    
                    // if  update user return true then lets send user an email containing the new password
                    if( $update_user ) {
                      $to = $email;
                      $subject = 'Your new password';
                      $sender = get_option('name');
                      
                      $message = 'Your new password is: '.$random_password;
                      
                      $headers[] = 'MIME-Version: 1.0' . "\r\n";
                      $headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                      $headers[] = "X-Mailer: PHP \r\n";
                      $headers[] = 'From: '.$sender.' < '.$email.'>' . "\r\n";
                      
                      $mail = wp_mail( $to, $subject, $message, $headers );
                      if( $mail )
                        $success = 'Revisa tu nuevo password en tu bandeja de correo.';
                        
                    } else {
                      $error = 'Oops algo salió mal actualizando tu cuenta.';
                    }
                    
                  }
                  
                  if( ! empty( $error ) )
                    echo '<div class="message"><p class="error"><strong>ERROR:</strong> '. $error .'</p></div>';
                  
                  if( ! empty( $success ) )
                    echo '<div class="error_login"><p class="success">'. $success .'</p></div>';
                }
              ?>
              <p>Envíaremos tu contraseña al correo electrónico que escribas a continuación, este debe ser el mismo que incluiste al registrarte en Red PROLID.</p>
              <div class="form-group">
                <label for="user_login">Correo Electrónico:</label>
                <?php $user_login = isset( $_POST['user_login'] ) ? $_POST['user_login'] : ''; ?>
                <input class="form-control" type="text" name="user_login" id="user_login" value="<?php echo $user_login; ?>" />
              </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="action" value="reset" />
              <input type="submit" value="Enviar" class="button btn btn-primary" id="submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="mailChimp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <?php mailchimpSF_signup_form(); ?>
        </div>
      </div>
    </div>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/vendor/jquery-2.1.1.min.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/bid.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/b3/transition.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/b3/modal.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/src/custom.js"></script>
    
    <!--LIKE BOX FACEBOOK-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=114769775293802&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>   
    
    <!--TWITTER-->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
    <!--GOOGLE+-->
    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'es'}
    </script>
    
    <?php wp_footer(); ?>
  </body>
</html>