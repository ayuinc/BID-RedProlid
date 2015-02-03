<?php
/*
Template Name: Debates list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section id="puntos-de-vista-anteriores">
  <div class="container">
  	<div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1 style="color: #aeab8b;" class="">Debates anteriores</h1>
        </div>
      </div>
    </div>  
		<div class="ph-70">
      <div class="row">
      	<div class="col-sm-10 col-md-offset-1">
          <?php query_posts( 'category_name=dtl-debates' ); ?> 
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <p>FUENTE: <?php the_field('fuente-debates'); ?></p>
              <span>Blog: <?php the_field('blog-debates'); ?></span>
            </div>
            <div class="content mb-70">
              <?php the_field('contenido-debates'); ?>
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
  </div>
</section>
<?php get_footer(); ?>