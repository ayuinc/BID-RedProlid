<?php

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>


	<section class="pv-70"> 
    <div class="container">
      <div class="clearfix sub-header">
        <div class="col-sm-12 col-xs-12">
		      <?php while ( have_posts() ) : the_post(); ?>
		        <?php get_template_part( 'content', 'page' ); ?>
		      <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
	</section>	


<?php get_footer(); ?>