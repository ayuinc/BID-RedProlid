<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <style>

    </style>
    <div class="mh-700">
      <section id="hero-unit">
        <div class="container pv-21">
          <div id="carousel-home" class="hidden-sm-down carousel slide bg-panel border-radius p-21 bg-img-block bg-img-block-top bg-img-block-right" data-ride="carousel" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-network-right.png);">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
              <li data-target="#carousel-home" data-slide-to="0" class="active"></li> 
            </ol> -->

            <!-- Wrapper for slides -->
          	<?php query_posts( 'category_name=video-homepage&posts_per_page=3' ); ?>	
						<?php while ( have_posts() ) : the_post(); ?>  
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-7 minh-350 flex-middle">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="100%" height="315" src="//www.youtube.com/embed/<?php the_field('id_video_homepage'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-sm-5 minh-350 flex-middle-end">
                    <div>
                      <h3 class="light text-gray-dark"><span class="uppercase"><?php the_title(); ?></h3>
                      <hr class="hr-white">
                      <div class="text-right">
                        <a href="<?php the_field('link_contenido_homepage'); ?>" class="btn btn-outline btn-white">Más aquí</a>
                      </div>
                    </div>
                  </div>
                </div>          
              </div>
            </div>
						<?php endwhile; ?> 
						
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
              <span class="icon-next"></span>
            </a>
          </div>
          <h2 class="text-center mt-21 mb-0"><strong><span class="text-secondary">La Red PROLID</span> es una plataforma para conectar, promover intercambios y aprendizajes</strong><br> <span class="light">entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo<br>en el sector público en Latinoamérica</span></h2>
        </div>
      </section>
      <section class="dtl-home mt-21 mb-21">
        <div class="container ph-70-sm">
          <div class="text-center">
            <h2>Desarrolla tu liderazgo</h2>
            <p class="lead">Imagina tu trayectoria profesional y/o política como una carrera deportiva. Necesitas tener claro el rumbo que has de tomar, y para ello te servirán de ayuda las redes sociales y las tecnologias de la información y la comunicación...</p>
          </div>
          <div id="carousel-home-dtl" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-home-dtl" data-slide-to="0" class="active"></li> 
              <li data-target="#carousel-home-dtl" data-slide-to="1" class=""></li> 
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
							<?php $the_query = new WP_Query( 'category_name=home-desarrolla-tu-liderazgo&posts_per_page=5' ); ?>
							<?php if ( $the_query->have_posts() ) : ?>							
							<?php
							// Previous code here...
							$i = 1;
							while ( $the_query->have_posts() ) :
							$the_query->the_post();
							?>	            
              <div class="item  class="item<?php if ($i == 1) echo 'active'; ?>"">
                <ul class="grid-list grid-list-4 grid-list-1-xs dtl-carousel">	                
                  <li>
                    <div class="dtl-item" data-href="#">
                      <div class="bg-img-block-no-cover bg-img-block" style="background-image: url(<?php the_field('imagen_home_dtl'); ?>);"></div>
                      <div class="dtl-title">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-right">
                          <a href="<?php the_field('link_a_seccion_interna_home_dtl'); ?>" class="btn btn-xs btn-primary">Ver más</a>
                        </div>
                      </div>
                    </div>
                  </li>
	              </ul>
              </div>
							<?php
							$i++;
							endwhile;
							wp_reset_postdata();
							?>     
							<?php endif; ?>         
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-home-dtl" role="button" data-slide="prev">
              <span class="icon-prev out"></span>
            </a>
            <a class="right carousel-control" href="#carousel-home-dtl" role="button" data-slide="next">
              <span class="icon-next out"></span>
            </a>
          </div>

          <!-- <div class="panel panel-custom panel-highlight-silver">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title highlight-white">Desarrolla tu liderazgo</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-nav-main-menu.png); background-repeat: no-repeat; background-position: 0px -85px;"></li>
              </ul>
            </div>
            <div class="panel-body panel-body-shadow pt-21 pl-14 pr-14">
              <div class="col-sm-4 pt-0">
                <h5 class="light mb-14">Imagina tu trayectoria profesional y/o política como una carrera deportiva. Necesitas tener claro el rumbo que has de tomar, y para ello te servirán de ayuda las redes sociales y las tecnologias de la información y la comunicación...</h5>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo" class="btn btn-primary">Más aquí</a>
              </div>
              <div class="col-sm-8 dtl-path dtl-path-sm pr-14">
               <div class="row">
                  <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/"></a></div>
                  <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/carrera-de-vallas/"></a></div>
                  <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/"></a></div>
                  <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/"></a></div>
                  <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/"></a></div>
                  <div class="col-xs-1"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas/"></a></div>
                  <div class="col-xs-1"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/la-pinta-no-es-lo-de-menos/"></a></div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </section>
      <section class="widgets mb-21">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title highlight-white">Concursos</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -42px;"></li>
                  </ul>
                </div>
                <div class="panel-body highlight">
                	<?php query_posts( 'category_name=concursos&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>                 
                    <img src="<?php the_field('imagen_concurso'); ?>" alt="" class="img-responsive mb-14">
                    <h5><?php the_title(); ?></h5>
                    <p class="light"><?php the_field('descripcion_concurso'); ?></p>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Más información</a>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
            <div class="col-md-3 noticias">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title highlight-white">Noticias</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -84px;"></li>
                  </ul>
                </div>
                <div class="panel-body">

                    <ul class="list-unstyled list-group list-group-custom">
                    	<?php query_posts( 'category_name=noticias&posts_per_page=3' ); ?>	
											<?php while ( have_posts() ) : the_post(); ?>                    
                      <li class="mb-14">
                        <h5><?php the_title(); ?></h5>
		                    <?php $publicacion = get_field('publicacion_noticias'); ?>
		                    <small class="date light">
		                    	<?php $tempDate = get_the_date(); ?>
			                    <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?><?php if ($publicacion!='') { ?>, <a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a><?php } ?> | <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="text-primary p">Lee más</a>
												</small>                      
                      </li>
											<?php endwhile; ?>                     
                    </ul>
                    <a href="<?php echo home_url('/'); ?>noticias" class="btn btn-primary">Ve más</a>

                </div>
              </div>
            </div>
            <div class="col-md-3 eventos">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title highlight-white">Eventos</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -126px;"></li>
                  </ul>
                </div>
                <div class="panel-body pt-0">
                  <?php query_posts( 'category_name=eventos&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>  
                  <?php $tempDate = get_field('fecha_evento'); ?>
                    <div class="events-calendar-placeholder mb-14">
                      <div class="day"><?php echo date_i18n('D', strtotime( $tempDate)); ?></div>
                      <div class="day-num"><?php echo date_i18n('d', strtotime( $tempDate)); ?></div>
                      <div class="month"><?php echo date_i18n('M', strtotime( $tempDate)); ?></div>
                    </div>
                    <h5><?php the_title(); ?></h5>
                    <p class="event-des light"><?php the_field('descripcion_evento'); ?></p>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Ve más</a>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
            <div id="opinion" class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title highlight-white">Tu opinión cuenta</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -168px;"></li>
                  </ul>
                </div>
                <div class="panel-body pt-0">
                  <?php query_posts( 'category_name=tu-opinion-cuenta&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>  
                    <?php the_content(); ?>
                    <div class="pull-left view-results">
                      <a href="http://www.redprolid.org/poll">Resultados >></a>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="mb-21">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled m-0">
                    <li class="title text-gray-darker highlight-white">Puntos de vista</li>
                    <li class="rule relative"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -210px;"></li>
                  </ul>
                </div>
                <?php query_posts( 'category_name=puntos-de-vista&posts_per_page=1' ); ?>	
								<?php while ( have_posts() ) : the_post(); ?>                      
                <div class="panel-body pt-0 pb-0">               
                  <div class="col-sm-5 pl-0">
                    <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
                  </div>
                  <div class="col-sm-7">
                    <h3 class="pt-0 medium mb-0"><?php the_title(); ?></h3>
                    <h5 class="medium mt-0"><?php the_field('profesion'); ?></h5>
                    <p class="light"><?php the_field('descripcion_punto_de_vista'); ?></p>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Lee aquí</a>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-custom highlight">  
	              <div class="panel-heading">
                    <ul class="list-unstyled m-0">
                      <li class="title highlight-campeonas pl-14 text-gray-darker">Campeonas</li>
                      <li class="rule relative"></li>
                      <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -252px;"></li>
                    </ul>
                  </div>             
                <?php query_posts( 'category_name=campeonas&posts_per_page=1' ); ?>	
								<?php while ( have_posts() ) : the_post(); ?>                   
                  <div class="panel-body pt-0 pb-0 pl-14 pr-14">
	                  <div class="col-sm-5 pl-0">
                    <img  src="<?php the_field('imagen_campeonas'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
                  </div>
	                  <div class="col-sm-7">
                    <h3 class="pt-0 medium mb-0"><?php the_title(); ?></h3>
                    <h5 class="medium mt-0"><?php the_field('posicion_campeona'); ?></h5>
                    <p class="light"><?php the_field('descripcion_campeona'); ?></p>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Entrevista completa</a>
                  </div> 
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-3 comentarios">
              <div class="panel-heading">
                <h3 class="title text-gray-darker">Comentarios recientes</h3>
              </div>
              <div class="panel-body">
                  <ul class="list-unstyled list-group list-group-custom">
                    <?php
                    $args = array(
                      'number' => '2'
                    );
                    $comments = get_comments($args);?>

                    <?php foreach ($comments as $comment) : ?>
                      <li class="mb-14">
                        <h5 class="medium"><?php echo($comment->comment_author);?></h5>
                        <p class="light"><?php echo($comment->comment_content);?></p>
                        <small class="date light"><?php echo($comment->comment_date);?> </small> 
                      </li>
                    <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
              <div class="panel panel-custom highlight hidden-sm-down">
                <div class="panel-body tall pt-0">
                  <div class="panel-heading">
                    <ul class="list-unstyled m-0">
                      <li class="title highlight-campeonas pl-14 text-gray-darker">Lo último en las redes</li>
                      <li class="rule relative"></li>
                      <li class="icon icon-lg" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid-social.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
                    </ul>
                  </div> 
                  <div class="row ml-14 mr-7">               
	                  <div class="col-sm-4 pl-0 pr-0">
										<a class="twitter-timeline" width="250" height="310"  href="https://twitter.com/redprolid" data-widget-id="510444695814537216">Tuiteado por @redprolid</a>  
                  </div>
	                  <div class="col-sm-4 pl-0 pr-0">
                  	<div class="fb-like-box bg-white" data-width="250" data-height="310" data-href="https://www.facebook.com/redprolid" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
                  </div>
	                  <div class="col-sm-4 pl-0 pr-0">
                    <div class="g-person" data-width="250" data-height="300" data-href="//plus.google.com/u/0/107403271684877473593" data-rel="author"></div>
                  </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>
