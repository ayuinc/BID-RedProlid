<?php
/*
Template Name: Boletin list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<div>
  <section id="puntos-de-vista-anteriores">
    <div class="container">
      <?php the_breadcrumb(); ?>
      <div class="clearfix bg-panel sub-header">
        <div class="col-sm-7">
          <div>
            <h1>Boletines anteriores</h1>
            <nav class="mt-21">
              <a href="<?php echo content_url('/'); ?>boletin">Boletin >></a>
            </nav>
          </div>
        </div>
        <div class="sub-header-icon boletines-icon" data-href="#">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_suscribete.png" width="94px" height="auto" alt="">
        </div>
      </div>        
      <div class="ph-70">
        <div class="row">
          <div class="col-sm-10 col-md-offset-1">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
            <?php query_posts( 'category_name=boletin&posts_per_page=10&paged=' . $paged ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="title">
                <h3 class="medium text-primary mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
                <!--<h5 class="medium"><span>Fecha:</span> <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></h5>-->
              </div>
              <div class="content mb-14 event-destacados">
  							<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve el boletín >></a></p>
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
</div>
<?php get_footer(); ?>