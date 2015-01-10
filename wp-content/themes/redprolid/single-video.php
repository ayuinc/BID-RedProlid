asdfads
<section class="">
  <div class="container mt-35">
    <div class="row">
	    <div class="col-sm-10 col-md-offset-1">
		    <?php the_breadcrumb(); ?>
	    </div>
    </div>
  </div>		
  <div class="container mt-35 mb-35">
    <div class="row">
	    <?php if( get_field('imagen_noticias') ) { ?>
      <div class="col-sm-3 col-md-offset-1">
        <img src="<?php the_field('imagen_noticias'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-sm-7">
	    <?php } else {?>
	    <div class="col-sm-10 col-md-offset-1">  
      <?php } ?>
      	<small>VIDEO</small>
        <h2 class="lh-lg"><?php the_title(); ?></h2>
        <h4 class="light lh-lg"><?php the_field('descripcion_rapida_noticias'); ?></h4>
      </div>
    </div>
  </div>
  <div class="container text-left pb-70">
	  <div class="row">
			<div class="col-sm-10 col-md-offset-1 with-hr">  	  
		    <p><?php the_field('contenido_noticias'); ?></p>
		    <div class="text-center mt-35 mb-35 ">
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
		    </div>   
			</div>
	  </div>       
  </div>
  <div class="container pb-70">
	  <div class="row">
			<div class="col-sm-10 col-md-offset-1">  
	    	<?php comments_template(); ?>
			</div>
	  </div>
  </div>
</section>