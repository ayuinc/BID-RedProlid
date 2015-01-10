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
	    <div class="col-sm-10 col-md-offset-1">  
      	<small>VIDEO</small>
        <h2 class="lh-lg"><?php the_title(); ?></h2>
        <iframe width="100%" height="350" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
        <p><?php the_field('descripcion_video'); ?></p> 
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