<?php
/*
Template Name: Puntos de vista
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<?php query_posts( 'category_name=puntos-de-vista&posts_per_page=1' ); ?>	
<?php while ( have_posts() ) : the_post(); ?> 
	<?php $location =  get_permalink( get_the_ID() ); ?>
	<?php wp_redirect( $location, $status ); ?>
	<?php exit; ?>
<?php endwhile; ?>

<?php get_footer(); ?>