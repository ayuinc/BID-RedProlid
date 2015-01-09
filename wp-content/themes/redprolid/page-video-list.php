<?php
/*
Template Name: Video list
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div class="">
	<section class="mt-7 mb-21"> 
	  <div class="container relative mb-14">
	    <div class="row">
	      <div class="col-md-12">
	        <?php the_breadcrumb(); ?>
	      </div>
	    </div>
	    <div class="absolute dtl-custom-heading z-index-100">
	      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/eventos-icon-circle.png" alt="" width="100%"></div>
	      <div class="clearfix">
	        <div class="col-md-6">
	          <h1 class="mt-14 ml--25 mb-0 brand-titular">Eventos</h1>
	        </div>
	        <div class="col-md-6 pt-28">
	          <nav class="text-right mb-0 mt-0">
	            <a href="<?php echo home_url('/'); ?>compartir-noticias" class="light">¿Quieres proponernos un evento?</a> | <a href="<?php echo home_url('/'); ?>compartir-noticias" class="light">Eventos anteriores</a>
	          </nav>
	        </div>
	      </div>
	    </div>	
	  </div>      
	</section>
	
	<section class="pt-7-100 mb-21"> 
	  <div class="container">
	    <div class="row">
				<div class="col-md-12">
					<h3 class="light mt-21">Todos los días encontramos en los medios noticias, buenas o malas, que nos hablan de los avances o retrocesos de la mujer en el espacio público. Hemos recogido algunas de las más relevantes o significativas de entre las que tienen que ver con nosotras y nos ayudan a entender cómo está cambiando el mundo para las mujeres. Anímate a proponer las noticias que te parezcan destacadas.</h3>
				</div>
	    </div>	
	  </div>      
	</section>
	
	<section class="bg-panel pt-21 pb-28 mb-21">
	  <div class="container">
	    <div class="panel panel-custom">
	      <div class="panel-heading mb-0 pb-0">
		      <div class="row">
			      <div class="col-md-10 col-md-offset-1">
							<h2>Eventos destacados</h2>
			      </div>
		      </div>
	      </div>         
        <div class="panel-body pt-0">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner pl-56 pr-56">
										<!-- Start the Loop. -->
										<?php if ( have_posts() ) : ?>
                      <?php query_posts( array( 'category_name' => 'eventos-destacados', 'posts_per_page' => 1 ) ); ?>
											<?php while ( have_posts() ) : the_post(); ?>
				                <div class="row">
				                	<div class="col-md-12">
					                	<h3 class="medium mt-7 mb-14 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
				                	</div>
				                </div> 
				                <div class="row">
				                	<div class="col-md-3">
					                	<img src="<?php the_field('imagen_evento'); ?>" alt="" class="img-responsive">
				                	</div>
				                	<div class="col-md-9 event-destacados">
					                	<?php $tempDate = get_the_date(); ?>
					                	<p>
						                	<span>Fecha:</span> <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?><br>
						                	<span>Hora:</span> <?php the_field('hora_evento'); ?><br>
						                	<span>Lugar:</span> <?php the_field('lugar_evento'); ?><br>
						                	<span>Organizan:</span> <?php the_field('organizan_evento'); ?><br>
															<span>Convocan:</span> <?php the_field('convocan'); ?>
						                </p>
														<p class="text-center pt-0 mb-0"></p>
				                	</div>
				                </div>
				                <div class="row">
					                <div class="col-md-12">
						                <p class="text-right mt-14"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Más Información >></a></p>
					                </div>
				                </div>   
					            <?php endwhile; ?>
										<?php endif; ?>	
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="icon-next"></span>
                </a>
              </div> <!-- END:CAROUSEL -->			            
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
		      	<div class="col-md-10 col-md-offset-1">
			      	<h2>Próximos eventos</h2>
		      	</div>
		      </div>      
					<div class="row">
	          <div class="col-md-10 col-md-offset-1"> 
	            <ul class="list-unstyled">
	            	<!-- Start the Loop. -->
	            	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	            	<?php query_posts( 'cat=11&posts_per_page=10&paged=' . $paged ); ?>
								<?php while ( have_posts() ) : the_post(); ?>    
	                <li class="mb-14 events-next">
	                  <div class="row">
		                  <div class="col-md-2">
							          <div class="panel">
								          <?php $tempDate = get_the_date(); ?>
								          <h3 class="text-center medium h1 mt-0 mb-0 pb-0"><?php echo date_i18n('j', strtotime( $tempDate)); ?></h3>
								          <p class="text-center pt-0 mb-0"><?php echo date_i18n('M', strtotime( $tempDate)); ?></p>
							          </div>				                  
		                  </div>
		                  <div class="col-md-10">
		                    <h4 class="medium mt-7"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h4>
		                    <p>
			                    <span>Lugar:</span> <?php the_field('lugar_evento'); ?><br>
			                    <span>Hora:</span> <?php the_field('hora_evento'); ?><br>
			                    <span>Organizan:</span> <?php the_field('organizan_evento'); ?><br>
			                    <span>Convocan:</span> <?php the_field('convocan'); ?>
		                    </p>
		                    <p>Para mayores informes contactar a <a href="mailto:<?php the_field('contacto_email_evento'); ?>"><?php the_field('contacto_nombre_evento'); ?></a></p>
	                      <small>
	                      	<?php if ($publicacion!='') { ?> 
														/ <a href="<?php the_field('link_publicacion_noticias'); ?>"><?php the_field('publicacion_noticias'); ?></a>
													<?php } ?>
												</small>				                  
		                  </div>
	                  </div>
	                </li>
		            <?php endwhile; ?> 
	            </ul>
	            <div class="text-center">
	              <ul class="pager">
	                <li><?php next_posts_link( 'Anteriores' ); ?></li>
	                <li><?php previous_posts_link( 'Posteriores' ); ?></li>
	              </ul>
	            </div> 	            
	        	</div>
					</div>
	      </div>
	    </div>
	  </div>
	</section>
</div>

<?php get_footer(); ?>    