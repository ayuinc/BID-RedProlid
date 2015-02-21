<?php
/*
Template Name: A tu estilo - list
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
  </div>
</section>

	<section class="bg-panel pv-21">
		<div class="container">
			<div class="row">
				<!-- Start the Loop. -->
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
        <?php query_posts( 'cat=266&posts_per_page=10&offset=9&paged=' . $paged ); ?>          
				<?php while ( have_posts() ) : the_post(); ?>				            
          <div class="banner col-md-3 banner-label-bottom">
          	<div class="bg-white">
            	<div class="banner-pic" style="background-image: url(<?php the_field('foto_restaurante_estilo'); ?>)"></div>
            	<div class="banner-content flex-none">
            		<small>Restaurantes</small>
	              <h3 class="medium mt-7 mb-0 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
	              <p class="mt-14"><?php the_field('descripcion_estilo');?></p>
	              <small><?php the_field('direccion_lugar_estilo') ?><br><?php the_field('ciudad_pais_estilo');?></small>
	              <div class="text-right banner-label mb-7">
	              	<small><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="vermas medium">Ver más &gt;&gt;</a></small>
	              </div>
            	</div>
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
	</section>

<?php get_footer(); ?>