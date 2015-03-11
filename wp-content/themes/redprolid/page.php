<?php

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>


	<section class="pv-70"> 
    <div class="container-sm">
      <div class="clearfix sub-header">
        <div class="col-sm-10 col-smoffset-1 col-xs-12">
		      <?php while ( have_posts() ) : the_post(); ?>
		      	<h1 class="medium"><?php the_title(); ?></h1>
		        <?php get_template_part( 'content', 'page' ); ?>
		      <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
	</section>	


<?php get_footer(); ?>