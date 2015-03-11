<?php

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>


	<section class="pv-70"> 
    <div class="container-sm">

		      <?php while ( have_posts() ) : the_post(); ?>
		      	<h1 class="medium ml-14"><?php the_title(); ?></h1>
		        <?php get_template_part( 'content', 'page' ); ?>
		      <?php endwhile; // end of the loop. ?>

    </div>
	</section>	


<?php get_footer(); ?>