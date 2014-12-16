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
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="slider-container text-center mt-21">
                <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
              </div>
              <h2 class="text-center mt-21"><strong><span class="text-secondary">La Red PROLID</span> es una plataforma para conectar, promover intercambios y aprendizajes</strong><br> <span class="light">entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo en el sector público en Latinoamérica</span></h2>
            </div>
          </div>
        </div>
      </section>
      <section class="dtl-home mb-21">
        <div class="container">
          <div class="panel panel-custom panel-highlight-silver">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title">Desarrolla tu liderazgo</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-nav-main-menu.png); background-repeat: no-repeat; background-position: 0px -85px;"></li>
              </ul>
            </div>
            <div class="panel-body panel-body-shadow pt-14 pl-14 pr-14">
              <div class="col-sm-4 pt-0">
                <h5 class="medium mb-14">Imagina tu trayectoria profesional y/o política como una carrera deportiva. Necesitas tener claro el rumbo que has de tomar, y para ello te servirán de ayuda las redes sociales y las tecnologias de la información y la comunicación...</h5>
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
          </div>
        </div>
      </section>
      <section class="widgets mb-21">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Concursos</li>
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
                    <li class="title">Noticias</li>
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
                        <small class="date light">
                        	<?php the_time('d-m-Y') ?><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="text-primary p ml-7">Lee más &gt;&gt;</a>
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
                    <li class="title">Eventos</li>
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
                    <li class="title">Tu opinión cuenta</li>
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
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled m-0">
                    <li class="title pt-7 text-gray-darker">Puntos de vista</li>
                    <li class="rule relative" style="top: 22px;"></li>
                    <li class="icon" style="top: 1px; background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -210px;"></li>
                  </ul>
                </div>
                <?php query_posts( 'category_name=puntos-de-vista&posts_per_page=1' ); ?>	
								<?php while ( have_posts() ) : the_post(); ?>                      
                <div class="panel-body">               
                  <div class="col-sm-5">
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
              <div class="panel panel-custom  highlight">               
                <?php query_posts( 'category_name=campeonas&posts_per_page=1' ); ?>	
								<?php while ( have_posts() ) : the_post(); ?>                   
                  <div class="panel-heading">
                    <ul class="list-unstyled m-0">
                      <li class="title pl-14" style="background:#ebeade; padding-top: 3px;">Campeonas</li>
                      <li class="rule relative" style="top: 19px;"></li>
                      <li class="icon" style="top: -7px; background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -252px;"></li>
                    </ul>
                  </div>
                  <div class="col-sm-5">
                    <img  src="<?php the_field('imagen_campeonas'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
                  </div>
                  <div class="col-sm-7">
                    <h3 class="pt-0 medium mb-0"><?php the_title(); ?></h3>
                    <h5 class="medium mt-0"><?php the_field('posicion_campeona'); ?></h5>
                    <p class="light"><?php the_field('descripcion_campeona'); ?></p>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Entrevista completa</a>
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
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Comentarios recientes</li>
                  </ul>
                </div>
                <div class="panel-body pt-0">
                  <div class="col-sm-12">
                    <ul class="list-unstyled list-group list-group-custom">
                    <?php
                    $args = array(
                      'number' => '3'
                    );
                    $comments = get_comments($args);?>

                    <?php foreach ($comments as $comment) : ?>
                      <li>
                        <h5><?php echo($comment->comment_author);?></h5>
                        <p><?php echo($comment->comment_content);?></p>
                        <small class="date"><?php echo($comment->comment_date);?> </small> 
                        <!--<a href="<?php echo get_permalink( $comment->comment_post_ID ); ?>" class="text-primary small">Lee más &gt;&gt;</a>-->
                      </li>
                    <?php endforeach;?>
                    </ul>
                    <!--<div class="text-right"><a href="#" class="btn btn-primary">Ver más</a></div>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="panel panel-custom highlight">
                <div class="panel-body tall pt-0">
                  <div class="panel-heading">
                    <ul class="list-unstyled m-0">
                      <li class="title pl-14" style="background:#ebeade; padding-top: 12px">Lo último en las redes</li>
                      <li class="rule relative" style="top: 27px;"></li>
                      <li class="icon icon-lg" style="top: 1px; background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid-social.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
                    </ul>
                  </div>                
                  <div class="col-sm-4">
										<a class="twitter-timeline" width="250" height="520"  href="https://twitter.com/redprolid" data-widget-id="510444695814537216">Tuiteado por @redprolid</a>  
                  </div>
                  <div class="col-sm-4">
                  	<div class="fb-like-box" data-width="250" data-height="520" data-href="https://www.facebook.com/redprolid" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
                  </div>
                  <div class="col-sm-4">
                    <div class="g-person" data-width="250" data-height="520" data-href="//plus.google.com/u/0/107403271684877473593" data-rel="author"></div>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>
