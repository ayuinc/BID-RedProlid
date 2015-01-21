<?php
/*
Template Name: Concursos list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
  <div class="mh-700">
    <section id="puntos-de-vista-anteriores">
      <div class="container">
        <div class="clearfix sub-header">
          <div class="col-md-1">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle.png" alt="" width="100%"></div>
          </div>
          <div class="col-md-7">
            <h1>Concursos anteriores</h1>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
      <div class="container grid-block-lg">
        <div class="row">
          <div class="col-sm-10 col-md-offset-1">
            <?php query_posts( 'category_name=concursos' ); ?> 
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="title">
                <h3><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              </div>
              <div class="content mb-70">
                <?php the_field('descripcion_concurso'); ?>
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