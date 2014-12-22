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
      <section class="mt-7 mb-21"> 
			  <div class="container relative mb-14">
			    <div class="row">
			      <div class="col-md-12">
			        <?php the_breadcrumb(); ?>
			      </div>
			    </div>
			    <div class="absolute dtl-custom-heading z-index-100">
			      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" alt="" width="80"></div>
			      <div class="clearfix">
			        <div class="col-md-6">
			          <h1 class="mt-14 ml--25 mb-0 brand-titular">Entérate</h1>
			        </div>
			        <div class="col-md-6 pt-28">
			          <nav class="text-right mb-0 mt-0">
			            <a href="<?php echo home_url('/'); ?>puntos-de-vista-list" class="light">¿Quieres compartir un recurso?</a> 
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
		          <ul class="grid-list grid-list-5 text-center">
		            <li class="pl-7 pr-7">
		            	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-1.png" alt="">
		            	<p class="brand-titular">De dónde podrás encontrar todos los recursos y artículos</p>
		            </li>
		            <li class="pl-7 pr-7">
			            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-2.png" alt="">
			            <p class="brand-titular">De las noticias y de los eventos que no podrás perderte </p>
		            </li>
		            <li class="pl-7 pr-7">
			            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-3.png" alt="">
			            <p class="brand-titular">De lo que otras mujeres, con intereses similares a los tuyos, piensan</p>
		            </li>
		            <li class="pl-7 pr-7">
		            	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-4.png" alt="">
		            	<p class="brand-titular">De diversos videos que podrás ver y compratir</p>
		            </li>
		            <li class="pl-7 pr-7">
		            	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-grid-5.png" alt="">
		            	<p class="brand-titular">De cómo estar conectada con lo que pasa en la Red PROLID</p>
		            </li>
		          </ul>
		        </div>
	        </div>
        </div>
      </section>
      
      <section class="mb-21">
        <div class="container">
	        <div class="row">
		        <div class="col-md-12">	      
		          <h3 class="light">Imagina esta sección como una biblioteca en la que almacenamos todo tipo de recursos de nuestra red:  libros, legislación, investigaciones, blogs y noticias, al igual que material audiovisual como entrevistas o vídeos. Queremos también incluir material eminentemente práctico como compendios de buenas prácticas, guías para las mujeres en el sector público o estudios de casos concretos. Aspiramos a que aquí puedas encontrar todo lo que puede serte útil en el desarrollo y fortalecimiento de tu liderazgo en el sector público y la política.</h3>
		        </div>
	        </div>
        </div>
      </section>
        
      <section class="mb-7 pb-14">
        <div class="container mb-56">
          <div class="panel panel-custom">
            <div class="panel-heading mb-0">
              <ul class="list-unstyled">
                <li class="title highlight-white text-gray-darker">Recursos</li>
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
                    <h3 class="medium">Últimos recursos</h3>
                  </li>
                  <li>
                    <a href="<?php echo home_url('/'); ?>all-posts" class="light">Todos los recursos >></a>
                  </li>
                </ul>
                <ul class="list-unstyled">
                	<!-- Start the Loop. -->
                	<?php query_posts( 'category_name=dtl-debates&posts_per_page=3' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>    
			                  <li class="mb-14">
			                    <h5 class="medium"><?php the_title(); ?></h5>
			                    <p><?php the_field('introduccion-debate'); ?></p>
			                    <small class="date">
			                    	<?php echo get_the_date(); ?> <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="text-primary">Lee más &gt;&gt;</a>
			                    </small>
			                  </li>
                        <hr>
			            <?php endwhile; ?>  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="bg-panel pt-14 mb-21">
        <div class="container">
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title text-gray-darker highlight-campeonas">Últimas noticias</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
	              <p class="text-right mr-56"><a href="<?php echo home_url('/'); ?>noticias" class="light">Todas las noticias >></a></p>
              </div>
            </div>            
            <div class="panel-body pt-0">
	            <div class="row">
		            <div class="col-md-12">
		              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <!-- Wrapper for slides -->
		                <div class="carousel-inner pl-35 pr-35">
		                  <ul class="grid-list grid-list-3 item active pl-7">	
												<!-- Start the Loop. -->
												<?php if ( have_posts() ) : ?>
		                      <?php query_posts( array( 'category_name' => 'noticias', 'posts_per_page' => 3 ) ); ?>
													<?php while ( have_posts() ) : the_post(); ?>
						                  <li class="pl-14 pr-14">
					                      <div class="p-14 bg-white">
					                      	<?php if( get_field('imagen_noticias') ) { ?>
						                        <img src="<?php the_field('imagen_noticias'); ?>" alt="" class="img-responsive">
																	<?php } else {?>
					                        	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive">
																	<?php } ?>
					                        <a href="<?php echo get_permalink( get_the_ID() ); ?>"><h3 class="medium mt-7 mb-0 pb-0"><?php the_title(); ?></h3></a>
					                        <small><?php echo get_the_date(); ?></small>
					                        <p class="mt-14"><?php the_field('descripcion_rapida_noticias');?></p>
					                        <small class="vermas"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve más >></a></small>
					                      </div>
					                    </li>
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
          </div>
        </div>
      </section>
      
      <section class="mb-21">
        <div class="container">
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title title text-gray-darker highlight-white">Eventos</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
	              <p class="text-right"><a href="<?php echo home_url('/'); ?>eventos" class="light">Eventos aquí >></a></p>
              </div>
            </div>             
            <div class="panel-body" style="padding: 0; margin: 21px 0;">
            <!-- Start the Loop. -->
            <?php if ( have_posts() ) : ?>
              <?php query_posts( array( 'category_name' => 'eventos', 'posts_per_page' => 1 ) ); ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <?php $tempDate = get_field('fecha_evento'); ?>
                <div class="row">
	                <div class="col-md-6 pr-21">
		                <div class="row">
			                <div class="col-md-4">
				                <img src="<?php the_field('imagen_evento');?>" width="100%">
			                </div>
			                <div class="col-md-8">
				                <h3 class="medium mb-0"><?php the_title(); ?></h3>
				                <small><?php echo date_i18n('F', strtotime( $tempDate)); ?> <?php echo date('j', strtotime( $tempDate)); ?>, <?php echo date('g', strtotime( $tempDate)); ?> <?php echo date('a', strtotime( $tempDate)); ?>- Corferias, pabellón 3</small>
				                <p class="mt-14"><?php the_field('descripcion_evento');?></p>
				                <p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="light">Más información >></a></p>
			                </div>
		                </div>
	                </div>
	                <div class="col-md-6 box-shadow pl-0 pr-0 enterate-calendar">
		                <div class="row">
			                <div class="col-md-6 p-21">
	                      <h2 class="text-brown text-center medium"><?php echo date_i18n('l', strtotime( $tempDate)); ?></h2>
	                      <p class="text-brown text-center mt-0 mb-0"><?php echo date('j', strtotime( $tempDate)); ?></p>
	                      <h4 class="text-center light"><?php the_title(); ?></h4>
			                </div>
			                <div class="col-md-6 pl-0 pr-0">
												<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/calendar.png" alt="" width="93%">
			                </div>
		                </div>
	                </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>  
            </div>
          </div>
        </div>
      </section>
      
      <section class="bg-panel pt-7 mb-21">
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
	                	<a href="<?php echo home_url('/'); ?>campeonas" class="light">Entrevistas >></a>
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
			                        <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-primary">Leer más</a>
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
                  <h3 class="mediumt mb-0 pb-0">Conoce la Red Prolid</h3>
                  <p>La red para mujeres líderes del sector público. </p>
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive">
                  <div class="text-right mt-21">
                    <p class="text-right"><a href="#" class="light">Más aquí >></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="pt-7">
        <div class="container-sm">
          <div class="row">
            <div class="col-xs-3">
              <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/enterate-buzon.png" alt="" class="img-responsive">
            </div>
            <div class="col-xs-6">
              <h3 class="medium">Suscríbete a nuestro boletín y descárgalo gratis </h3>
              <div class="text-right">
                <a href="#" class="light" data-toggle="modal" data-target="#mailChimp">Aquí >></a>
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