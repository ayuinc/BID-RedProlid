<?php
/*
Template Name: Terminos
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<section> 
			  <div class="container relative">
			    <?php the_breadcrumb(); ?>
			    <div class="row">
			      <div class="col-md-12">
			      </div>
			    </div>
			    <div class="row">
				    <div class="col-sm-12">  
			        <h2 class="medium"><?php the_title(); ?></h2>
			        <p><?php the_content(); ?></p>		        
			      </div>
			    </div>
			  </div>      
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
