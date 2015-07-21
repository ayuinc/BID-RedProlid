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
          <div class="col-xs-12 text-center-xs pt-35-xs col-sm-1">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" alt="" ></div>
          </div>
          <div class="col-xs-12 text-center-xs col-sm-4">
            <h1 class="brand-titular">Entérate</h1>
          </div>
          <!--<div class="col-xs-12 col-sm-7">
            <nav class="text-right text-center-xs mb-0 mt-0">
              <a href="#" data-toggle="modal" data-target="#modalRecursos">¿Quieres compartir un recurso?</a> 
            </nav>
          </div>-->
        </div>
        <div class="row">
	        <div class="col-md-12 ph-14-xs">
	          <ul class="grid-list grid-list-6 text-center ph-ch-7">
	            <li class="grid-list-item responsive-grid-item">
                <a href="<?php echo home_url('/'); ?>campeonas">
  		            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-3.png" alt="">
                </a>
		            <p class="brand-titular">De testimonios sobre liderazgo femenino por sus protagonistas</p>
	            </li>
              <li class="grid-list-item responsive-grid-item">
                <a href="<?php echo home_url('/'); ?>puntos-de-vista">
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-2n.png" alt="">
                </a>
                <p class="brand-titular">De los últimos temas de nuestro blog</p>
              </li>
              <li class="grid-list-item responsive-grid-item">
                <a href="<?php echo home_url('/'); ?>noticias">
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-3n.png" alt="">
                </a>
                <p class="brand-titular">De las últimas noticias y eventos para que estés al día</p>
              </li>
	            <li class="grid-list-item responsive-grid-item">
                <a href="<?php echo home_url('/'); ?>video">
  	            	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-4.png" alt="">
	            	</a>
                <p class="brand-titular">De diversos videos que podrás ver y compartir</p>
	            </li>
              <li class="grid-list-item responsive-grid-item">
                <a href="<?php echo home_url('/'); ?>publicaciones">
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-5n.png" alt="">
                </a>
                <p class="brand-titular">De dónde encontrar todas las publicaciones</p>
              </li>
	            <li class="grid-list-item responsive-grid-item">
                <a href="<?php echo home_url('/'); ?>eventos">
  	            	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-5.png" alt="">
	            	</a>
                <p class="brand-titular">De cómo estar conectada con lo que pasa en la Red PROLID</p>
	            </li>
	          </ul>
	        </div>
        </div>
        <div class="row">
	        <div class="col-md-12">	      
	          <h3 class="light text-justify">Imagina esta sección como una biblioteca en la que almacenamos todo tipo de recursos de nuestra red:  libros, legislación, investigaciones, blogs y noticias, al igual que material audiovisual como entrevistas o vídeos. Queremos también incluir material eminentemente práctico como compendios de buenas prácticas, guías para las mujeres en el sector público o estudios de casos concretos. Aspiramos a que aquí puedas encontrar todo lo que puede serte útil en el desarrollo y fortalecimiento de tu liderazgo en el sector público y la política.</h3>
	        </div>
        </div>
      </div>        
        <!-- inicia 'Campeonas' + 'Puntos de Vista' -->
        <div class="bg-panel">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="panel panel-custom pr-14">
                  <div class="panel-heading">
                    <ul class="list-unstyled">
                      <li class="title text-gray-darker highlight-campeonas">Campeon@s</li>
                      <li class="rule"></li>
                      <li class="icon" data-href="<?php echo home_url('/'); ?>campeonas"   style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -252px;"></li>
                    </ul>
                  </div>
                  <div class="panel-body pt-0">
                    <div class="row">
                      <div class="col-md-8">
                        <p class="medium">Testimonios sobre el liderazgo femenino</p>
                      </div>
                      <div class="col-md-4 text-right">
                        <a class="mb-35-xs" href="<?php echo home_url('/'); ?>campeonas" class="medium">Entrevistas >></a>
                      </div>
                    </div>                
                    <div class="bg-white clearfix">
                      <!-- Start the Loop. -->
                      <?php if ( have_posts() ) : ?>
                      <?php query_posts( array( 'category_name' => 'campeonas', 'posts_per_page' => 1 ) ); ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php setup_postdata($post); ?>
                            <div class="col-sm-5 pl-0 pr-0-xs">
                              <?php $video = get_field('video_campeonas'); ?>
                              <?php if ($video!='') { ?>
                                <iframe  class="embed-responsive-item" width="100%" height="220" src="https://www.youtube.com/embed/<?php the_field('video_campeonas'); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                              <?php } else { ?>
                                <img src="<?php the_field('imagen_campeonas'); ?>" alt="" class="img-responsive" style="width: 100%;">
                              <?php } ?>
                            </div>
                            <div class="col-sm-7 pl-7 pr-14 ptp-7">
                              <div class="triangle hidden-xs"></div> 
                              <h3 class="medium mb-0 pb-0"><?php the_title(); ?></h3>
                              <p><?php the_field('descripcion_home_campeonas'); ?></p>
                              <div class="text-right">
                                <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Lee más</a>
                              </div>
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
                      <li class="title text-gray-darker highlight-campeonas">Puntos de vista</li>
                      <li class="rule"></li>
                      <li class="icon" data-href="<?php echo home_url('/'); ?>puntos-de-vista"   style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -210px;"></li>
                    </ul>
                  </div>
                  <div class="panel-body pt-0">
                    <div class="row">
                      <div class="col-md-8">
                        <p class="medium">Artículos escritos por líderes y especialistas</p>
                      </div>
                      <div class="col-md-4 text-right">
                        <a class="mb-35-xs" href="<?php echo home_url('/'); ?>puntos-de-vista" class="medium">Artículos >></a>
                      </div>
                    </div>
                    <?php if ( have_posts() ) : ?>
                    <?php query_posts( array( 'category_name' => 'puntos-de-vista', 'posts_per_page' => 1 ) ); ?>
                      <?php while ( have_posts() ) : the_post(); ?>
                    <div class="bg-white clearfix">
                      <div class="col-sm-5 pl-0 pr-0-xs">
                        <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="" class="img-responsive" style="width: 100%;">
                      </div>
                      <div class="col-sm-7 pl-7 pr-14 pt-14">
                          <div class="triangle hidden-xs"></div>                                  
                          <h3 class="medium mb-0 pb-0 pb-7-xs"><?php the_title(); ?></h3>
                          <p class="pb-14-xs">
                            <?php the_field('descripcion_punto_de_vista'); ?>
                          </p>
                          <div class="text-right pb-14-xs">
                            <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Lee más</a>
                          </div>   
                          <?php endwhile; ?>
                        <?php endif; ?>                   
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- termina 'Campeonas' + 'Puntos de Vista' -->
        <!-- inicia 'Ultimas noticias' + 'Videos' -->
        <div class="">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="panel panel-custom pr-14">
                  <div class="panel-heading">
                    <ul class="list-unstyled">
                      <li class="title text-gray-darker highlight-white">Últimas noticias</li>
                      <li class="rule"></li>
                      <li class="icon hiden-xs" data-href="<?php echo home_url('/'); ?>noticias"  style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/noticias-sml.png); background-repeat: no-repeat;"></li>
                    </ul>
                  </div>
                  <div class="panel-body pt-0">
                    <div class="row">
                      <div class="col-md-8">
                        <p class="mr-56"><a href="<?php echo home_url('/'); ?>noticias" class="medium">Todas las noticias >></a></p>
                      </div>
                    </div>             
                    <!-- loop noticias    -->
                    <div class="row">
                    <?php if ( have_posts() ) : ?>
                      <?php query_posts( 'cat=12&posts_per_page=2' ); ?>
                      <?php while ( have_posts() ) : the_post(); ?>                   
                        <div class="col-sm-6 bg-white">
                          <div class="border-panel mb-14-xs">
                            <?php $imagen = get_field('imagen_noticias'); ?>
                            <?php if ($imagen!='') { ?>
                            <img src="<?php the_field('imagen_noticias'); ?>" style="width:100%;" alt="">
                            <?php } else { ?>
                            <!-- <img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/02/eventos_redprolid.png" style="width:100%;" alt=""> -->
                            <?php } ?>
                            <h5 class="medium mt-7 mb-0 pb-0">
                              <p class="medium giveMeEllipsis"><?php the_title(); ?></p>
                            </h5>
                            <?php $publicacion = get_field('publicacion_noticias'); ?>
                            <?php if ($publicacion!='') { ?>
                              <a class="block" href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a>
                              <small><?php echo get_the_date('j F, Y'); ?></small>
                              <p><?php the_field('descripcion_rapida_noticias'); ?></p>
                            <?php } ?>
                            <div class="text-right banner-label p-7">
                              <a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve más >></a>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- loop noticias    -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="panel panel-custom">
                  <div class="panel-heading">
                    <ul class="list-unstyled">
                      <li class="title text-gray-darker highlight-white">Videos</li>
                      <li class="rule"></li>
                      <li class="icon" data-href="<?php echo home_url('/'); ?>video"   style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/camara.png); background-repeat: no-repeat;"></li>
                    </ul>
                  </div>
                  <div class="panel-body pt-0">
                    <div class="row">
                      <div class="col-md-8">
                        <p class="mr-56"><a href="<?php echo home_url('/'); ?>video" class="medium">Todos los videos >></a></p>
                      </div>
                    </div>                     
                      <?php if ( have_posts() ) : ?>
                        <?php query_posts( array( 'category_name' => 'video', 'posts_per_page' => 1 ) ); ?>
                          <?php while ( have_posts() ) : the_post(); ?>                                  
                          <h3 class="pb-0 mb-0 pb-14-xs"><?php the_title(); ?></h3>
                          <?php $video_autor = get_field('video_autor'); ?>
                          <?php $video_fecha_publicacion = get_field('video_fecha_publicacion') ?>
                          <?php $video_descripcion_corta = get_field('video_descripcion_corta') ?>
                          <?php if ($video_descripcion_corta !='') { ?> <?php the_field('video_descripcion_corta'); ?><?php } ?>
                          <?php $youtube = get_field('video_youtube'); ?>
                          <?php if ($youtube!='') { ?>
                            <iframe width="100%" height="290" src="//www.youtube.com/embed/<?php the_field('video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>     
                          <?php } ?>
                          <?php $vimeo = get_field('video_video_vimeo'); ?>
                          <?php if ($vimeo!='') { ?>        
                            <iframe src="//player.vimeo.com/video/<?php the_field('video_video_vimeo'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                          <?php } ?>
                          <?php endwhile; ?>
                        <?php endif; ?>            
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- termina 'Ultimas noticias' + 'Videos' -->
        <!-- inicia 'Publicaciones' + 'Eventos' -->
        <div class="container">
        <div class="row full-bottom-border">
          <div class="col-sm-6">
            <div class="panel panel-custom pr-14">
              <div class="panel-heading">
                <ul class="list-unstyled">
                  <li class="title text-gray-darker highlight-white">Publicaciones</li>
                  <li class="rule"></li>
                  <li class="icon" data-href="<?php echo home_url('/'); ?>publicaciones"  style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/publicaciones-sml.png); background-repeat: no-repeat;"></li>
                </ul>
              </div>
              <div class="panel-body pt-0">            
                <!-- loop noticias    -->
                <div class="row">
                  <div class="col-xs-6 enterate-publicaciones">
                    <h3 class="mb-0">Búsqueda</h3>
                    <hr class="hr-gray-light mt-7 mb-7">
                    <p class="text-gray">Filtra tu búsqueda y encuentra lo que necesitas:</p>
                    <?php get_search_form(); ?>
                  </div>
                  <div class="enterate-search col-xs-6">
                    <div class="bookshelf"></div>
                  </div>
                <!-- loop noticias    -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="panel panel-custom">
              <div class="panel-heading">
                <ul class="list-unstyled">
                  <li class="title text-gray-darker highlight-white">Eventos</li>
                  <li class="rule"></li>
                  <li class="icon" data-href="<?php echo home_url('/'); ?>eventos"   style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -125px;"></li>
                </ul>
              </div>
              <div class="panel-body pt-0">
                  <div class="row">
                    <!-- Start the Loop. -->
                    <?php if ( have_posts() ) : ?>
                      <?php query_posts( array( 'category_name' => 'evento-destacado', 'posts_per_page' => 1 ) ); ?>
                      <?php while ( have_posts() ) : the_post(); ?>               
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-4">
                            <?php $imagen_evento = get_field('imagen_evento'); ?>
                            <?php if ($imagen_evento!='') { ?>  
                              <img src="<?php the_field('imagen_evento'); ?>" width="100%">
                          </div>
                          <div class="col-md-8">                              
                            <?php } else { ?>
                              <!-- <img src="/wp-content/uploads/2015/02/eventos_redprolid.png" width="100%"> -->
                          </div>
                          <div class="col-md-12">                            
                            <?php } ?>
                            <h4 class="medium mb-0"><?php the_title(); ?></h4>
                            <?php $tempDate = get_field('fecha_inicio_evento'); ?>
                            <small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
                          </div>
                        </div>
                        <div class="row pt-14">
                          <div class="col-md-12"><?php the_field('descripcion_evento');?></div>
                          <p class="text-right mr-14"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Más información >></a></p>
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
      <!-- termina 'Publicaciones' + 'Eventos' --> 

      <div class="container-sm pv-21">
        <div class="row">
          <div class="col-md-3">
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/enterate-buzon.png" alt="" class="img-responsive">
          </div>
          <div class="col-md-6 separador-boletines pt-14 pb-14 pr-14 ">
            <h3 class="medium text-right">Suscríbete a nuestro boletín y descárgalo gratis </h3>
            <div class="text-right">
              <a href="#" class="light" data-toggle="modal" data-target="#Formboletin">Aquí >></a>
            </div>
          </div>
          <div class="col-md-3 mt-35 pl-14">
            <a href="<?php echo home_url('/'); ?>boletines-proximamente/" class="btn btn-primary">Boletines</a>
          </div>
        </div>
      </div>
    </section>   
    
    
	<!-- Modal NOTICIAS -->
	<div class="modal fade" id="Formboletin" tabindex="-1" role="dialog" aria-labelledby="modalNoticiasLabel" aria-hidden="true">
		<?php if ( is_user_logged_in() ) { ?>
  	<div class="modal-dialog">
  	<?php } else { ?>
  	<div class="modal-dialog modal-lg">
  	<?php } ?>
	    <div class="modal-content bg-panel">
	      <div class="modal-body">
	      	<!--<h3 class="medium pb-0 mb-0">¿Quieres recibir el boletín de Red PROLID?</h3>-->
	      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
						<?php ninja_forms_display_form( 13 ); ?>
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