<?php
/*
Template Name: Social Activacion
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
	    	<div class="row pv-49">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>		    	
		    		<div class="col-sm-8 col-sm-offset-2">
			    		<h3 class="medium text-center mt-35">Tu hemos registrado exitosamente.</h3>
			    		<p>Pronto recibirás un nuevo correo con la confirmación de todos tus datos para poder acceder a Red PROLID.</p>
			    		<?php the_content(); ?>
		    		</div>
						<?php endwhile; ?>
					<?php endif; ?> 		    		
	    	</div>	    	
    	</div>
    </div>
    <!-- END:IF NO POSTS in FOROS -->
  </div>
</section>
<?php get_footer(); ?> 













