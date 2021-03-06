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
          <h1 class="">Resultados de la búsqueda</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>a-tu-estilo">A tu estilo >></a>
          </nav>
        </div>
      </div>
      <!--<div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/eventos-icon-square-alpha.png" width="94px" height="auto" alt="">
      </div>-->
    </div>  
  </div>
</section>

	<section class="pb-35">
		<div class="container">
      <ul class="grid-list grid-list-3 grid-list-2-sm grid-list-1-xs isotope-grid">
				<?php $lugar = $_POST['lugar']; ?>
				<?php $tipo_lugar = $_POST['tipo_lugar']; ?>
				<?php $resultado = 0; ?>
				<!-- Start the Loop. -->
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
        <?php query_posts( 'category_name='.$lugar.'&posts_per_page=50&paged=' . $paged ); ?>          
				<?php while ( have_posts() ) : the_post(); ?>				            
				<?php if ( in_category( $tipo_lugar )) { ?>
	       <li class="grid-list-item">
	         <div class="banner bg-white">
	           <div class="banner-pic">
	          	<?php $image_foto_nombre = get_field('estilo_foto_nombre'); ?>
				    	<?php if ($image_foto_nombre!='') { ?>
			    			<div class="banner-pic" style="background-image: url(<?php echo home_url('/'); ?>fotos_restaurantes/<?php the_field('estilo_foto_nombre'); ?>)"></div>
			    		<?php } else { ?>
			    			<?php if ($image_foto_restaurante!='') { ?>
			    				<div class="banner-pic" style="background-image: url(<?php the_field("estilo_foto_restaurante"); ?>)"></div>
			    			<?php } else { ?>
			    				<div class="banner-pic" style="background-image: url(/wp-content/uploads/2015/02/eventos_redprolid.png)"></div>
			    			<?php } ?>
			    		<?php } ?>	
	           </div>
	           <div class="banner-content flex-none">
	            	<?php if ($tipo_lugar=='restaurantes') { ?>
	            	<small>Restaurante</small>	 
	            	<?php } ?>
	            	<?php if ($tipo_lugar=='tiendas') { ?>
	            	<small>Tienda</small>	 
	            	<?php } ?>	            	
	              <h3 class="medium mt-7 mb-0 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
	              <?php $estilo_descripcion = get_field('estilo_descripcion');?>
	              <?php $estilo_descripcion = substr($estilo_descripcion, 0, 150); ?>
	              <p class="mt-14"><?php echo $estilo_descripcion;?></p>
	              <small><?php the_field('estilo_direccion_lugar') ?></small>
	              <!--<div class="text-right">
	              	<small><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="vermas medium">Ve más &gt;&gt;</a></small>
	              </div>-->
	           </div>
	         </div>
	       </li>
       	<?php $resultados++; ?>
				<?php } ?>
        <?php endwhile; ?>
      </ul>		
      
      <div>	
      <?php if ($resultados==0) { ?>
      	<h3 class="medium text-center">No hay resultados disponibles para tu búsqueda. <a href="<?php echo content_url('/'); ?>a-tu-estilo">Regresa</a></h3>
      <?php } ?>			
      </div>

		</div>
	</section>

<?php get_footer(); ?>