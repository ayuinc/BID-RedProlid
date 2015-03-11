<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>

<!-- <div class="container grid-block-lg">

  <?php //query_posts( 'category_name=puntos-de-vista' ); ?> 
  <?php //while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10 with-hr">
      <h3><?php //the_field('nombre_completo'); ?> <small>(Bolivia)</small></h3>
      <p><?php //the_field('profesion'); ?> / <a href="#"><?php //the_field('cuenta_de_twitter'); ?></a></p>
      <p class="lh-lg text-justify"><?php the_title(); ?></p>
      <p class="lh-lg text-justify"><?php //the_field('contenido_punto_de_vista'); ?></p>
      <p class="text-gray">Diciembre 2013</p>
      <div class="text-right">
        <a href="#">Lee el artículo >></a>
      </div>
    </div>
    <div class="col-sm-1"></div>
  </div>
  <?php //endwhile; ?>

  <div class="text-center">
    <ul class="pager">
      <li><a href="#">Previos</a></li>
      <li><a href="#">Siguiente</a></li>
    </ul>
  </div>
</div> -->

<div class="container-sm">
	<h1 class="medium ml-14"><?php the_title(); ?></h1>
	<?php the_content(); ?>
</div>
<div class="container-sm">
	<?php get_post_meta(); ?>
</div>	