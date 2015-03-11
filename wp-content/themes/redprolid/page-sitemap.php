<?php
/*
Template Name: Sitemap
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    
	<section class="mt-7"> 
    <div class="container">
      <?php the_breadcrumb(); ?> 
      <div class="clearfix sub-header">
        <div class="col-sm-1 col-xs-3">
          <!--<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" alt="" width="100%"></div>-->
        </div>
        <div class="col-sm-5 col-xs-9">
          <h1>Mapa del sitio</h1>
        </div>
        <div class="col-sm-6 col-xs-12"></div>
      </div>	
    </div>
	</section>    
  <section id="dtl" class="pt-0">
    <div class="container relative dtl-content">
      <!-- Start the Loop. -->
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
          <p class="text-right pt-14-100"><?php the_content(); ?></p> 
				<?php endwhile; ?>
			<?php endif; ?>                 
    </div>
  </section>      


<?php get_footer(); ?>
