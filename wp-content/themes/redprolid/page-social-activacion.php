<?php
/*
Template Name: Social Activacion
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<style>
	.custom_field_checkbox {
		display: table;
	}
</style>
<section> 
  <div class="container">
    <!-- IF NO POSTS in FOROS -->
    <div class="ph-70-lg ph-14-xs text-center">
    	<div class="container-sm">
	    	<div class="row pv-49">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>		    	
		    		<div class="col-sm-12">
			    		<h3 class="medium text-center mt-35">Hemos recibido tu información</h3>
			    		<p>Por favor llena el siguiente formulario:</p>
			    		<div class="text-left">
			      	<?php //if( function_exists( 'ninja_forms_display_form' ) ) { ?>
								<?php //ninja_forms_display_form( 15 ); ?>
							<?php //} ?>
							<?php the_content(); ?>
			    		</div>
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













