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
        </div>
      </div>
  	  <div class="row">
  			<div class="col-sm-12 with-hr">  	  
  		    <p><?php the_field('recurso_descripcion'); ?></p>
					<p>
						<span class="medium">Idioma:</span> <?php the_field('recurso_idioma'); ?><br>
						<span class="medium">Tipo de Recurso:</span> <?php the_field('recurso_tipo'); ?><br>
						<span class="medium">Tema:</span> <?php the_field('recurso_tema'); ?><br>
						<span class="medium">Organización:</span> <?php the_field('recurso_organizacion'); ?>
					</p>   		    
  		    <p class="text-right"><a href="<?php the_field('recurso_link'); ?>"  class="btn btn-primary">Ir al recurso</a></p>
  		    <div class="text-right">
  		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
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