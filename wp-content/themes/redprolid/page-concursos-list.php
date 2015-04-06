<?php
/*
Template Name: Concursos anteriores
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section id="puntos-de-vista-anteriores">
  <div class="container">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-1 col-xs-3">
        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle.png" alt="" width="100%"></div>
      </div>
      <div class="col-sm-6 col-xs-9">
        <h1>Concursos anteriores</h1>
      </div>
      <div class="col-sm-4 col-xs-12">
      </div>
    </div>
    <div class="ph-70">
      <div class="row">
        <div class="col-sm-10 col-md-offset-1">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          <?php query_posts( 'category_name=concursos&posts_per_page=10&paged=' . $paged ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="content mb-7">
              <?php the_field('descripcion_concurso'); ?>
							<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Ve más >></a></p>
            </div>
            <hr>
          <?php endwhile; ?>
          <div class="text-center">
            <ul class="pager">
	            <li><?php next_posts_link( 'Siguientes' ); ?></li>
	            <li><?php previous_posts_link( 'Posteriores' ); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>         
  </div>
</section>
<?php get_footer(); ?>