<?php
/*
Template Name: Recursos list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section id="puntos-de-vista-anteriores">
  <div class="container">
    <?php the_breadcrumb(); ?>
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Todos los Recursos</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>enterate">Enterate >></a>
          </nav>
        </div>
      </div>
      <!--<div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" width="94px" height="auto" alt="">
      </div>-->
    </div>	      
    <div class="ph-70">
      <div class="row">
        <div class="col-sm-12">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          <?php query_posts( 'category_name=recursos&posts_per_page=10&paged=' . $paged ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <small class="date">
              	<?php the_field('recurso_autor'); ?>, <?php the_field('recurso_año_de_publicacion'); ?>
              </small>                
            </div>
            <div class="content mb-7">
              <?php the_field('recurso_descripcion'); ?>
							<p><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="text-primary">Lee más >></a></p>
            </div>
            <hr>
          <?php endwhile; ?>
          <div class="text-center">
            <ul class="pager">
              <li><?php next_posts_link( 'Anteriores' ); ?></li>
              <li><?php previous_posts_link( 'Posteriores' ); ?></li>
            </ul>
          </div>          
        </div>
      </div>          
    </div>
  </div>
</section>
<section>  
  <div class="container p-21">
  </div>
</section>
<?php get_footer(); ?>