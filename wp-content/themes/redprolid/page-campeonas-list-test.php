<?php
// die('entro plantilla');
/*
Template Name: Campeonas list test
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<?php the_breadcrumb(); ?>
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Entrevistas anteriores</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>campeonas">Campeon@s >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/campeonas-icon-square-alpha.png" width="94px" height="auto" alt="">
      </div>
    </div> 
<?php get_footer(); ?>