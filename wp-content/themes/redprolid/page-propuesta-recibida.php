<?php
/*
Template Name: Propuesta recibida
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section> 
  <div class="container">
    <!-- IF NO POSTS in FOROS -->
    <div class="ph-70 text-center">
    	<div class="container-sm">
	    	<div class="row pv-70">
	    		<div class="col-sm-8 col-sm-offset-2">
		    		<h3 class="medium text-center mt-35">¡Hemos recibido tu propuesta!</h3>
		    		<p class="text-center">Gracias por compartir tus ideas con la comunidad de Red PROLID<br><a href="javascript:history.back();">Regresa</a></p>
	    		</div>
	    	</div>	    	
    	</div>
    </div>
    <!-- END:IF NO POSTS in FOROS -->
  </div>
</section>
<?php get_footer(); ?> 













