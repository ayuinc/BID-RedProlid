<?php
/*
Template Name: Posts List
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
  <?php query_posts( 'category_name=puntos-de-vista' ); ?> 
  <?php while ( have_posts() ) : the_post(); ?>                      
  <div class="panel-body">               
    <div class="col-sm-5">
      <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
    </div>
    <div class="col-sm-7">
      <h4><?php the_title(); ?></h4>
      <p class="light lh-lg"><?php the_field('descripcion_punto_de_vista'); ?></p>
      <div class="text-right"><a href="#" class="btn btn-primary">Lee más</a></div>
    </div>
  </div>
  <?php endwhile; ?>
<?php get_footer(); ?>