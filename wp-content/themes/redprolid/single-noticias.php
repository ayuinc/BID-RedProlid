<section> 
  <div class="container relative">
    <?php the_breadcrumb(); ?>
    <div class="ph-70 pv-21">
      <div class="row pb-14">
	      <?php $image = get_field('imagen_noticias'); ?>
	      <?php echo $image['alt']; ?>
	      
  	    <?php if( get_field('imagen_noticias') ) { ?>
        <div class="col-sm-4">
          <img src="<?php the_field('imagen_noticias'); ?>" alt="" class="img-responsive">
        </div>
        <div class="col-sm-7">
  	    <?php } else {?>
  	    <div class="col-sm-12">  
        <?php } ?>
          <h2 class="medium mb-0"><?php the_title(); ?></h2>
          <?php $publicacion = get_field('publicacion_noticias'); ?>
          <small>
          	<?php $tempDate = get_the_date(); ?>
            <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?>, <?php if ($publicacion!='') { ?><a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a>
  					<?php } ?>
  				</small>        
          <h4 class="mt-14 light lh-lg"><?php the_field('descripcion_rapida_noticias'); ?></h4>
        </div>
      </div>
  	  <div class="row">
  			<div class="col-sm-12 with-hr">  	  
  		    <p><?php the_field('contenido_noticias'); ?></p>
  		    <p class="text-right"><a href="<?php the_field('link_publicacion_noticias'); ?>"  class="btn btn-primary">Lee la noticia completa</a></p>
  		    <div class="text-right">
  		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
  		    </div>   
  			</div>
  			<div class="col-sm-12 with-hr pv-21">
	  			<div class="container-sm">
					<p>
						<?php $pais_noticias = get_field('pais_noticias'); ?>
						<?php if ($pais_noticias!='') { ?>						
						<span class="medium">País:</span> <?php echo $pais_noticias; ?><br>
						<?php } ?>
						<?php $tipo_recursos_noticias = get_field('tipo_recursos_noticias'); ?>
						<?php if ($tipo_recursos_noticias!='') { ?>						
						<span class="medium">Tipo de recursos:</span> <?php echo $tipo_recursos_noticias; ?><br>
						<?php } ?>
						<?php $tema_noticias = get_field('tema_noticias'); ?>
						<?php if ($tema_noticias!='') { ?>									
						<span class="medium">Temas:</span> <?php echo $tema_noticias; ?>
						<?php } ?>
					</p> 
  				</div>
  			</div>
  	  </div>       
  	  <div class="row">
  			<div class="col-sm-12 pv-21">  
					<?php	if ( is_user_logged_in() ) { ?>
						<?php comments_template();?>
					<?php } else { ?>
						<p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
					<?php }	?>
  			</div>
  	  </div>
    </div>
  </div>      
</section>