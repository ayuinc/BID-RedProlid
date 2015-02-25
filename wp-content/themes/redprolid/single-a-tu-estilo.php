<section> 
  <div class="container mb-14">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12 col-xs-12 with-hr pv-0 mv-0">
        <nav class="text-right text-center-xs">
          <a href="<?php echo home_url('/'); ?>a-tu-estilo">A tu estilo &gt;&gt;</a>
        </nav>          
      </div>
    </div>
    <div class="clearfix ph-70">
    	<div class="col-sm-12">
    		<small class="text-gray">Tiendas</small>
    		<h1><?php the_title();?></h1>
    		<ul class="list-unstyled pv-21">
    			<li><?php the_field('estilo_direccion_lugar') ?></li>
    			<li><?php the_field('ciudad_pais_estilo');?></li>
    			<li>Sitio web: <a href="<?php the_field('estilo_sitio_web'); ?>"><?php the_field('estilo_sitio_web'); ?></a></li>
    			<li class="text-primary">Fuente: <?php the_field('estilo_fuente'); ?></li>
    		</ul>
    	</div>
    	<div class="col-sm-6">
	    	<?php $image_foto_nombre = get_field('estilo_foto_nombre'); ?>
	    	<?php if ($image_foto_nombre!='') { ?>
    			<img src="<?php echo home_url('/'); ?>fotos_restaurantes/<?php the_field('estilo_foto_nombre'); ?>" alt="" class="img-responsive">
    		<?php } else { ?>
    			<img src="<?php the_field('estilo_foto_restaurante'); ?>" alt="" class="img-responsive">
    		<?php } ?>
    	</div>     	
    	<div class="col-sm-6">
    		<p><?php the_field('estilo_descripcion_larga'); ?></p>
    	</div>   	
    </div>
    <hr>
    <div class="ph-70">
	    <?php	if ( is_user_logged_in() ) { ?>
				<?php comments_template();?>
			<?php } else { ?>
				<p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
			<?php }	?>
    </div>
	</div>
</section>