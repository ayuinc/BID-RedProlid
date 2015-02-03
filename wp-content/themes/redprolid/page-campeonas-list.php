<?php
/*
Template Name: Campeonas list
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
          <h1>Entrevistas anteriores</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>campeonas">Campeonas >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/campeonas-icon-square.png" width="94px" height="auto" alt="">
      </div>
    </div>  
    <div class="ph-70">
      <div class="row">
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
        <?php query_posts( 'category_name=campeonas&posts_per_page=10&paged=' . $paged ); ?>
        <?php while ( have_posts() ) : the_post(); ?>	      
	      <div class="col-md-2">
		      <img src="<?php the_field('imagen_campeonas'); ?>" alt="" class="img-responsive">
	      </div>
        <div class="col-md-10">
          <div class="title">
            <h3 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
            <small><?php the_field('posicion_campeona'); ?> <?php if (get_field('twitter_campeona')!='') { ?>/ <a href="http://twitter.com/<?php the_field('twitter_campeona'); ?>" target="_blank">@<?php the_field('twitter_campeona'); ?></a><?php } ?></small>
          </div>
          <div class="content mt-14 mb-35">
            <p><?php the_field('descripcion_campeona'); ?></p>
						<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Lee la entrevista >></a></p>
          </div>    
        </div>
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
</section>
<?php get_footer(); ?>