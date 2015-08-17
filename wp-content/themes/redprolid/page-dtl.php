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
					<div class="col-md-6 col-xs-12 pl-0 pr-0-xs relative">
	          <div class="absolute dtl-custom-heading pb-0-xs ph-14-xs">
	            <div class="pl-0 pt-14-xs pr-0-xs" style="width: 91px;"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-dtl-icon.png" alt="<?php the_title(); ?>"></div>
	            <h1 class="mt-7"><?php the_title(); ?></h1>
	          </div>
	          <img src="<?php the_field('imagen-dtl'); ?>" alt="<?php the_title(); ?>" class="hidden-xs pull-left" width="100%">
					</div>  
					<div class="col-md-6">
            <h4 class="light"><?php the_field('introduccion-dtl'); ?></h4>
					</div>
					<div class="col-md-12 mt-21 pl-0 ph-14-xs">
						<h4 class="light"><?php the_field('contenido-dtl'); ?></h4>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>                 
      </div>
    </section>      
    <section class="dtl-home pv-14 mv-42-xs">
      <div class="container ph-70-sm">
	      <div class="pb-14">
        <!-- DTL CAROUSEL -->
        <?php get_template_part( 'include', 'dtl-carousel' ); ?>
	      </div>
      </div>
    </section>

<?php get_footer(); ?>
