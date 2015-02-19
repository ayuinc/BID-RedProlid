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
          <a href="#" data-toggle="modal" data-target="#modalVideos">¿Quieres compartir un video?</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>video/videos-anteriores">Videos Anteriores</a> 
        </nav>	          
      </div>
    </div>
    <?php query_posts( 'cat=259&posts_per_page=10&paged=' . $paged ); ?>
		<?php while ( have_posts() ) : the_post(); ?> 
    <div class="row">
			<div class="col-sm-7 relative">
				<iframe width="100%" height="350" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
				<div class="new-ribbon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/new-ribbon.png)"></div>
			</div>
			<div class="col-sm-5">
				<h2 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h2>
				<?php $tempDate = get_the_date(); ?>
				<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
				<h3 class="mt-7 light"><?php the_field('descripcion_video'); ?></h3>
			</div>
    </div>
    <?php endwhile; ?>	
    <div class="panel panel-custom">         
      <div class="panel-body pt-14">	
      	<h2>Videos más vistos</h2>
      	<hr>
				<div class="row">
        	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
        	<?php query_posts( 'cat=260&posts_per_page=10&paged=' . $paged ); ?>
					<?php while ( have_posts() ) : the_post(); ?>    
					<div class="col-sm-3">
						<iframe width="100%" height="150" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
						<h3 class="medium mt-7 mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
						<p class="mb-0"><?php the_field('descripcion_video'); ?></p>
						<?php $tempDate = get_the_date(); ?>
						<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
					</div>																			
          <?php endwhile; ?>
        </div>
        <div class="row">
          <div class="col-sm-12"> 
            <!--Pagination-->
            <div class="text-center">
              <ul class="pager">
                <li><?php next_posts_link( 'Anteriores' ); ?></li>
                <li><?php previous_posts_link( 'Posteriores' ); ?></li>
              </ul>
            </div> 
            <!--End.Pagination-->	  
          </div>          
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