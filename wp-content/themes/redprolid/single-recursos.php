<section> 
  <div class="container relative">
    <?php the_breadcrumb(); ?>
    <div class="ph-70">
      <div class="row pb-14">
  	    <div class="col-sm-12">  
          <h2 class="medium mb-0"><?php the_title(); ?></h2>
          <?php $publicacion = get_field('recurso_descripcion'); ?>
          <small>
			      <?php the_field('recurso_autor'); ?>, <?php the_field('recurso_año_de_publicacion'); ?> 
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
						<span class="medium">Tipo de Recursos:</span> <?php the_field('tipo_recursos_noticias'); ?><br>
						<span class="medium">Temas:</span> <?php the_field('tema_noticias'); ?>
					</p> 
  				</div>
  			</div>
  	  </div>       
  	  <div class="row">
  			<div class="col-sm-12 pv-21">  
  	    	<?php comments_template(); ?>
  			</div>
  	  </div>
    </div>
  </div>      
</section>