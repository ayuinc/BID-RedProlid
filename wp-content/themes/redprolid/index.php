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

    <div class="mh-700">
      <section id="hero-unit">
        <div class="container pv-21">
          <div class="gallery js-flickity hidden-xs hidden-sm hidden-md bg-panel border-radius p-21 bg-img-block bg-img-block-top bg-img-block-right" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-network-right.png);" data-flickity-options='{ "cellAlign": "left", "contain": true, "wrapAround": true, "autoPlay": 3000 }'>
            <?php query_posts( 'category_name=video-homepage&posts_per_page=5' ); ?>  
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="grid-list-item gallery-cell clearfix minh-350" style="width: 100%;">
                <div class="col-sm-7 minh-350 flex-middle">
                  <div class="embed-responsive embed-responsive-16by9">
                    <?php $youtube = get_field('id_video_youtube_homepage'); ?>
                    <?php if ($youtube!='') { ?>
                      <iframe class="embed-responsive-item" width="100%" height="420" src="//www.youtube.com/embed/<?php the_field('id_video_youtube_homepage'); ?>?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <?php } ?>
                    <?php $vimeo = get_field('id_video_vimeo_homepage'); ?>
                    <?php if ($vimeo!='') { ?>
                      <iframe src="//player.vimeo.com/video/<?php the_field('id_video_vimeo_homepage'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="420" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <?php } ?>
                    <?php $imagen_campeonas = get_field('imagen_campeonas'); ?>
                    <?php if ($imagen_campeonas!='') { ?>
                      <img src="<?php the_field('imagen_campeonas'); ?>" alt="" width="" height="420">
                    <?php } ?>                     
                  </div>
                </div>
                <div class="col-sm-5 minh-350 flex-middle-end">
                  <div class="slide-content relative">
                    <h3 class="medium text-gray-dark"><span class="uppercase"><?php the_title(); ?></h3>
                    <?php $descripcion_home_campeonas = get_field('descripcion_home_campeonas'); ?>
                    <?php if ($descripcion_home_campeonas!='') { ?>
                    	<p><?php the_field('descripcion_home_campeonas'); ?></p>
                    <?php } ?>
                    <hr class="hr-white">
                    <div class="text-right">
                      <?php $link_contenido_homepage = get_field('link_contenido_homepage'); ?>
                      <?php if ($link_contenido_homepage!='') { ?>
                        <a href="<?php the_field('link_contenido_homepage'); ?>" class="btn btn-outline btn-white">Más aquí</a>
                      <?php } else  { ?>
                        <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-outline btn-white">Más aquí</a>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?> 
          </div>
          <h2 class="header-text text-center pt-49 hidden-sm hidden-xs"><strong><span class="text-secondary">La Red PROLID</span> es una plataforma para conectar, promover intercambios y aprendizajes</strong><br> <span class="light">entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo<br>en el sector público en Latinoamérica</span></h2>
          
          <h2 class="header-text text-center hidden-lg"><strong><span class="text-secondary">La Red PROLID</span> es una plataforma para conectar, promover intercambios y aprendizajes</strong><br> <span class="light">entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo<br>en el sector público en Latinoamérica</span></h2>
          
          <?php if ( is_user_logged_in() ) {  } else { ?>
          <div class="row hidden-lg">
            <div class="col-xs-2"></div>
            <div class="col-xs-8 text-center pt-14">
              <a href="<?php echo home_url('/'); ?>registrate"><button class="btn-custom-registrate btn-md btn btn-primary">Regístrate en la Red</button></a> 
              <a href="<?php echo home_url('/'); ?>login-movil"><button class="btn-custom-iniciasesion bg-white border-top-primary border-right-primary  border-bottom-primary border-left-primary btn btn-white text-primary mt-14-xs">Inicia Sesión</button></a>
            </div>
            <div class="col-xs-2"></div>
          </div>
          <?php } ?>
        </div>
      </section>
      <section class="dtl-home pv-14">
        <div class="container ph-70-sm">
          <div class="text-center">
            <h2>Desarrolla tu liderazgo</h2>
            <h5 class="light">Imagina tu trayectoria profesional y/o política como una carrera deportiva. Necesitas tener claro el rumbo que has de tomar, y para ello te servirán de ayuda las redes sociales y las tecnologias de la información y la comunicación...</h5>
          </div>
          <div class="pb-14">
          <!-- DTL CAROUSEL -->
          <?php get_template_part( 'include', 'dtl-carousel' ); ?>
          </div>
        </div>
      </section>
      <section class="widgets pv-14">
        <div class="container">
          <div class="row">
            <div class="col-md-3 hidden-md-down">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title highlight-white">Concursos</li>
                    <li class="rule"></li>
                    <li class="icon" data-href="/concursos-proximamente/" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -42px;"></li>
                  </ul>
                </div>
                <div class="panel-body highlight">
                	<?php //query_posts( 'category_name=concursos&posts_per_page=1' ); ?>	
									<?php //while ( have_posts() ) : the_post(); ?>                 
                    <img src="/wp-content/uploads/2014/10/Screen-Shot-2014-10-14-at-10.47.19-PM.png" alt="" class="img-responsive mb-14">
                    <h5>¿Quieres ganar premios que te ayuden en tu desarrollo profesional? </h5>
                    <p class="light">Participa en los concursos de la Red aportando ideas, relatando tus experiencias y compartiendo tu creatividad.</p>
                    <a href="/concursos-proximamente/" class="btn btn-primary">Más información</a>
                  <?php //endwhile; ?>
                </div>
              </div>
            </div>
            <div class="col-md-3 noticias">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title highlight-white">Noticias</li>
                    <li class="rule"></li>
                    <li class="icon" data-href="/noticias" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/noticias-sml.png); background-repeat: no-repeat;"></li>
                  </ul>
                </div>
                <div class="panel-body">

                    <ul class="noticias-post list-unstyled list-group list-group-custom">
                    	<?php query_posts( 'category_name=noticias&posts_per_page=3' ); ?>	
											<?php while ( have_posts() ) : the_post(); ?>                    
                      <li class="mb-14">
                        <h5 class="light"><?php the_title(); ?></h5>
		                    <?php $publicacion = get_field('publicacion_noticias'); ?>
		                    <small class="date light">
		                    	<?php echo get_the_date('j F, Y'); ?><?php if ($publicacion!='') { ?>, <a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a><?php } ?> | <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="text-primary p">Lee más</a>
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
                    <li class="icon" data-href="/eventos" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -126px;"></li>
                  </ul>
                </div>
                <div class="panel-body pt-0">
                  <?php query_posts( 'category_name=evento-destacado&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>  
                  <?php $tempDate = get_field('fecha_inicio_evento'); ?>
                    <div class="events-calendar-placeholder mb-14">
                      <div class="day"><?php echo date_i18n('D', strtotime( $tempDate)); ?></div>
                      <div class="day-num"><?php echo date_i18n('d', strtotime( $tempDate)); ?></div>
                      <div class="month mt-7 ml-7"><?php echo date_i18n('M', strtotime( $tempDate)); ?></div>
                    </div>
                    <h5 class="title-news"><?php the_title(); ?></h5>
                    <!--<p class="event-des light"><?php the_field('descripcion_evento'); ?></p>-->
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
                    <li class="icon" data-href="/tu-opinion-cuenta" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -168px;"></li>
                  </ul>
                </div>
                <div class="panel-body pt-0 hide-poll-results-anchor">
                  <?php query_posts( 'category_name=tu-opinion-cuenta&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>  
										<?php $codigo_de_la_encuesta = get_field('codigo_de_la_encuesta'); ?> 
				            <?php echo do_shortcode('[yop_poll id="'.$codigo_de_la_encuesta.'"]'); ?>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="campeonas-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 p-14">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled m-0">
                    <li class="title text-gray-darker highlight-white">Puntos de vista</li>
                    <li class="rule relative"></li>
	                  <?php query_posts( 'category_name=puntos-de-vista&posts_per_page=1' ); ?>	
										<?php while ( have_posts() ) : the_post(); ?>  
                    <li class="icon" data-href="<?php echo get_permalink( get_the_ID() ); ?>" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -210px;"></li>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <?php query_posts( 'category_name=puntos-de-vista&posts_per_page=1' ); ?>	
								<?php while ( have_posts() ) : the_post(); ?>                      
                <div class="panel-body pt-0 pb-0">               
                  <div class="col-sm-5 text-center-sm punto-de-vista-img">
                    <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="<?php the_title(); ?>" style="width:100%;">
                  </div>
                  <div class="col-sm-7">
                    <h3 class="pt-0 medium mb-0"><?php the_title(); ?></h3>
                    <h5 class="medium mt-0"><?php the_field('profesion'); ?></h5>
                    <p class="light"><?php the_field('descripcion_punto_de_vista'); ?></p>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Lee más</a>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
            <div class="col-md-6 campeonas-panel-home bg-panel-custom bg-panel mb-14-xs">
              <div class="panel panel-custom">
	              <div class="panel-heading">
                    <ul class="list-unstyled m-0">
                      <li class="title highlight-campeonas pl-14 text-gray-darker">Campeon@s</li>
                      <li class="rule relative"></li>
			                <?php query_posts( 'category_name=campeonas&posts_per_page=1' ); ?>	
											<?php while ( have_posts() ) : the_post(); ?>                       
                      <li class="icon" data-href="<?php echo get_permalink( get_the_ID() ); ?>"  style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -252px;"></li>
                      <?php endwhile; ?>
                    </ul>
                  </div>             
                <?php query_posts( 'category_name=campeona-destacada&posts_per_page=1' ); ?>	
								<?php while ( have_posts() ) : the_post(); ?>                   
                  <div class="panel-body panel-body-custom">
	                  <div class="col-sm-5">
			                <?php $imagen_campeona = get_field('imagen_campeonas'); ?>
			                <?php if ($imagen_campeona!='') { ?>
	                    	<img  src="<?php the_field('imagen_campeonas'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
	                    <?php } ?>
			                <?php $video = get_field('video_campeonas'); ?>
			                <?php if ($video!='') { ?>
	                    	<iframe class="embed-responsive-item" width="100%" height="209" src="//www.youtube.com/embed/<?php the_field('video_campeonas'); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	                    <?php } ?>
			                <?php $video_vimeo = get_field('video_vimeo_campeonas'); ?>
			                <?php if ($video_vimeo!='') { ?>
		                    <iframe src="//player.vimeo.com/video/<?php the_field('video_vimeo_campeonas'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="551" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	                    <?php } ?>	                    
											<small><?php the_field('fuente_imagen_campeonas'); ?></small>
                  	</div>
	                  <div class="col-sm-7 pr-0">
                    <h3 class="pt-0 medium mb-0 pb-0"><?php the_title(); ?></h3>
                    <small><?php $tempDate = get_field(fecha_de_la_entrevista); ?>
											<!--<?php //echo date_i18n('j', strtotime( $tempDate)); ?> de <?php //echo date_i18n('F', strtotime( $tempDate)); ?> de -->
											<?php echo date_i18n('Y', strtotime( $tempDate)); ?>
										</small>
                    <p class="light-italic">
							        <em><?php the_field('posicion_campeona'); ?></em>
                    </p>
                    <p>
							        <strong><?php the_field('descripcion_home_campeonas'); ?></strong>
				            </p>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary mb-21-xs">Entrevista completa</a>
                  </div> 
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pv-14 hidden-md-down">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-12 comentarios">
              <div class="panel-heading">
                <h3 class="title text-gray-darker pt-14">Comentarios recientes</h3>
              </div>
              <div class="panel-body">
                  <ul class="list-unstyled list-group list-group-custom">
                    <?php
                    $args = array(
                      'number' => '3',
                      'status' => 'approve'
                    );
                    $comments = get_comments($args);?>

                    <?php foreach ($comments as $comment) : ?>
                      <li class="mb-14">
                        <p class="light" id="home-comment"><a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo get_the_title( $comment->comment_post_ID ); ?></a></p>
                        <small class="date light"><?php echo(substr( $comment->comment_content, 0, 250 )); ?></small></br>
                        <small class="date light"><?php echo($comment->comment_date);?> 
												<?php //echo($comment->comment_author);?>
                        <?php
                          $categories = get_the_category($comment->comment_post_ID);
                          $cat_name = $categories[0]->name;
                        ?>
                        | <a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo $cat_name; ?></a>
												</small> 
                      </li>
                    <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 hidden-md bg-panel ph-14">
              <div class="panel panel-custom hidden-sm-down">
                <div class="panel-body tall pt-14">
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
