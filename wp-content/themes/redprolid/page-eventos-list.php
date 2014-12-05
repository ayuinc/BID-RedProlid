<?php
/*
Template Name: Eventos list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<div class="mh-700">
  <section id="puntos-de-vista-anteriores">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-offset-1 mt-35 mb-35">
          <h1>Eventos Anteriores</h1>
        </div>
      </div>
    </div>
    <div class="container grid-block-lg">
      <div class="row">
        <div class="col-sm-10 col-md-offset-1">
          <?php query_posts( 'category_name=eventos' ); ?> 
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="content mb-70">
              <?php the_field('descripcion_evento'); ?>
            </div>
          <?php endwhile; ?>
          <div class="text-center">
            <ul class="pager">
              <li><a href="#">Previos</a></li>
              <li><a href="#">Siguiente</a></li>
            </ul>
          </div>
        </div>
      </div>          
    </div>
  </section>
</div>
<?php get_footer(); ?>