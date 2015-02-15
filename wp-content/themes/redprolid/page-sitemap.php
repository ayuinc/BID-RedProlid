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
        <div class="col-sm-5 col-xs-12">
          <h1><?php the_title(); ?></h1>
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
          <div class="absolute dtl-custom-heading">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-dtl-icon.png" alt="<?php the_title(); ?>"></div>
            <h1 style="color: #808080;"><?php the_title(); ?></h1>
            <hr style="border-top: 3px dotted #808080;">
          </div>
          <p class="text-right pt-14-100"><?php the_content(); ?></p> 
				<?php endwhile; ?>
			<?php endif; ?>                 
    </div>
  </section>      


<?php get_footer(); ?>
