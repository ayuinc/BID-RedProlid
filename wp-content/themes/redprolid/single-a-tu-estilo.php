<section> 
  <div class="container mb-14">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12 col-xs-12 with-hr pv-0 mv-0">
        <nav class="text-right text-center-xs txt-center-landscape-ipad">
          <a href="<?php echo home_url('/'); ?>a-tu-estilo">A tu estilo &gt;&gt;</a>
        </nav>          
      </div>
    </div>
    <div class="clearfix ph-70-sm ph-14-xs pb-35">
    	<div class="col-sm-12">
    		<!--<small class="text-gray">Tiendas</small>-->
    		<h1><?php the_title();?></h1>
    		<ul class="list-unstyled pv-21">
	    		<?php $autor_estilo = get_field('autor_estilo');?>
	    		<?php if ($autor_estilo!='') { ?>
	    		<li><strong>Recomendado por:</strong> <a href="mailto:<?php the_field('autor_email_estilo');?>"><?php the_field('autor_estilo');?></a></li>
	    		<?php } ?>
    			<li><strong>Dirección:</strong> <?php the_field('estilo_direccion_lugar') ?></li>
    			<?php $estilo_sitio_web = get_field('estilo_sitio_web'); ?>
    			<?php if ($estilo_sitio_web!='') { ?>
    			<li><strong>Sitio web:</strong> <a href="<?php the_field('estilo_sitio_web'); ?>" target="_blank"><?php the_field('estilo_sitio_web'); ?></a></li>
    			<?php } ?>
    			<?php $estilo_fuente_link = get_field('estilo_fuente_link'); ?>
    			<?php if ($estilo_fuente_link!='') { ?>    			
    			<li><strong>Fuente:</strong> <a href="<?php the_field('estilo_fuente_link'); ?>" target="_blank"><?php the_field('estilo_fuente'); ?></a></li>
    			<?php } ?>
    			<?php $estilo_fuente_link = get_field('quien_recomienda'); ?>
    			<?php if ($estilo_fuente_link!='') { ?>    			
    			<li><strong>Quien recomienda:</strong> <?php the_field('quien_recomienda'); ?></li>
    			<?php } ?>    			
    		</ul>
    	</div>
    	<div class="col-sm-6">
	    	<?php $image_foto_nombre = get_field('estilo_foto_nombre'); ?>
	    	<?php if ($image_foto_nombre!='') { ?>
    			<img src="<?php echo home_url('/'); ?>fotos_restaurantes/<?php the_field('estilo_foto_nombre'); ?>" alt="" class="img-responsive">
    		<?php } else { ?>
    			<?php if ($image_foto_restaurante!='') { ?>
    				<img src="<?php the_field("estilo_foto_restaurante"); ?>" alt="" class="img-responsive">
    			<?php } else { ?>
    				<img src="/wp-content/uploads/2015/02/eventos_redprolid.png" alt="" class="img-responsive">
    			<?php } ?>    		
    		<?php } ?>
    	</div>     	
    	<div class="col-sm-6">
    		<p><?php the_field('estilo_descripcion'); ?></p>
    	</div>   	
    </div>
    <hr>
    <div class="ph-70-sm ph-14-xs">
	    <?php	if ( is_user_logged_in() ) { ?>
				<?php comments_template();?>
			<?php } else { ?>
				<p>Para poder comentar es necesario que <a href="/registrate/">inicies tu sesión o te registres</a> en Red PROLID.</p>
			<?php }	?>
    </div>
	</div>
</section>