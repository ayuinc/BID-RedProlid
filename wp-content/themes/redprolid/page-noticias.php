<?php
/*
Template Name: Noticias
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

	<section class="mt-7"> 
    <div class="container">
      <?php the_breadcrumb(); ?> 
      <div class="clearfix sub-header">
        <div class="col-sm-1 hidden-xs">
          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/noticias-redondo.png" alt="" width="100%"></div>
        </div>
        <div class="col-sm-5 col-xs-12 text-center-xs ">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-sm-6 col-xs-12">
          <nav class="text-right text-center-xs">
            <a href="#" data-toggle="modal" data-target="#modalNoticias">¿Quieres compartir una noticia?</a> | <a href="<?php echo home_url('/'); ?>noticias-anteriores/">Noticias anteriores</a>
          </nav>	          
        </div>
      </div>
	    <div class="row text-justify">
				<div class="col-md-12">
					<h3 class="light mb-14">Todos los días encontramos en los medios noticias, buenas o malas, que nos hablan de los avances o retrocesos de la mujer en el espacio público. Hemos recogido algunas de las más relevantes o significativas de entre las que tienen que ver con nosotras y nos ayudan a entender cómo está cambiando el mundo para las mujeres. Anímate a proponer las noticias que te parezcan destacadas.</h3>
				</div>
	    </div>	
    </div>
	</section>
	
	<section class="bg-panel pv-21">
	  <div class="container">
	    <div class="panel panel-custom">
	      <div class="panel-heading mb-0 pb-0">
					<h2>Últimas noticias</h2>
	      </div>         
	      <div class="panel-body pt-14">
	        <div class="row noticias-row">
	          <div class="col-md-12">
	            <div class="row noticias-grid">
								<!-- Start the Loop. -->
								<?php if ( have_posts() ) : ?>
	                <?php query_posts( 'cat=12&posts_per_page=3' ); ?>
									<?php while ( have_posts() ) : the_post(); ?>				            
				            <div class="banner col-md-4 col-xs-12 banner-label-bottom pb-21-xs">
				            	<div class="bg-white">
					            	<?php $imagen = get_field('imagen_noticias'); ?>
					            	<?php if ($imagen!='') { ?>
					            	<div class="banner-pic" style="background-image: url(<?php the_field('imagen_noticias'); ?>)"></div>
					            	<?php } else { ?>
					            	<!--<div class="banner-pic" style="background-image: url(<?php //echo home_url('/'); ?>wp-content/uploads/2015/02/eventos_redprolid.png)"></div>-->
					            	<?php } ?>
					            	<div class="banner-content flex-none">

                                 <a href="<?php echo get_permalink( get_the_ID() ); ?>">
			                        <h3 class="medium mt-7 mb-0 pb-0">
			                    	    <?php the_title(); ?>
                                    </h3>
                                 </a>

			                    <?php $publicacion = get_field('publicacion_noticias'); ?>
			                    <small>
			                    	<?php echo get_the_date('j F, Y'); ?><?php if ($publicacion!='') { ?>, <a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a>
														<?php } ?>
													</small>
			                    <div class="mt-14 noticias_quickview pb-14-xs"><?php
                                     $noteContent = get_field('descripcion_rapida_noticias');
                                         if($noteContent != '' ){
                                             the_field('descripcion_rapida_noticias');
                                         }else{
                                            the_field('contenido_noticias');
                                         }
                                    ;?></div>
			                    <div class="text-right banner-label">
						              	<a href="<?php echo get_permalink( get_the_ID() ); ?>">Noticia completa >></a>
						              </div>
					            	</div>
				            	</div>
				            </div>
			            <?php endwhile; ?>
								<?php endif; ?>				            				            
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section> 
	          
	<section>
	  <div class="container">
	    <div class="panel panel-custom">         
	      <div class="panel-body pt-14">	      
					<div class="row">
	          <div class="col-md-8 pr-14">
	            <h2>Otras noticias</h2>  
	            <ul class="list-unstyled">
	            	<!-- Start the Loop. -->
	            	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	            	<?php query_posts( 'cat=12&posts_per_page=8&offset=3&paged=' . $paged ); ?>
								<?php while ( have_posts() ) : the_post(); ?>    
		                  <li class="mb-14">
		                    <h5 class="medium mb-0"><?php the_title(); ?></h5>
		                    <?php $publicacion = get_field('publicacion_noticias'); ?>
		                    <small>
		                    	<?php echo get_the_date('j F, Y'); ?><?php if ($publicacion!='') { ?>, <a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a>
													<?php } ?>
												</small>
												<p class="mt-14"><?php the_field('descripcion_rapida_noticias'); ?></p>
												<small class="vermas"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Noticia completa >></a></small>
		                  </li>
	                    <hr> 
		            <?php endwhile; ?> 
	            </ul>
	            <div class="mt-28">
		            <p class="text-right"><a href="<?php echo home_url('/'); ?>noticias-anteriores/">Ve más >></a></p>
	            </div>
	            <!--<div class="text-center">
	              <ul class="pager">
	                <li><?php //next_posts_link( 'Anteriores' ); ?></li>
	                <li><?php //previous_posts_link( 'Posteriores' ); ?></li>
	              </ul>
	            </div>--> 	            
	        	</div>
	          <div class="col-md-4 mostrar-anteriores hidden-xs hidden-sm">
	            <h4 class="medium text-gray-darker mb-14">Lo último en las redes</h4> 
	          	<div class="mb-14">
								<div class="fb-like-box bg-white" data-href="https://www.facebook.com/redprolid" data-width="350" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
	          	</div>
	          	<div class="mb-14">
								<a class="twitter-timeline" width="350" height="310"  href="https://twitter.com/redprolid" data-widget-id="510444695814537216">Tuiteado por @redprolid</a> 
	          	</div>
	          	<div class="mb-14"> 
								<div class="g-person" data-width="350" data-height="310" data-href="//plus.google.com/u/0/107403271684877473593" data-rel="author"></div>
	          	</div>			            
	          </div>
					</div>
	      </div>
	    </div>
	  </div>
	</section>

	<!-- Modal NOTICIAS -->
	<div class="modal fade" id="modalNoticias" tabindex="-1" role="dialog" aria-labelledby="modalNoticiasLabel" aria-hidden="true">
		<?php if ( is_user_logged_in() ) { ?>
  	<div class="modal-dialog">
  	<?php } else { ?>
  	<div class="modal-dialog modal-lg">
  	<?php } ?>
	    <div class="modal-content bg-panel">
	      <div class="modal-body">
		      <?php if ( is_user_logged_in() ) { ?>
		      	<h3 class="medium">¿Quieres compartir una noticia?</h3>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 3 ); ?>
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
	<!-- END Modal NOTICIAS-->

<?php get_footer(); ?>    