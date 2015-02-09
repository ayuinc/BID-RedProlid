<?php
/*
Template Name: DTL
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <section id="dtl">
      <div class="container dtl-content">
        <?php the_breadcrumb(); ?> 
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-6 pl-0 relative">
	          <div class="absolute dtl-custom-heading">
	            <div class="pl-0" style="width: 91px;"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-dtl-icon.png" alt="<?php the_title(); ?>"></div>
	            <h1 class="mt-7"><?php the_title(); ?></h1>
	          </div>
	          <img src="<?php the_field('imagen-dtl'); ?>" alt="<?php the_title(); ?>" class="pull-left" width="100%">
					</div>  
					<div class="col-md-6">
            <h4 class="light"><?php the_field('introduccion-dtl'); ?></h4>
					</div>
					<div class="col-md-12 mt-21 pl-0">
						<h4 class="light"><?php the_field('contenido-dtl'); ?></h4>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>                 
      </div>
    </section>      
    <section>
      <div class="container">
        <!-- DTL CAROUSEL -->
        <?php get_template_part( 'include', 'dtl-carousel' ); ?>
      </div>
    </section>

<?php get_footer(); ?>
