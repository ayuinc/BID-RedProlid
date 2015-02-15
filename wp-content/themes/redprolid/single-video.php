<section>
  <div class="container mt-7">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12">
        <nav class="mt-21">
          <a href="<?php echo home_url('/'); ?>video/videos-anteriores">Video Anteriores >></a>
        </nav>
      </div>
    </div>
    <div class="ph-70">
	    <h2 class="medium mb-0"><?php the_title(); ?></h2>
			<?php $tempDate = get_the_date(); ?>
			<p>
				Publicado el <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?> 
        <?php $pais_video = get_field('pais_video'); ?>
				<?php if ($pais_video!='') { ?>
				, <strong><?php echo $pais_video; ?></strong>
				<?php } ?>
			</p> 	    
	    <iframe width="100%" height="420" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>     
	    <p class="mt-14"><?php the_field('descripcion_video'); ?></p>			   
	    <div class="text-center mt-7 mb-7 ">
	      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
	    </div>   
		  <?php comments_template(); ?>
    </div>
  </div>
</section>