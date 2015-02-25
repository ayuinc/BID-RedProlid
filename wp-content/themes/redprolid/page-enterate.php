<?php
/*
Template Name: Enterate
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    
    <section class="pb-21"> 
		  <div class="container relative mb-14">
		     <?php the_breadcrumb(); ?>
        <div class="clearfix sub-header">
          <div class="col-xs-3 col-sm-1">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" alt="" class="img-responsive"></div>
          </div>
          <div class="col-xs-9 col-sm-4">
            <h1 class="brand-titular">Entérate</h1>
          </div>
          <!--<div class="col-xs-12 col-sm-7">
            <nav class="text-right text-center-xs mb-0 mt-0">
              <a href="#" data-toggle="modal" data-target="#modalRecursos">¿Quieres compartir un recurso?</a> 
            </nav>
          </div>-->
        </div>
        <div class="row">
	        <div class="col-md-12">
	          <ul class="grid-list grid-list-5 text-center ph-ch-7">
	            <li class="grid-list-item">
	            	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-1.png" alt="">
	            	<p class="brand-titular">De dónde podrás encontrar todos los recursos y artículos</p>
	            </li>
	            <li class="grid-list-item">
		            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-2.png" alt="">
		            <p class="brand-titular">De las noticias y de los eventos que no podrás perderte </p>
	            </li>
	            <li class="grid-list-item">
		            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-3.png" alt="">
		            <p class="brand-titular">De lo que otras mujeres, con intereses similares a los tuyos, piensan</p>
	            </li>
	            <li class="grid-list-item">
	            	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-4.png" alt="">
	            	<p class="brand-titular">De diversos videos que podrás ver y compratir</p>
	            </li>
	            <li class="grid-list-item">
	            	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-5.png" alt="">
	            	<p class="brand-titular">De cómo estar conectada con lo que pasa en la Red PROLID</p>
	            </li>
	          </ul>
	        </div>
        </div>
        <div class="row">
	        <div class="col-md-12">	      
	          <h3 class="light">Imagina esta sección como una biblioteca en la que almacenamos todo tipo de recursos de nuestra red:  libros, legislación, investigaciones, blogs y noticias, al igual que material audiovisual como entrevistas o vídeos. Queremos también incluir material eminentemente práctico como compendios de buenas prácticas, guías para las mujeres en el sector público o estudios de casos concretos. Aspiramos a que aquí puedas encontrar todo lo que puede serte útil en el desarrollo y fortalecimiento de tu liderazgo en el sector público y la política.</h3>
	        </div>
        </div>
        <div class="row">
          <div class="panel panel-custom">
            <div class="panel-heading mb-0">
              <ul class="list-unstyled">
                <li class="title highlight-white text-gray-darker">Publicaciones</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="col-md-4 pl-0 pr-0">
                <div class="enterate-search bg-panel p-14">
                  <h2 class="mb-0">Búsqueda</h2>
                  <hr class="hr-gray-light mt-7 mb-7">
                  <p class="lead text-gray">Filtra tu búsqueda y encuentra lo que necesitas:</p>
                  <?php get_search_form(); ?>
                  <div class="bookshelf"></div>
                </div>
              </div>
              <div class="col-md-8 pl-0 pr-0">
                <ul class="flex flex-row flex-space-between normalize-text mb-14">
                  <li>
                    <h3 class="pb-14">Últimas publicaciones</h3>
                  </li>
                  <li>
                    <a href="<?php echo home_url('/'); ?>publicaciones" class="medium">Todas las publicaciones >></a>
                  </li>
                </ul>
                <ul class="list-unstyled">
                	<!-- Start the Loop. -->
                	<?php query_posts( 'category_name=recursos&posts_per_page=3' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>    
	                  <li class="mb-14">
	                    <h4 class="medium"><?php the_title(); ?></h4>
	                    <p><?php the_field('recurso_descripcion'); ?></p>
						          <p>
									      <strong>Autor: <?php the_field('recurso_autor'); ?></strong>, <?php the_field('recurso_año_de_publicacion'); ?> 
												<a href="<?php echo get_permalink( get_the_ID() ); ?>" class="text-primary">Lee más >></a> 
	                    </p>
	                  </li>
                    <hr>
			            <?php endwhile; ?>  
			            <?php wp_reset_query(); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>      	
      <div class="bg-panel">
        <div class="container">
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title text-gray-darker highlight-campeonas">Últimas noticias</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-right mr-56"><a href="<?php echo home_url('/'); ?>noticias" class="medium">Todas las noticias >></a></p>
                </div>
              </div>            
              <div class="gallery js-flickity grid-list grid-list-3 grid-list-1-xs grid-list-2-xs noticias-grid" data-flickity-options='{ "cellAlign": "left", "contain": true, "pageDots": false }'>
                <?php if ( have_posts() ) : ?>
                  <?php query_posts( 'cat=12&posts_per_page=3' ); ?>
                  <?php while ( have_posts() ) : the_post(); ?>                   
                    <div class="gallery-cell grid-list-item" style="min-height: 350px;">
                      <div class="banner banner-label-bottom">
                        <div class="bg-white">
                          <?php $imagen = get_field('imagen_noticias'); ?>
                          <?php if ($imagen!='') { ?>
                          <div class="banner-pic" style="background-image: url(<?php the_field('imagen_noticias'); ?>)"></div>
                          <?php } else { ?>
                          <div class="banner-pic" style="background-image: url(<?php echo home_url('/'); ?>wp-content/uploads/2015/02/imagen-noticia-placeholder.png)"></div>
                          <?php } ?>
                          <div class="banner-content flex-none">
                            <h3 class="medium mt-7 mb-0 pb-0">
                              <a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a>
                            </h3>
                            <?php $publicacion = get_field('publicacion_noticias'); ?>
                            <small>
                              <?php echo get_the_date('j F, Y'); ?><?php if ($publicacion!='') { ?>, <a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a>
                              <?php } ?>
                            </small>
                            <p class="mt-14"><?php the_field('descripcion_rapida_noticias');?></p>
                            <div class="text-right banner-label">
                              <small><a href="<?php echo get_permalink( get_the_ID() ); ?>">Noticia completa >></a></small>
                            </div>
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
      <div class="container">
        <div class="panel panel-custom">
          <div class="panel-heading">
            <ul class="list-unstyled">
              <li class="title title text-gray-darker highlight-white">Eventos</li>
              <li class="rule"></li>
              <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
            </ul>
          </div>
          <!--<div class="row">
            <div class="col-md-12">
              <p class="text-right"><a href="<?php echo home_url('/'); ?>eventos" class="medium">Eventos aquí >></a></p>
            </div>
          </div>-->             
          <div class="panel-body" style="padding: 0; margin: 21px 0;">
              <div class="row">
			          <!-- Start the Loop. -->
			          <?php if ( have_posts() ) : ?>
			            <?php query_posts( array( 'category_name' => 'eventos', 'posts_per_page' => 1 ) ); ?>
			            <?php while ( have_posts() ) : the_post(); ?>	              
	                <div class="col-md-8">
		                <div class="row">
			                <div class="col-md-4">
							      		<?php $imagen_evento = get_field('imagen_evento'); ?>
							        	<?php if ($imagen_evento!='') { ?>	
							    				<img src="<?php the_field('imagen_evento'); ?>" width="100%">
							    			<?php } else { ?>
							    				<img src="/wp-content/uploads/2015/02/eventos_redprolid.png" width="100%">
							    			<?php } ?>
			                </div>
			                <div class="col-md-8">
				                <h3 class="medium mb-0"><?php the_title(); ?></h3>
	                    	<?php $tempDate = get_field('fecha_inicio_evento'); ?>
		                    <small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
				                <p class="mt-14"><?php the_field('descripcion_evento');?></p>
				                <p class="text-right mr-14"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Más información >></a></p>
			                </div>
		                </div>
	                </div>
				        	<?php endwhile; ?>
			          <?php endif; ?> 
                <div class="col-md-4">
                  <h3 class="medium">Últimos eventos</h3>
									<div class="row">
					          <!-- Start the Loop. -->
					          <?php if ( have_posts() ) : ?>
					            <?php query_posts( 'category_name=eventos&posts_per_page=3&offset-1' ); ?>
					            <?php while ( have_posts() ) : the_post(); ?>											
											<div class="col-md-12">
												<a href="<?php echo get_permalink( get_the_ID() ); ?>"><h5 class="medium mb-0 pb-0"><?php the_title(); ?></h5></a>
												<?php $tempDate1 = get_field('fecha_inicio_evento'); ?>
												<small><?php echo date_i18n('j', strtotime( $tempDate1)); ?> de <?php echo date_i18n('F', strtotime( $tempDate1)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate1)); ?></small>
												<hr>
											</div>		
						        	<?php endwhile; ?>
					          <?php endif; ?> 	
					          <p class="text-right mr-14"><a href="<?php echo home_url('/'); ?>eventos" class="medium">Eventos >></a></p>										
									</div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="bg-panel">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title text-gray-darker highlight-campeonas">Campeonas</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
                  </ul>
                </div>
                <div class="row">
                	<div class="col-md-12 text-right">
	                	<a href="<?php echo home_url('/'); ?>campeonas" class="medium">Entrevistas >></a>
                	</div>
                </div>
                <div class="panel-body">
                  <div class="bg-white clearfix">
                  	<!-- Start the Loop. -->
										<?php if ( have_posts() ) : ?>
                    <?php query_posts( array( 'category_name' => 'campeonas', 'posts_per_page' => 1 ) ); ?>
											<?php while ( have_posts() ) : the_post(); ?>
													<?php setup_postdata($post); ?>
			                    <div class="col-sm-6 arrow_box p-14">
			                      <h3 class="medium mb-0 pb-0"><?php the_title(); ?></h3>
			                      <small>(<?php the_field('pais_campeona'); ?>)</small>
			                      <p><?php the_field('posicion_campeona'); ?></p>
			                      <div class="mt-14">
			                        <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Lee más</a>
			                      </div>
			                    </div>
			                    <div class="col-sm-6 pl-0-sm pr-0 text-right">
			                      <img src="<?php the_field('imagen_campeonas'); ?>" alt="" class="img-responsive" style="width: 100%;">
			                    </div>
					            <?php endwhile; ?>
										<?php endif; ?> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title text-gray-darker highlight-campeonas">Videos</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
                  </ul>
                </div>
                <div class="panel-body pt-0">
								<?php if ( have_posts() ) : ?>
                <?php query_posts( array( 'category_name' => 'video', 'posts_per_page' => 1 ) ); ?>
									<?php while ( have_posts() ) : the_post(); ?>	                
                  <h3 class="mediumt mb-0 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
									<?php $tempDate = get_the_date(); ?>
									<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>                  
                  <iframe width="100%" height="350" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                  <div class="text-right mt-21">
                    <p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Más aquí >></a></p>
                  </div>
			            <?php endwhile; ?>
								<?php endif; ?>                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-sm pv-21">
        <div class="row">
          <div class="col-md-3">
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/enterate-buzon.png" alt="" class="img-responsive">
          </div>
          <div class="col-md-6 separador-boletines pt-14 pb-14 pr-14 ">
            <h3 class="medium text-right">Suscríbete a nuestro boletín y descárgalo gratis </h3>
            <div class="text-right">
              <a href="#" class="light" data-toggle="modal" data-target="#mailChimp">Aquí >></a>
            </div>
          </div>
          <div class="col-md-3 mt-35 pl-14">
            <a href="<?php echo home_url('/'); ?>boletin" class="btn btn-primary">Boletines</a>
          </div>
        </div>
      </div>
    </section>      

<?php get_footer(); ?>    