<section>
  <div class="container mt-7">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12">
        <nav class="mt-21">
          <a href="<?php echo home_url('/'); ?>video/videos-anteriores">Video anteriores >></a>
        </nav>
      </div>
    </div>
    <div class="ph-70">
	    <h2 class="medium mb-0"><?php the_title(); ?></h2>
			<?php $tempDate = get_field('fecha_publicacion_video'); ?>
			<small>Publicado por: <?php the_field('autor_video'); ?> - <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small> 	    
	    <iframe width="100%" height="420" src="//www.youtube.com/embed/<?php the_field('video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>     
	    <p class="mt-14"><?php the_field('descripcion_larga_video'); ?></p>			   
	    <div class="text-center mt-7 mb-7 ">
	      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
	    </div>   	    
				<?php	if ( is_user_logged_in() ) { ?>
					<?php comments_template();?>
				<?php } else { ?>
					<p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
				<?php }	?>
    </div>
  </div>
</section>