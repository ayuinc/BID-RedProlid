<?php
/*
Template Name: Enterate
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>

    <div class="mh-700">
      <section>
        <div class="container relative mh-140">
          <div class="absolute dtl-custom-heading">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" alt=""></div>
            <ul class="flex flex-row flex-space-between normalize-text pt-28">
              <li>
                <h1 style="color: #aeab8b;">Entérate</h1>
              </li>
              <li class="text-right">
                <a href="#" class="bold">¿Quieres compartir un recurso? &gt; &gt;</a>
              </li>
            </ul>
            <hr style="border-top: 3px dotted #aeab8b;">
          </div>
        </div>
        <div class="container with-shadow">
          <ul class="grid-list grid-list-centered grid-list-5 text-center">
            <li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-1.png" alt=""><p>De dónde podrás encontrar todos los recursos y artículos</p></li>
            <li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-2.png" alt=""><p>De las noticias y de los eventos que no podrás perderte </p></li>
            <li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-3.png" alt=""><p>De lo que otras mujeres, con intereses similares, piensan</p></li>
            <li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-4.png" alt=""><p>De diversos videos que podrás ver y compratir</p></li>
            <li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-5.png" alt=""><p>De cómo estar conectada con lo que pasa en la Red PROLID</p></li>
          </ul>
          <p class="lead">Imagina esta sección como una biblioteca en la que almacenamos todo tipo de recursos de nuestra red:  libros, legislación, investigaciones, blogs y noticias, al igual que material audiovisual como entrevistas o vídeos. Queremos también incluir material eminentemente práctico como compendios de buenas prácticas, guías para las mujeres en el sector público o estudios de casos concretos. Aspiramos a que aquí puedas encontrar todo lo que puede serte útil en el desarrollo y fortalecimiento de tu liderazgo en el sector público y la política.</p>
        </div>
        <div class="container">
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title">Recursos</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="col-sm-4 pt-35">
                <div class="enterate-search bg-panel p-14">
                  <h1>Búsqueda</h1>
                  <hr class="hr-gray-light">
                  <p class="lead">Filtra tu búsqueda y encuentra lo que necesitas:</p>
                  <?php get_search_form(); ?>
                  <div class="bookshelf"></div>
                </div>
              </div>
              <div class="col-sm-8 pt-70">
                <ul class="flex flex-row flex-space-between normalize-text">
                  <li>
                    <h3>Últimos recursos</h3>
                  </li>
                  <li>
                    <a href="<?php echo home_url('/'); ?>all-posts" class="bold see-more">Todos los recursos </a>
                  </li>
                </ul>
                <hr class="hr-gray-light">
                <ul class="list-unstyled">
                	<!-- Start the Loop. -->
									<?php if ( have_posts() ) : ?>
										<?php while ( have_posts() ) : the_post(); ?>
											<?php $myposts = get_posts(array('posts_per_page'=>'2')); ?>
											<?php foreach ($myposts as $post) : ?>
												<?php setup_postdata($post); ?>
			                  <li>
			                    <h5><?php the_title(); ?></h5>
			                    <p><?php the_content(); ?></p>
			                    <p><?php get_post_field('post_content', get_the_ID()); ?></p>
			                    <small class="date"><?php echo get_the_date(); ?></small> <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="text-primary">Lee más &gt;&gt;</a>
			                  </li>
			                 <?php endforeach; ?>
				            <?php endwhile; ?>
									<?php endif; ?>  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-panel mh-350">
        <div class="container">
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled mh-70">
                <li class="title bg-panel">Últimas noticias</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
              <a href="<?php echo home_url('/'); ?>noticias" class="see-more">Todas las noticias</a>
            </div>
            <div class="panel-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li> 
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <ul class="grid-list grid-list-3 item active">	
										<!-- Start the Loop. -->
										<?php if ( have_posts() ) : ?>
											<?php while ( have_posts() ) : the_post(); ?>
												<?php $myposts = get_posts(array('posts_per_page'=>'3','category'=>'noticias')); ?>
												<?php foreach ($myposts as $post) : ?>
													<?php setup_postdata($post); ?>
				                  <li>
			                      <div class="p-14 bg-white">
			                      	<?php if( get_field('imagen_noticias') ) { ?>
				                        <img src="<?php the_field('imagen_noticias'); ?>" alt="" class="img-responsive">
															<?php } else {?>
			                        	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive">
															<?php } ?>
			                        <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="h4 block mb-0"><?php the_title(); ?></a>
			                        <span class="help-block mt-0"><?php echo get_the_date(); ?></span>
			                        <p><?php the_field('descripcion_rapida_noticias');?></p>
			                        <div class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="see-more">Ve más</a></div>
			                      </div>
			                    </li>
				                 <?php endforeach; ?>
					            <?php endwhile; ?>
										<?php endif; ?>	
                  </ul>
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
      </section>
      <section>
        <div class="container">
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled mh-70">
                <li class="title">Eventos</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
              <a href="<?php echo home_url('/'); ?>eventos" class="see-more">Eventos aquí</a>
            </div>
            <div class="panel-body">
              <div class="col-sm-2"></div>
              <div class="col-sm-10">
                <div class="row">
                	<!-- Start the Loop. -->
										<?php if ( have_posts() ) : ?>
											<?php while ( have_posts() ) : the_post(); ?>
												<?php $myposts = get_posts(array('posts_per_page'=>'1','category'=>'eventos')); ?>
												<?php foreach ($myposts as $post) : ?>
													<?php setup_postdata($post); ?>
				                  <div class="col-sm-6">
				                    <ul class="flex flex-row flex-space-between normalize-text ph-ch-7">
				                      <li>
				                        <h3 class="lh-lg"><?php the_title(); ?></h3>
				                      </li>
				                      <li>
				                        <span><?php the_field('fecha_evento');?> <br>9:00 am <br>Corferias, pabellón 3</span>
				                      </li>
				                    </ul>
				                    <p><?php the_field('descripcion_evento');?></p>
				                    <div class="text-right">
				                      <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="see-more">Más información</a>
				                    </div>
				                  </div>
				                  <div class="col-sm-6">
				                    <div class="enterate-calendar box-shadow flex flex-row flex-space-between normalize-text">
				                      <div class="text-center ph-14 pv-28">
				                      	<?php $tempDate = get_field('fecha_evento'); ?>
				                        <h1 class="text-panel"><?php echo date('l', strtotime( $tempDate)); ?></h1>
				                        <h1 class="text-panel lead bold"><?php echo date('j', strtotime( $tempDate)); ?></h1>
				                        <h4 class="bold"><?php the_title(); ?></h4>
				                      </div>
				                      <div>
				                        <div class="calendar bg-panel">
				                          
				                        </div>
				                      </div>
				                    </div>
				                  </div>
												<?php endforeach; ?>
					            <?php endwhile; ?>
										<?php endif; ?>       
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-panel mh-350">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled mh-70">
                    <li class="title bg-panel">Campeonas</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
                  </ul>
                  <a href="#" class="see-more">Entrevistas</a>
                </div>
                <div class="panel-body mt-42">
                  <div class="bg-white clearfix">
                    <div class="col-sm-6 ph-14 pv-28">
                      <h3 class="m-0">Carolina Trivelli</h3>
                      <span>(Perú)</span><br>
                      <a href="#">@CaroTrivelli</a>
                      <p class="lead mt-14">Exministra de Desarrollo e Inclusión Social (2011-2013)<?php echo content_url('/'); ?>themes/redprolid</p>
                      <div class="text-right">
                        <a href="#" class="btn btn-primary">Leer más</a>
                      </div>
                    </div>
                    <div class="col-sm-6 pl-0-sm">
                      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/user.jpg" alt="" class="img-responsive">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title bg-panel">Videos</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
                  </ul>
                </div>
                <div class="panel-body pt-0">
                  <h3 class="m-0">Conoce la Red Prolid</h3>
                  <p>La red para mujeres líderes del sector público. </p>
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive">
                  <div class="text-right mt-21">
                    <a href="#" class="see-more">Más aquí</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container-sm">
          <div class="row">
            <div class="col-xs-3">
              <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/enterate-buzon.png" alt="" class="img-responsive">
            </div>
            <div class="col-xs-6">
              <h3 class="bold lh-lg">Suscríbete a nuestro boletín y descárgalo gratis </h3>
              <div class="text-right">
                <a href="#" class="see-more">Aquí</a>
              </div>
            </div>
            <div class="col-sm-3 flex flex-column flex-center flex-middle mh-140">
              <a href="#" class="btn btn-primary">Boletines</a>
            </div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>    