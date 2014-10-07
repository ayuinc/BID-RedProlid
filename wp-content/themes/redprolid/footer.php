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
              <li><a href="#">Contáctanos</a></li>
              <li><a href="#">Mapa de sitio</a></li>
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
              <li><a href="#"></a></li>
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

    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/vendor/jquery-2.1.1.min.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/bid.js"></script>
    
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
    
    
    <?php wp_footer(); ?>
  </body>
</html>