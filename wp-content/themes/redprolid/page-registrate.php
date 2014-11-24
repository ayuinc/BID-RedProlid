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
		<div class="mh-700">
		  <section id="puntos-de-vista">
		    <div class="container relative with-shadow mb-28">
		      <div class="absolute dtl-custom-heading">
		        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-icon.png" alt=""></div>
		        <div class="clearfix">
		          <div class="col-sm-12">
		            <h1 style="color: #aeab8b;"><?php the_title(); ?></h1>
		          </div>
		        </div>
		        <hr style="border-top: 3px dotted #aeab8b;">
		      </div>
		      <div class="row">
			      <div class="col-sm-6">
				      <h3>Crea tu perfil ahora incluyendo los siguientes datos</h3>
			      	<p><?php the_content(); ?></p>
			      </div>
			      <div class="col-sm-6">
				      <h3>Ingresa Utilizando las redes sociales</h3>
				      <p><?php do_action( 'wordpress_social_login' ); ?></p>
			      </div>			      
			    </div>
		    </div>
		    </div>
		  </section>
		</div>
		<?php endwhile; ?>
	<?php endif; ?> 
<?php get_footer(); ?>