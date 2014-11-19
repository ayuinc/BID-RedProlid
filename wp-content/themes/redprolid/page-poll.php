<?php
/*
Template Name: Poll page
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<!--BREADCRUMBS-->
<?php //the_breadcrumb(); ?>
<div class="mh-700">
  <section id="toc-index">
    <div class="container">
      <div class="row with-hr">
        <div class="col-sm-6">
          <h3>Encuestas anteriores</h3>
        </div>
        <div class="col-sm-6 text-right pt-28">
          <a href="#">Tu opinión cuenta >></a>
        </div>
      </div>
      <ul class="grid-list grid-list-3">
      	<?php while ( have_posts() ) : the_post(); ?>
          <li class="not_front hidden">
  			   <?php the_content(); ?>
          </li>
  		  <?php endwhile; ?>
      </ul>
      <div class="text-center">
        <ul class="pager">
          <li><a href="#">Previos</a></li>
          <li><a href="#">Siguiente</a></li>
        </ul>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>    