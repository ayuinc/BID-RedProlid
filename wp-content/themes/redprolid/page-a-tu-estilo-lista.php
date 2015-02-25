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
          <h1 class="">Resultados de búsqueda</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>a-tu-estilo">A tu estilo >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <!--<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/eventos-icon-square-alpha.png" width="94px" height="auto" alt="">-->
      </div>
    </div>  
  </div>
</section>

	<section>
		<div class="container">
			<div class="row">
				<?php $lugar = $_POST['lugar']; ?>
				<?php $tipo_lugar = $_POST['tipo_lugar']; ?>
				<?php $resultado = 0; ?>
				<!-- Start the Loop. -->
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
        <?php query_posts( 'category_name='.$lugar.','.$tipo_lugar.'&posts_per_page=10&paged=' . $paged ); ?>          
				<?php while ( have_posts() ) : the_post(); ?>				            
          <div class="banner col-md-3 banner-label-bottom">
          	<div class="bg-white">
            	<div class="banner-pic" style="background-image: url(<?php the_field('estilo_foto_restaurante'); ?>)"></div>
            	<div class="banner-content flex-none">
            		<small>Restaurantes</small>
	              <h3 class="medium mt-7 mb-0 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
	              <p class="mt-14"><?php the_field('estilo_descripcion');?></p>
	              <small><?php the_field('estilo_direccion_lugar') ?></small>
	              <div class="text-right banner-label mb-7">
	              	<small><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="vermas medium">Ver más &gt;&gt;</a></small>
	              </div>
            	</div>
          	</div>
          </div>
          <?php $resultados++; ?>
        <?php endwhile; ?>
        <?php if ($resultados==0) { ?>
        	<h3 class="medium text-center">No hay resultados disponibles para tu busqueda. <a href="<?php echo content_url('/'); ?>a-tu-estilo">Regresar</a></h3>
        <?php } ?>
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