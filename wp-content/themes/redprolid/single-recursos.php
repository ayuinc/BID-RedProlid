<section> 
  <div class="container relative">
    <?php the_breadcrumb(); ?>
    <div class="ph-70 pv-21">
      <div class="row pb-14">
  	    <div class="col-sm-12">  
          <h2 class="medium mb-0"><?php the_title(); ?></h2>
          <?php $publicacion = get_field('recurso_descripcion'); ?>
          <p>
			      <strong>Publicado por: <?php the_field('recurso_autor'); ?></strong>, <?php the_field('recurso_año_de_publicacion'); ?> 
  				</p>        
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
						<?php if ($recurso_tipo!='') { ?>	
						<span class="medium">Tipo de recurso:</span> <?php echo $recurso_tipo; ?><br>
						<?php } ?>
						<?php $recurso_tema = get_field('recurso_tema'); ?>
						<?php if ($recurso_tema!='') { ?>						
						<span class="medium">Tema:</span> <?php echo $recurso_tema; ?><br>
						<?php } ?>
						<?php $recurso_organizacion = get_field('recurso_organizacion'); ?>
						<?php if ($recurso_organizacion!='') { ?>
						<span class="medium">Organización:</span> <?php echo $recurso_organizacion; ?>
						<?php } ?>
					</p>   		    
  		    <p class="text-right"><a href="<?php the_field('recurso_link'); ?>"  class="btn btn-primary">Ir al recurso</a></p>
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