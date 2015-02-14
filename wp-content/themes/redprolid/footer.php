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
        <div class="container text-center-xs">
          <div class="row to-top">
            <a href="#"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/nav-footer-to-top.png" alt=""></a>
          </div>
          <div class="row pt-21">
            <div class="col-md-3">
              <ul class="list-unstyled text-white site-map">
                <li class="mb-7 light"><a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a></li>
                <li class="mb-7 light"><a href="<?php echo home_url('/'); ?>sitemap/">Mapa de sitio</a></li>
              </ul>
            </div>
            <div class="col-md-6 text-center">
              <a href="#"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-footer.png" width="322px" height="auto"></a>
            </div>
            <div class="col-md-3 text-right-sm">
              <a href="http://www.iadb.org/" target="_blank"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_BID-footer.png" width="130px" height="auto"></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <p class="text-muted">Síguenos en las redes:</p>
              <ul class="list-unstyled social-links">
                <li><a href="https://www.facebook.com/redprolid" target="_blank"><i class="flaticon-facebook6"></i></a></li>
                <li><a href="https://twitter.com/RedPROLID" target="_blank"><i class="flaticon-social19"></i></a></li>
                <li><a href="https://plus.google.com/u/0/110729207092973287817/about" target="_blank"><i class="flaticon-google16"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCpntjKraZb6A3qpClZTA5aQ" target="_blank"><i class="flaticon-logo4"></i></a></li>
              </ul>
            </div>
            <div class="col-md-6 text-center pt-42">
              <nav class="text-muted terms">
                <a href="<?php echo content_url('/'); ?>terminos-y-condiciones/" class="text-white pr-7">Términos y condiciones</a>
              </nav>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </footer>
      <section class="copyright">
        <div class="container text-center">
          <p class="text-gray m-0">2015. Todos los derechos reservados</p>
        </div>
      </section>
    </div> <!-- END:Site wrapper -->
    
    <!--LIKE BOX FACEBOOK-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=114769775293802&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>   
    
    <!--TWITTER-->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
    <!--GOOGLE+-->
    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'es'}
    </script>
    
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=hermanmarin" async="async"></script>    
    
		<script>
		$("#wppb-form-element-18").hide();
		$("#wppb-form-element-19").hide();
			
		$("#trabajo").change(function(){
		  var name = $("#trabajo").val();
		  if (name === 'Otro trabajo') { 
				$("#wppb-form-element-18").show();
		  } else {
			  $("#wppb-form-element-18").hide();
		  }
		});
		$("#posicion").change(function(){
		  var name = $("#posicion").val();
		  if (name === 'Otra posición') { 
				$("#wppb-form-element-19").show();
		  } else {
			  $("#wppb-form-element-19").hide();
		  }
		});		
		
		//MOSTRAR Y OCULATAR ENTREVISTA
		$('#entrevista_full').hide();
		$('#boton_ocultar_entrevista_full').hide();
		
		$('#boton_entrevista_full').click(function() {
      $('.content-display').hide()
			$('#boton_ocultar_entrevista_full').show(100);
			$('#entrevista_full').show(100);
			$('#boton_entrevista_full').hide(100);
		})
		
		$('#boton_ocultar_entrevista_full').click(function() {
			$('#boton_entrevista_full').show(100);
			$('#entrevista_full').hide(100);
			$('#boton_ocultar_entrevista_full').hide(100);
		})		
		
    $(document).ready(function(){
      $('.jcarousel').jcarousel();
      $('.left.carousel-control').jcarouselControl({
          target: '-=1'
      });

      $('.right.carousel-control').jcarouselControl({
          target: '+=1'
      });
    });

		$('a[data-href]').each(function() { 
		 $(this).attr('href', $(this).attr('data-href'));
		});

		</script>    
    
    <?php wp_footer(); ?>
  </body>
</html>