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
			<small>Publicado por: <?php the_field('organizacion_video'); ?> el <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small> 	    
	    <div class="pv-21">
		    <?php $youtube = get_field('video_youtube'); ?>
	    	<?php if ($youtube!='') { ?>
	    		<iframe width="100%" height="420" src="//www.youtube.com/embed/<?php the_field('video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>     
				<?php } ?>
		    <?php $vimeo = get_field('video_vimeo'); ?>
	    	<?php if ($vimeo!='') { ?>				
					<iframe src="//player.vimeo.com/video/<?php the_field('video_vimeo'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="420" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<?php } ?>
				<p><?php the_field('descripcion_larga_video'); ?></p>
	    </div> 
  	  <div class="row">
  			<div class="col-sm-12 with-hr">  	  
  		    <p><?php the_field('recurso_descripcion'); ?></p>
					<p>
						<?php $tipo_recurso_video = get_field('tipo_recurso_video'); ?>
						<?php $tag_tipo_de_recurso_video = get_field('tag_tipo_de_recurso_video'); ?>
						<?php if ($tipo_recurso_video!='') { ?>	
						<span class="medium">Tipo de recurso:</span> <?php the_field('tipo_recurso_video'); ?>
							<?php if ($tag_tipo_de_recurso_video!='') { ?>
								<?php echo ', '.$tag_tipo_de_recurso_video; ?>
							<?php } ?>						
						<br>
						<?php } ?>
						<?php $tema_video = get_field('tema_video'); ?>
						<?php $tag_tema_video = get_field('tag_tema_video'); ?>
						<?php if ($tema_video!='') { ?>						
						<span class="medium">Tema:</span> <?php the_field('tema_video'); ?>
							<?php if ($tag_tema_video!='') { ?>
								<?php echo ', '.$tag_tema_video; ?>
							<?php } ?>							
						<br>
						<?php } ?>
						<?php $organizacion_video = get_field('organizacion_video'); ?>
						<?php if ($organizacion_video!='') { ?>
						<span class="medium">Organización:</span> <?php echo $organizacion_video; ?>
						<?php } ?>
						<br>
						<?php $pais_video = get_field('pais_video'); ?>
						<?php if ($pais_video!='') { ?>
						<span class="medium">País:</span> <?php the_field('pais_video'); ?>
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