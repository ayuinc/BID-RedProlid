<div class="mh-700">
	<section class="mt-7 mb-21"> 
	  <div class="container relative mb-14">
      <?php the_breadcrumb(); ?>
      <div class="clearfix sub-header">
	      <div class="col-sm-1 col-xs-3">
	        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/webinarios-icon.png" alt="" width="100%"></div>
	      </div>
	      <div class="col-sm-4 col-xs-9">
	        <h1 class="brand-titular">Webinarios</h1>
	      </div>
	      <div class="col-sm-7 col-xs-12">
	        <nav class="text-right text-center-xs">
	          <a href="#" data-toggle="modal" data-target="#modalWebinarios">¿Quieres proponernos un tema?</a>
	        </nav>
	      </div>
	    </div>	
		  <?php if (have_posts()) : ?>
		  <?php $count = 0; ?>
		
		  <?php while ( have_posts() ) : the_post(); ?>
		  <?php $count++; ?>
		
		  <?php if ($count <= 1) : ?>
		  <?php $id_post_comentarios = get_the_ID(); ?> 		
		    <div class="row">
		      <div class="col-md-10 col-md-offset-1">		
				    <h1 class="mb-21"><?php the_title(); ?></h1>
				    <p><?php echo get_post_field('post_content', get_the_ID()); ?></p>
				    <?php
				      $url = get_field('video');
				      parse_str( parse_url( $url, PHP_URL_QUERY ), $videocode );
				    ?> 
	          <div class="row">
		          <div class="col-md-10 col-md-offset-1">
						    <div class="video-container videoWrapper mt-35 mb-0">
						      <iframe src="//www.youtube.com/embed/<?php echo $videocode['v']; ?>" frameborder="0" allowfullscreen></iframe>
						    </div>
		          </div>
	          </div>
	          <div class="row">
		          <div class="col-md-10 col-md-offset-1">
			          <ul class="list-unstyled mt-35 mb-35 webinario-datos">
			            <li>
			            	<h5 class="medium mb-0">Tipo de recurso:</h5>
			            	<p><?php the_field('source_type'); ?></p>
			            </li>
			            <li>
				            <h5 class="medium mb-0">Región:</h5>
				            <p><?php the_field('region'); ?></p>
			            </li>
			            <li>
			            	<h5 class="medium mb-0">Tema:</h5>
			            	<p><?php the_field('theme'); ?></p>
			            </li>
			            <li>
			            	<h5 class="medium mb-0">Publicación:</h5>
			            	<p><?php the_field('publisher'); ?></p>
			            </li>
			            <li>
			            	<h5 class="medium mb-0">Año de Publicación:</h5>
			            	<p><?php the_field('publication_year'); ?></p>
			            </li>
			          </ul>			          
		          </div>
	          </div>				
				    <div class="comments">
				      <?php comments_template();?>
				    </div> 
		      </div>
		    </div>
		  <?php endif; ?>
		  <?php endwhile; ?>
		  <?php endif; ?>
	  </div>
</div>

	<!-- Modal WEBINARIOS -->
	<div class="modal fade" id="modalWebinarios" tabindex="-1" role="dialog" aria-labelledby="modalWebinariosLabel" aria-hidden="true">
		<?php if ( is_user_logged_in() ) { ?>
  	<div class="modal-dialog">
  	<?php } else { ?>
  	<div class="modal-dialog modal-lg">
  	<?php } ?>
	    <div class="modal-content bg-panel">
	      <div class="modal-body">
	        <div class="clearfix sub-header sub-header-sm">
		        <div class="col-sm-1 col-xs-3">
		          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-topic-icon.png" alt="" width="100%"></div>
		        </div>
		        <div class="col-sm-5 col-xs-9"></div>
		        <div class="col-sm-6 col-xs-12"></div>
		      </div>
		      <?php if ( is_user_logged_in() ) { ?>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
		      		<p>¿Nos propones un tema para desarrollar en nuestras entrevistas y/o a quíen te gustaría que entrevistemos?</p>
							<?php ninja_forms_display_form( 5 ); ?>
						<?php } ?>
					<?php } else { ?>
						<div class="row">
				  		<div class="col-sm-6 col-sm-offset-3">
				  			<div class="user-sign-in-form pv-21">
					  			<h2 class="medium">Ingresa al sistema</h2>
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
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar X</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END Modal WEBINARIOS-->	