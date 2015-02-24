<?php
/*
Template Name: Video
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section> 
  <div class="container">
    <?php the_breadcrumb(); ?> 
    <div class="clearfix sub-header">
      <div class="col-sm-1 col-xs-3">
        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/video-icon-circle.png" alt="" width="100%"></div>
      </div>
      <div class="col-sm-4 col-xs-9">
        <h1>Video</h1>
      </div>
      <div class="col-sm-7 col-xs-12">
        <nav class="text-right text-center-xs">
          <a href="#" data-toggle="modal" data-target="#modalVideos">¿Quieres compartir un video?</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>video/videos-anteriores">Videos anteriores</a> 
        </nav>	          
      </div>
    </div>
    <?php query_posts( 'cat=258&posts_per_page=1paged=' . $paged ); ?>
		<?php while ( have_posts() ) : the_post(); ?> 
    <div class="row">
			<div class="col-sm-7 relative">
		    <?php $youtube = get_field('video_youtube'); ?>
	    	<?php if ($youtube!='') { ?>
	    		<iframe width="100%" height="420" src="//www.youtube.com/embed/<?php the_field('video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>     
				<?php } ?>
		    <?php $vimeo = get_field('video_vimeo'); ?>
	    	<?php if ($vimeo!='') { ?>				
					<iframe src="//player.vimeo.com/video/<?php the_field('video_vimeo'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="420" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<?php } ?>
				<div class="new-ribbon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/new-ribbon.png)"></div>
			</div>
			<div class="col-sm-5">
				<a href="<?php echo get_permalink( get_the_ID() ); ?>"><h2 class="medium mb-0"><?php the_title(); ?></h2></a>
				<?php $tempDate = get_field('fecha_publicacion_video'); ?>
				<small>Publicado por: <?php the_field('organizacion_video'); ?> el <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
				<h3 class="pt-14 light"><?php the_field('descripcion_corta_video'); ?></h3>
			</div>
    </div>
    <?php endwhile; ?>	
    <div class="panel panel-custom">         
      <div class="panel-body pt-28">	
      	<h2>Otros videos</h2>
      	<hr>
				<div class="row">
        	<?php query_posts( 'cat=258&posts_per_page=4&offset=1'); ?>
					<?php while ( have_posts() ) : the_post(); ?>    
					<div class="col-sm-3">
				    <?php $youtube = get_field('video_youtube'); ?>
			    	<?php if ($youtube!='') { ?>
			    		<iframe width="100%" height="420" src="//www.youtube.com/embed/<?php the_field('video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>     
						<?php } ?>
				    <?php $vimeo = get_field('video_vimeo'); ?>
			    	<?php if ($vimeo!='') { ?>				
							<iframe src="//player.vimeo.com/video/<?php the_field('video_vimeo'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="420" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						<?php } ?>
						<a href="<?php echo get_permalink( get_the_ID() ); ?>"><h3 class="medium mt-7 mb-0"><?php the_title(); ?></h3></a>
						<p class="mb-0"><?php the_field('descripcion_corta_video'); ?></p>
						<?php $tempDate = get_field('fecha_publicacion_video'); ?>
						<small>Publicado por: <?php the_field('organizacion_video'); ?> el <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
					</div>																			
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>

	<!-- Modal EVENTOS -->
	<div class="modal fade" id="modalVideos" tabindex="-1" role="dialog" aria-labelledby="modalVideosLabel" aria-hidden="true">
		<?php if ( is_user_logged_in() ) { ?>
  	<div class="modal-dialog">
  	<?php } else { ?>
  	<div class="modal-dialog modal-lg">
  	<?php } ?>
	    <div class="modal-content bg-panel">
	      <div class="modal-body">
	        <!--<div class="clearfix sub-header sub-header-sm mb-0">
		        <div class="col-sm-1 col-xs-3">
		          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-topic-icon.png" alt="" width="100%"></div>
		        </div>
		        <div class="col-sm-5 col-xs-9"></div>
		        <div class="col-sm-6 col-xs-12"></div>
		      </div>-->
		      <?php if ( is_user_logged_in() ) { ?>
		      	<h3 class="medium">¿Quieres compartir un video?</h3>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 6 ); ?>
						<?php } ?>
					<?php } else { ?>
						<div class="row">
				  		<div class="col-sm-6 col-sm-offset-3">
				  			<div class="user-sign-in-form pv-21">
					  			<h2 class="medium">Ingresa o regístrate</h2>
			            <?php 
			              if ( is_user_logged_in() ) {

			                $current_user = wp_get_current_user();
			                echo '<div class="text-right">';
			                echo '<h4 class="light">Hola '.$current_user->user_nicename.'</h4>';
											echo '<a href="'.wp_logout_url().'" title="Logout" class="light">Cierra tu sesión</a>';
			                echo '</div>';

			              } else {

			                echo do_shortcode('[dm_login_form]'); 

			              }
			            ?>
			           </div>
				  		</div>
				  	</div>
			  	<?php } ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar X</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END Modal EVENTOS-->	
	
<?php get_footer(); ?>    