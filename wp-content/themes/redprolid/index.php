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
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="slider-container text-center">
                <!--<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/home-slider.png" class="img-responsive">-->
                <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
              </div>
              <h3 class="text-center"><strong><span class="text-secondary">La Red PROLID</span> es una plataforma para conectar, promover intercambios y aprendizajes</strong><br> <span class="light">entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo en el sector público en Latinoamérica</span></h3>
            </div>
          </div>
        </div>
      </section>
      <section id="dtl-home">
        <div class="container">
          <div class="panel panel-custom panel-highlight-silver">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title">Desarrolla tu liderazgo</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="panel-body panel-body-shadow">
              <div class="col-sm-4 pt-35">
                <p class="light lh-lg">Imagina tu trayectoria profesional y/o política como una carrera deportiva. Necesitas tener claro el rumbo que has de tomar, y para ello te servirán de ayuda las redes sociales y las tecnologias de la información y la comunicación...</p>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo" class="btn btn-primary">Más aquí</a>
              </div>
              <div class="col-sm-8">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/home-dtl-path.png" alt="" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-custom panel-highlight">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Concursos</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -42px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                	<?php query_posts( 'category_name=concursos&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>                 
                  <div class="col-sm-12">
                    <img src="<?php the_field('imagen_concurso'); ?>" alt="" class="img-responsive">
                    <h5><?php the_title(); ?></h5>
                    <small class="help-block"><?php $date = DateTime::createFromFormat('Ymd', get_field('fecha_concurso'));
echo $date->format('F jS, Y'); ?></small>
                    <p><?php the_field('descripcion_concurso'); ?></p>
                    <div class="text-right"><a href="#" class="btn btn-primary">Más información</a></div>
                  </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Noticias</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -84px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-12">
                    <ul class="list-unstyled list-group list-group-custom">
                    	<?php query_posts( 'category_name=noticias&posts_per_page=3' ); ?>	
											<?php while ( have_posts() ) : the_post(); ?>                    
                      <li>
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_field('descripcion_rapida_noticias'); ?></p>
                        <small class="date"><?php the_time('F jS, Y') ?></small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
											<?php endwhile; ?>                     
                    </ul>
                    <div class="text-right"><a href="#" class="btn btn-primary">Ver más</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Eventos</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -126px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <?php query_posts( 'category_name=eventos&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>  
                  <div class="col-sm-12">
                    <div class="events-calendar-placeholder">
                      <div class="day"><?php $date = DateTime::createFromFormat('Ymd', get_field('fecha_evento'));
echo $date->format('D'); ?></div>
                      <div class="day-num"><?php $date = DateTime::createFromFormat('Ymd', get_field('fecha_evento'));
echo $date->format('d'); ?></div>
                      <div class="month"><?php $date = DateTime::createFromFormat('Ymd', get_field('fecha_evento'));
echo $date->format('M'); ?></div>
                    </div>
                    <h5 class="text-center"><?php the_title(); ?></h5>
                    <p class="text-center"><?php the_field('descripcion_evento'); ?></p>
                    <div class="text-right"><a href="#" class="btn btn-primary">Ver más</a></div>
                  </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Tu opinión cuenta</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -168px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <?php query_posts( 'category_name=tu-opinion-cuenta&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>  
                  <div class="col-sm-12">
                    <?php the_content(); ?>
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
                  <ul class="list-unstyled">
                    <li class="title">Puntos de vista</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -210px;"></li>
                  </ul>
                </div>
                <?php query_posts( 'category_name=puntos-de-vista&posts_per_page=1' ); ?>	
								<?php while ( have_posts() ) : the_post(); ?>                      
                <div class="panel-body">               
                  <div class="col-sm-5">
                    <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
                  </div>
                  <div class="col-sm-7">
                    <h4><?php the_title(); ?></h4>
                    <p class="light lh-lg"><?php the_field('descripcion_punto_de_vista'); ?></p>
                    <div class="text-right"><a href="#" class="btn btn-primary">Lee más</a></div>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-custom panel-highlight">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Campeonas</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -252px;"></li>
                  </ul>
                </div>
                <?php query_posts( 'category_name=campeonas&posts_per_page=1' ); ?>	
								<?php while ( have_posts() ) : the_post(); ?>                   
                <div class="panel-body">
                  <div class="col-sm-5">
                    <img  src="<?php the_field('imagen_campeonas'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
                  </div>
                  <div class="col-sm-7">
                    <h4><?php the_title(); ?></h4>
                    <h5><?php the_field('posicion_campeona'); ?></h5>
                    <p class="light-italic lh-lg"><?php the_field('descripcion_campeona'); ?></p>
                    <div class="text-right"><a href="#" class="btn btn-primary">Entrevista completa</a></div>
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
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Comentarios recientes</li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-12">
                    <ul class="list-unstyled list-group list-group-custom">
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                    </ul>
                    <div class="text-right"><a href="#" class="btn btn-primary">Ver más</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="panel panel-custom panel-highlight">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Lo último en las redes</li>
                    <li class="rule"></li>
                    <li class="icon icon-lg" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid-social.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-4">
                  	<div class="fb-like-box" data-width="250" data-height="520" data-href="https://www.facebook.com/redprolid" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
                  </div>
                  <div class="col-sm-4">
										<a class="twitter-timeline" width="250" height="520"  href="https://twitter.com/redprolid" data-widget-id="510444695814537216">Tweets by @redprolid</a>  
                  </div>
                  <div class="col-sm-4">
                    <div class="g-person" data-width="250" height="520" data-href="//plus.google.com/u/0/107403271684877473593" data-rel="author"></div>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>