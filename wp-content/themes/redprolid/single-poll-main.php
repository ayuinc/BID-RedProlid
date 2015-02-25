<?php
/*
Template Name: Tu opinion cuenta - single
*/
get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>

<section class="bg-panel"> 
  <div class="container">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12 col-xs-12 with-hr pv-0 mv-0">
        <nav class="text-right text-center-xs">
          <a href="<?php echo home_url('/'); ?>tu-opinio-cuenta">Tu opinión cuenta</a>
        </nav>          
      </div>
    </div>      
    <div class="ph-70">
    	<div class="bg-white border-radius p-21">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="ph-70-sm">
            <?php get_template_part( 'content', 'page' ); ?>
          </div>
          <hr>
          <!-- <span class="text-gray">Agosto 1 / 2014</span> -->
        <?php endwhile; // end of the loop. ?>
    	</div>
    </div>
  </div> 
</section>


<?php get_footer(); ?>