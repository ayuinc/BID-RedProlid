<section>
  <div class="container mt-35">
    <div class="row">
	    <div class="col-sm-10 col-md-offset-1">
		    <?php the_breadcrumb(); ?>
	    </div>
    </div>
  </div>		
  <div class="container mt-35 mb-35">
    <div class="row">
	    <div class="col-sm-10 col-md-offset-1">  
        <h2 class="medium"><?php the_title(); ?></h2>
        <iframe width="100%" height="350" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
        <p class="mt-14"><?php the_field('descripcion_video'); ?></p> 
				<?php $tempDate = get_the_date(); ?>
				<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>        
		    <div class="text-center mt-7 mb-7 ">
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
		    </div>   
			</div>
	  </div>       
  </div>
  <div class="container">
	  <div class="row">
			<div class="col-sm-10 col-md-offset-1">  
	    	<?php comments_template(); ?>
			</div>
	  </div>
  </div>
</section>