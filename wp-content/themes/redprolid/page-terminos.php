<?php
/*
Template Name: Terminos
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    
<div class="mh-700">    
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<section class="pv-7"> 
			  <div class="container relative">
			    <div class="row">
			      <div class="col-md-12">
			        <?php the_breadcrumb(); ?>
			      </div>
			    </div>
			  </div>      
			</section>
			
			<section class="mb-14">	
			  <div class="container">
			    <div class="row">
				    <div class="col-sm-12">  
			        <h2 class="medium"><?php the_title(); ?></h2>
			        <p><?php the_field('contenido_noticias'); ?></p>		        
			      </div>
			    </div>
			  </div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
<div>	 
<?php get_footer(); ?>
