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

      <footer class="footer">
        <div class="container text-center-xs">
          <div class="row to-top hidden-xs">
            <a href="#"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/nav-footer-to-top.png" alt=""></a>
          </div>
          <div class="row pt-21">
            <div class="col-lg-3 col-md-12 text-center-md col-sm-12 text-center-sm">
              <ul class="list-unstyled text-white site-map">
                <li class="mb-7 light"><a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a></li>
                <li class="mb-7 light"><a href="<?php echo home_url('/'); ?>sitemap/">Mapa de sitio</a></li>
              </ul>
            </div>
            <div class="col-md-3 hidden-lg"></div>
            <div class="col-lg-6 col-md-6 text-center-md col-sm-12 text-center-sm text-center">
              <a href="#"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-footer.png" width="322px" height="auto" class="img-responsive"></a>
            </div>
            <div class="col-lg-3 pr-70-md col-md-3 text-left-md col-sm-12 text-center-sm text-right-lg">
              <a href="http://www.iadb.org/" target="_blank"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/BID_logo_blanco.png" width="160px" height="auto"></a>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-12 text-center-md col-sm-12 text-center-sm">
              <p class="text-muted">Síguenos en las redes:</p>
              <div class="col-xs-3 hidden-md col-sm-4 mr-49-sm hidden-lg"></div>
								<div class="mr-21-sm pl-0-sm social-links-content col-lg-8 col-xs-8 col-sm-3 text-center-sm">
		              <nav class="text-center-sm text-center-xs social-links">
		                <a class="text-center-xs text-center-sm" href="https://www.facebook.com/redprolid" target="_blank"><i class="flaticon-facebook6"></i></a>
		                <a class="text-center-xs text-center-sm" href="https://twitter.com/RedPROLID" target="_blank"><i class="flaticon-social19"></i></a>
		                <a class="text-center-xs text-center-sm" href="https://plus.google.com/u/0/110729207092973287817/about" target="_blank"><i class="flaticon-google16"></i></a>
		                <a class="text-center-xs text-center-sm" href="https://www.youtube.com/channel/UCpntjKraZb6A3qpClZTA5aQ" target="_blank"><i class="flaticon-logo4"></i></a>	                
		              </nav>			  	
								</div>						  		  
            </div>
            <div class="col-lg-12 col-sm-12 pt-7-md text-center-sm pt-7-lg">
              <nav class="text-muted terms">
                <a href="<?php echo content_url('/'); ?>terminos-y-condiciones/" class="text-white pr-7-lg">Términos y condiciones</a>
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
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54e102b5429d3567" async="async"></script>  
    
		<script>
		var trabajo = $("#wppb-form-element-18");
		var posicion = $("#wppb-form-element-19");

		$("#wppb-form-element-18").remove();
		$("#wppb-form-element-19").remove();
			
		$("#trabajo").change(function(){
		  var name = $("#trabajo").val();
		  if (name === 'Otro trabajo') { 
		  	$("#wppb-form-element-16").after(trabajo);
				// $("#wppb-form-element-18").show();
		  } else {
			  $("#wppb-form-element-18").remove();
		  }
		});
		$("#posicion").change(function(){
		  var name = $("#posicion").val();
		  if (name === 'Otra posición') {
		  	$("#wppb-form-element-17").after(posicion); 
				// $("#wppb-form-element-19").show();
		  } else {
			  $("#wppb-form-element-19").remove();
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
		
		//MOSTRAR Y OCULATAR NOTICIAS
		$('#noticia_muestra').hide();
		$('#trigger_noticia').click(function() {
			$('#noticia_muestra').show(100);
		})
		
		//MOSTRAR Y OCULATAR EVENTO
		$('#evento_muestra').hide();
		$('#trigger_evento').click(function() {
			$('#evento_muestra').show(100);
		})
    
		$('.icon[data-href]').each(function() { 
		 $(this).attr('href', $(this).attr('data-href'));
		});    
		
		$('.wppb-max-upload').hide();		
		</script>    
    
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-60027744-1', 'auto');
		  ga('send', 'pageview');
		
		</script>    
    
    <?php wp_footer(); ?>
    
    
  </body>
</html>