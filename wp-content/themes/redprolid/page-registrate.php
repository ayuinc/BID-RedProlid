
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

<style>
	.custom_field_upload{
		width: 68% !important;
		font-size: 0.8rem !important;
	}
	.custom_field_checkbox {
		display: table;
	}
	.wppb-send-credentials-checkbox{
		display: none !important;
	}
</style>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<section class="mt-7"> 
	    <div class="container">
	      <?php the_breadcrumb(); ?> 
	      <div class="clearfix sub-header">
	        <div class="col-lg-1 col-xs-12 col-sm-12 text-center-sm pt-35-sm text-center-xs pt-35-xs">
	          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/registrate.png" alt="" width="100%"></div>
	        </div>
	        <div class="col-lg-11 col-xs-12 col-sm-12 text-center-sm text-center-xs">
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
				      <div class="col-md-1 hidden-xs hidden-sm">
				      	<img src="http://redprolid.org/wp-content/themes/redprolid/assets/icons/division-02.png" alt="">
				      </div>
				      <hr class="pv-14-xs hidden-md hidden-lg">
							<div class="col-xs-12 pl-14-xs hidden-md hidden-lg">
				        <div class="user-sign-in-form" id="sign-in-form">
				          <?php 
				            if ( is_user_logged_in() ) {

				              $current_user = wp_get_current_user();
				              echo '<div class="text-right">';
				              echo '<h4 class="light mb-0">Hola '.$current_user->user_firstname.' '.$current_user->user_lastname.'</h4>';
											echo '<a href="'.wp_logout_url().'" title="Logout" class="medium">Cierra tu sesión</a> | <a href="'.home_url("/").'tu-perfil" class="medium">Edita tu perfíl</a>';
				              echo '</div>';
											
											if ( ($current_user instanceof WP_User) ) {
				                  //print_r($current_user);
											    echo '<a href="'.home_url("/").'tu-perfil">'.get_avatar( $current_user->ID).'</a>';
											}              

				            } else {
				              echo do_shortcode('[dm_login_form]'); 
				            }
				          ?>       
				        </div>
							</div>				      
				      <div class="col-md-5 col-xs-12 text-center-xs">
					      <h3 class="medium text-left text-center-xs mt-14 mb-21">O utilizando las redes sociales</h3>
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
