<?php
/*
Template Name: Eventos list
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
          <h1 class="">Eventos anteriores</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>eventos">Eventos >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/eventos-icon-square-alpha.png" width="94px" height="auto" alt="">
      </div>
    </div>  
    <div class="ph-70">
      <div class="row pb-35">
        <div class="col-sm-10 col-md-offset-1">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          <?php query_posts( 'category_name=eventos&posts_per_page=10&paged=' . $paged ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3 class="medium text-primary mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>         
            </div>
            <div class="content mb-14 event-destacados">
              <p>
					      <?php $tempDate = get_field('fecha_inicio_evento'); ?>
					      <strong>Fecha inicio:</strong> <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?><?php $lhora_evento = get_field('hora_evento'); ?><?php if ($hora_evento!='') { ?>, <?php the_field('hora_evento'); ?><?php } ?><br>
					      <?php $tempDateFin = get_field('fecha_fin_evento'); ?>
					      <?php if ($tempDateFin!='') { ?>
					      <strong>Fecha fin:</strong> <?php echo date_i18n('j', strtotime( $tempDateFin)); ?> de <?php echo date_i18n('F', strtotime( $tempDateFin)); ?> de <?php echo date_i18n('Y', strtotime( $tempDateFin)); ?><br>
					      <?php } ?>          
								<?php $tempDate = get_the_date(); ?>	            
              	<?php $lugar_evento = get_field('lugar_evento'); ?>
								<?php if ($lugar_evento!='') { ?>
              	<strong>Lugar:</strong> <?php the_field('lugar_evento'); ?><br>
              	<?php } ?>
              	<?php $organizan_evento = get_field('organizan_evento'); ?>
								<?php if ($organizan_evento!='') { ?>		                	
              	<strong>Organizan:</strong> <?php the_field('organizan_evento'); ?><br>
              	<?php } ?>
              	<?php $convocan = get_field('convocan'); ?>
								<?php if ($convocan!='') { ?>		                	
								<strong>Convocan:</strong> <?php the_field('convocan'); ?>
								<?php } ?>
              </p>
							<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve evento >></a></p>
            </div>
            <hr>
          <?php endwhile; ?>
          <div class="text-center">
            <ul class="pager">
              <li><?php next_posts_link( 'Ve más' ); ?></li>
              <li><?php previous_posts_link( 'Posteriores' ); ?></li>
            </ul>
          </div>          
        </div>
      </div>          
    </div>
  </div>
</section>
<?php get_footer(); ?>