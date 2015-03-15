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
			<?php $video_autor = get_field('video_autor'); ?>
			<?php $video_fecha_publicacion = get_field('video_fecha_publicacion') ?>
			<small>
				<?php if ($video_autor!='') { ?><?php the_field('video_autor'); ?><?php } ?><?php if ($video_fecha_publicacion!='') { ?>, <?php the_field('video_fecha_publicacion'); ?><?php } ?>
			</small> 	    
	    <div class="pv-21">
		    <?php $youtube = get_field('video_youtube'); ?>
	    	<?php if ($youtube!='') { ?>
	    		<iframe width="100%" height="420" src="//www.youtube.com/embed/<?php the_field('video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>     
				<?php } ?>
		    <?php $vimeo = get_field('video_video_vimeo'); ?>
	    	<?php if ($vimeo!='') { ?>
	    	ss				
					<iframe src="//player.vimeo.com/video/<?php the_field('video_video_vimeo'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="420" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<?php } ?>
				<p><?php the_field('video_descripcion_larga'); ?></p>
	    </div> 
  	  <div class="row">
  			<div class="col-sm-12 with-hr">  	  
  		    <!--<p><?php //the_field('video_recurso_descripcion'); ?></p>-->
					<p>
						<?php $video_tipo_recurso = get_field('video_tipo_recurso'); ?>
						<?php $video_tag_tipo_de_recurso = get_field('video_tag_tipo_de_recurso'); ?>
						<?php if ($video_tipo_recurso!='') { ?>	
						<span class="medium">Tipo de recurso:</span> <?php the_field('video_tipo_recurso'); ?>
							<?php if ($video_tag_tipo_de_recurso!='') { ?>
								<?php echo ', '.$video_tag_tipo_de_recurso; ?>
							<?php } ?>						
						<br>
						<?php } ?>
						<?php $video_tema = get_field('video_tema'); ?>
						<?php $video_tag_tema = get_field('video_tag_tema'); ?>
						<?php if ($video_tema!='') { ?>						
						<span class="medium">Tema:</span> <?php the_field('video_tema'); ?>
							<?php if ($video_tag_tema!='') { ?>
								<?php echo ', '.$video_tag_tema; ?>
							<?php } ?>							
						<br>
						<?php } ?>
						<?php $video_organizacion_video = get_field('video_organizacion'); ?>
						<?php if ($video_organizacion!='') { ?>
						<span class="medium">Organización:</span> <?php echo $video_organizacion; ?>
						<br>
						<?php } ?>
						<?php $video_pais = get_field('video_pais'); ?>
						<?php if ($video_pais!='') { ?>
						<span class="medium">País:</span> <?php the_field('video_pais'); ?>
						<?php } ?>						
					</p>   		
  			</div>
  	  </div> 	    	   
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