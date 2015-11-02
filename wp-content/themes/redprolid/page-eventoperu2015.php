<?php
/*
Template Name: EventoPeru2015
*/

get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<?php wp_redirect( "http://redprolid.org/evento-peru-2015/", $status ); ?>

<?php get_footer(); ?>