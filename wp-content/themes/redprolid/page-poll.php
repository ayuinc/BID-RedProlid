<?php
/*
Template Name: Poll page
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
  <section class="minh-630">
    <div class="container">
      <?php the_breadcrumb(); ?>
      <div class="clearfix sub-header bg-panel">
        <div class="col-sm-10 col-xs-12">
          <h1>Encuestas anteriores</h1>
        </div>
        <div class="col-sm-2 col-xs-12">
          <!--<nav class="text-right text-center-xs">
            <a href="<?php echo content_url('/'); ?>tu-opinion-cuenta">Tu opinión cuenta &gt;&gt;</a>
          </nav>-->          
          <img src="http://redprolid.org/wp-content/themes/redprolid/assets/img/speaker-main-icon-cuadrado.png" alt="" width="94">
        </div>
      </div>
      <div>
        <ul class="grid-list grid-list-3 grid-list-1-xs grid-list-2-sm hide-other-polls-anchor">
          <?php query_posts( 'category_name=tu-opinion-cuenta&posts_per_page=10' ); ?>	
					<?php while ( have_posts() ) : the_post(); ?> 
						<?php $codigo_de_la_encuesta = get_field('codigo_de_la_encuesta'); ?> 
            <?php echo do_shortcode('[yop_poll id="'.$codigo_de_la_encuesta.'"]'); ?>
          <?php endwhile; ?>
        </ul>
      </div>
      <div class="text-center">
        <ul class="pager">
          <li><?php next_posts_link( 'Siguientes' ); ?></li>
          <li><?php previous_posts_link( 'Anteriores' ); ?></li>
        </ul>
      </div>  
    </div>
  </section>
<?php get_footer(); ?>    