
<?php
/*
Template Name: Registrate
*/

get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<?php //query_posts( 'category_name=puntos-de-vista' ); ?> 


	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<section class="mt-7"> 
	    <div class="container">
	      <?php the_breadcrumb(); ?> 
	      <div class="clearfix sub-header">
	        <div class="col-sm-1 col-xs-3">
	          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/registrate.png" alt="" width="100%"></div>
	        </div>
	        <div class="col-sm-11 col-xs-9">
	          <h1><?php the_title(); ?></h1>
	        </div>
	      </div>
			  <div class="row pb-70">
					<div class="col-md-10 col-md-offset-1">  	  
			      <div class="row">
				      <div class="col-md-6 formulario-perfil">
					      <h3 class="medium text-left mt-35 mb-21">Crea tu perfil incluyendo los siguientes datos</h3>
					      <small>campo requerido*</small>
				      	<?php the_content(); ?>
				      </div>
				      <div class="col-md-1">
				      	<img src="http://redprolid.org/wp-content/themes/redprolid/assets/icons/division-02.png" alt="">
				      </div>
				      <div class="col-md-5">
					      <h3 class="medium text-left mt-35 mb-21">Ingresa utilizando las redes sociales</h3>
					      <p><?php do_action( 'wordpress_social_login' ); ?></p>
				      </div>			      
				    </div>
					</div>
			  </div>       
	    </div>
		</section>		

		<?php endwhile; ?>
	<?php endif; ?> 
<?php get_footer(); ?>
