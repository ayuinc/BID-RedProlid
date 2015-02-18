<?php
/*
Template Name: Email Activacion
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section> 
  <div class="container">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">

    </div> 
    <!-- IF NO POSTS in FOROS -->
    <div class="ph-70 text-center">
    	<h3>Tu email fue activado exitosamente.</h3>
    	<div class="container-sm">
	    	<div class="row">
	    		<div class="col-sm-6 col-sm-offset-3">
						<div class="user-sign-in-form pv-21">
			  			<h2 class="medium">Ingresa con tus claves de accso</h2>
			        <?php echo do_shortcode('[dm_login_form]'); ?>
			      </div>		    		
		    	</div>
	    	</div>
    	</div>
    </div>
    <!-- END:IF NO POSTS in FOROS -->
  </div>
</section>
<?php get_footer(); ?> 













