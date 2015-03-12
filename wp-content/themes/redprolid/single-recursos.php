<section> 
  <div class="container relative">
    <?php the_breadcrumb(); ?>
    <div class="ph-70 pv-21">
      <div class="row pb-14">
  	    <div class="col-sm-12">  
          <h2 class="medium mb-0"><?php the_title(); ?></h2>
          <?php $publicacion = get_field('recurso_descripcion'); ?>
          <p>
			      <strong>Autor: <?php the_field('recurso_autor'); ?></strong>, <?php the_field('recurso_año_de_publicacion'); ?> 
  				</p>
  				<?php $folleto_recurso = get_field('folleto_recurso');?>
  				<?php if ($folleto_recurso!='') { ?>
  				<div class="pv-14">
  					<img src="<?php echo $folleto_recurso; ?>" width="100%">
  					<small><?php the_field('credito_imagen'); ?></small>   
  				</div>    
  				<?php } ?> 
  				<?php $folleto_adicional_recurso = get_field('folleto_adicional_recurso');?>
  				<?php if ($folleto_adicional_recurso!='') { ?>
  				<div class="pv-14">
  					<img src="<?php echo $folleto_adicional_recurso; ?>" width="100%">   
  				</div>    
  				<?php } ?>   				
  				<?php $recurso = get_field('recurso_pdf-word');?>
  				<?php if ($recurso!='') { ?>
  				<p>Usa este <a href="<?php echo $recurso; ?>" target="_blank">link</a> para descargar el recurso.</p>       
  				<?php } ?> 
        </div>
      </div>
  	  <div class="row">
  			<div class="col-sm-12 with-hr">  	  
  		    <p><?php the_field('recurso_descripcion'); ?></p>
					<p>
						<?php $recurso_idioma = get_field('recurso_idioma'); ?>
						<?php if ($recurso_idioma!='') { ?>							
						<span class="medium">Idioma:</span> <?php echo $recurso_idioma; ?><br>
						<?php } ?>
						<?php $recurso_tipo = get_field('recurso_tipo'); ?>
						<?php $tag_tipo_de_recurso_recurso = get_field('tag_tipo_de_recurso_recurso'); ?>
						<?php if ($recurso_tipo!='') { ?>	
						<span class="medium">Tipo de recurso:</span> <?php the_field('recurso_tipo'); ?>
							<?php if ($tag_tipo_de_recurso_recurso!='') { ?>
								<?php echo ', '.$tag_tipo_de_recurso_recurso; ?>
							<?php } ?>						
						<br>
						<?php } ?>
						<?php $recurso_tema = get_field('recurso_tema'); ?>
						<?php $tag_tema_recurso = get_field('tag_tema_recurso'); ?>
						<?php if ($recurso_tema!='') { ?>						
						<span class="medium">Tema:</span> <?php the_field('recurso_tema'); ?>
							<?php if ($tag_tema_recurso!='') { ?>
								<?php echo ', '.$tag_tema_recurso; ?>
							<?php } ?>							
						<br>
						<?php } ?>
						<?php $recurso_organizacion = get_field('recurso_organizacion'); ?>
						<?php if ($recurso_organizacion!='') { ?>
						<span class="medium">Organización:</span> <?php echo $recurso_organizacion; ?>
						<?php } ?>
						<br>
						<?php $recurso_pais = get_field('recurso_pais'); ?>
						<?php if ($recurso_pais!='') { ?>
						<span class="medium">País:</span> <?php the_field('recurso_pais'); ?>
						<?php } ?>						
					</p>   		
					<?php $recurso_link = get_field('recurso_link'); ?>
					<?php if ($recurso_link!='') { ?>    
  		    <p class="text-right"><a href="<?php echo $recurso_link; ?>" class="btn btn-primary" target="_blank">Ve a la publicación</a></p>
  		    <?php } ?>
  		    <div class="text-right">
  		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
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