
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
		<section>
		  <div class="container">
		    <div class="row">
		      <div class="col-md-12 mt-7">
		        <?php the_breadcrumb(); ?>
		      </div>
		    </div>			  
		    <div class="dtl-custom-heading">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/registrate.png" alt="" width="80"></div>
		      <div class="clearfix">
		        <div class="col-md-11">
		          <h1 class="medium mt-14 ml--25 mb-0 brand-titular"><?php the_title(); ?></h1>
		        </div>
		      </div>
		    </div>
		  </div>	
		</section>
		<section class="pt-7-100">	  
		  <div class="container">
			  <div class="row">
					<div class="col-md-10 col-md-offset-1">  	  
			      <div class="row mt-21">
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
