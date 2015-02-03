<section> 
  <div class="container relative">
    <?php the_breadcrumb(); ?>
    <div class="ph-70">
      <div class="row">
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
  		    <div class="text-center">
  		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
  		    </div>   
  			</div>
  	  </div>       
  	  <div class="row">
  			<div class="col-sm-12">  
  	    	<?php comments_template(); ?>
  			</div>
  	  </div>
    </div>
  </div>      
</section>