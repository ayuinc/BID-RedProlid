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
	          <a href="#" data-toggle="modal" data-target="#modalWebinarios">¿Quieres proponernos un tema?</a> <span class="brand-primary">|</span> <a href="<?php echo home_url('/'); ?>webinarios-anteriores">Webinarios anteriores</a>
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
				    <h1 class="mb-14 medium"><?php the_title(); ?></h1>
				    <p class="mt-14"><?php the_field('descripcion_resumen'); ?></p>
	          <div class="row">
		          <div class="col-md-12">
						    <div class="video-container videoWrapper mt-35 mb-0">
						      <iframe src="//www.youtube.com/embed/<?php the_field('video'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
						    </div>
		          </div>
	          </div>
	          <div class="row">
		          <div class="col-md-12">
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
							<?php	if ( is_user_logged_in() ) { ?>
								<?php comments_template();?>
							<?php } else { ?>
								<p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
							<?php }	?>
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
	        <!--<div class="clearfix sub-header sub-header-sm mb-0">
		        <div class="col-sm-1 col-xs-3">
		          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-topic-icon.png" alt="" width="100%"></div>
		        </div>
		        <div class="col-sm-5 col-xs-9"></div>
		        <div class="col-sm-6 col-xs-12"></div>
		      </div>-->
		      <?php if ( is_user_logged_in() ) { ?>
		      	<h3 class="medium">¿Quieres proponernos un tema?</h3>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 7 ); ?>
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
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar X</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END Modal WEBINARIOS-->	