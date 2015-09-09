<?php
/*
Template Name: Webinar principal Page
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<?php query_posts( 'category_name=webinario&posts_per_page=1' ); ?>	
<?php while ( have_posts() ) : the_post(); ?> 
	<?php //$location =  get_permalink( get_the_ID() ); ?>
	<?php //wp_redirect( $location, $status ); ?>
	<?php //exit; ?>
	<?php get_template_part( 'single-webinario' ); ?>
<?php endwhile; ?>

<?php get_footer(); ?>