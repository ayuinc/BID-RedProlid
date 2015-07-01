<?php
/*
Template Name: DTL-Seccion
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
	    <section>
		    <div class="container">
			    <?php the_breadcrumb(); ?>
		    </div>
	    </section>	    
      <section id="dtl-adonde-vamos">
        <div class="container relative dtl-content">
        	<?php 
					    $uri = $_SERVER['REQUEST_URI'];
					    $elements = explode('/', $uri) ;
					    $segment1 = $elements[1] ; // For the first segment
					    $segment2 = $elements[2] ; //For the 2nd segment
					    $segment3 = $elements[3] ; //For the 3rd segment
					?> 
         <!-- Start the Loop. -->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="clearfix sub-header">
		          <!-- <div class="dtl-custom-heading"> -->

							<?php if ($segment2 == "a-donde-vamos") : ?>
								<div class="col-sm-1 col-xs-3">
				          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-adonde-vamos-icon.png"></div>
				        </div>
				        <div class="col-sm-5 col-xs-9 pl-21">
				          <h1 class="title-a-donde-vamos"><?php the_title(); ?></h1>
				          <h4 class="medium"><?php the_field('subtitulo'); ?></h4>
				        </div>
		          </div>
		          <div class="pb-21 clearfix">
		          	<img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative ml-56" width="250px" height="auto">
		          	<h3 class=" pt-14-100 light color-gray text-justify"><?php the_field('contenido-dtl-seccion'); ?></h3>
		          </div>
							<?php endif; ?>
							<?php if ($segment2 == "agenda-de-genero") : ?>
								<div class="col-sm-1 col-xs-3">
				          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-agenda-genero-icon.png"></div>
				        </div>
				        <div class="col-sm-5 col-xs-9 pl-21">
				          <h1 class="title-agenda-de-genero"><?php the_title(); ?></h1>
				          <h4 class="medium"><?php the_field('subtitulo'); ?></h4>
				        </div>
				      </div>
		          <div class="pb-21 clearfix">
		          	<img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative ml-56" width="250px" height="auto">
		          	<h3 class=" pt-14-100 light color-gray text-justify"><?php the_field('contenido-dtl-seccion'); ?></h3>
		          </div>
							<?php endif; ?>
							<?php if ($segment2 == "carrera-de-vallas") : ?>
								<div class="col-sm-1 col-xs-3">
				          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-carrera-vallas-icon.png"></div>
				        </div>
				        <div class="col-sm-5 col-xs-9 pl-21">
				          <h1 class="title-carrera-de-vallas"><?php the_title(); ?></h1>
				        </div>
				      </div>
		          <div class="pb-21 clearfix">
		          	<img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative ml-56" width="250px" height="auto">
		          	<h3 class=" pt-14-100 light color-gray text-justify"><?php the_field('contenido-dtl-seccion'); ?></h3>
		          </div>
							<?php endif; ?>
							<?php if ($segment2 == "la-pinta-no-es-lo-de-menos") : ?>
								<div class="col-sm-1 col-xs-3">
				          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-la-pinta-icon.png"></div>
				        </div>
				        <div class="col-sm-6 col-xs-9">
				          <h1 class="title-la-pinta-no-es-lo-de-menos"><?php the_title(); ?></h1>
				        </div>
								<div class="col-sm-5 col-xs-12">
									<nav class="text-right">
										<a class="btn btn-default btn-pistas" href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas-2/">Pistas</a>
									</nav>
								</div>
				      </div>
		          <div class="pb-21 clearfix">
		          	<img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative ml-56" width="250px" height="auto">
		          	<h3 class=" pt-14-100 light color-gray text-justify"><?php the_field('contenido-dtl-seccion'); ?></h3>
		          </div>
							<?php endif; ?>
							<?php if ($segment2 == "listas-para-la-politica") : ?>
								<div class="col-sm-1 col-xs-3">
				          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-listas-politica-icon.png"></div>
				        </div>
				        <div class="col-sm-5 col-xs-9 pl-21">
				          <h1 class="title-listas-para-la-politica"><?php the_title(); ?></h1>
				          <h4 class="medium"><?php the_field('subtitulo'); ?></h4>
				        </div>
				      </div>
		          <div class="pb-21 clearfix">
		          	<img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative ml-56" width="250px" height="auto">
		          	<h3 class=" pt-14-100 light color-gray text-justify"><?php the_field('contenido-dtl-seccion'); ?></h3>
		          </div>
							<?php endif; ?>
							<?php if ($segment2 == "nivelando-la-cancha") : ?>
								<div class="col-sm-1 col-xs-3">
				          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-nivelando-cancha-icon.png"></div>
				        </div>
				        <div class="col-sm-5 col-xs-9 pl-21">
				          <h1 class="title-nivelando-la-cancha"><?php the_title(); ?></h1>
				          <h4 class="medium"><?php the_field('subtitulo'); ?></h4>
				        </div>
				      </div>
				      <div class="pb-21 clearfix">
		          	<img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right ml-21 mr-21 relative pt-21" width="300px" height="auto">
		          	<h3 class=" pt-14-100 light color-gray text-justify"><?php the_field('contenido-dtl-seccion'); ?></h3>
		          </div>
							<?php endif; ?>
							<?php if ($segment2 == "pistas-2") : ?>
								<div class="col-sm-1 col-xs-3">
				          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas-icon.png"></div>
				        </div>
				        <div class="col-sm-5 col-xs-9 pl-21">
				          <h1 class="title-pistas-2"><?php the_title(); ?></h1>
				          <h4 class="medium"><?php the_field('subtitulo'); ?></h4>
				        </div>
				        <div class="col-sm-6 col-xs-12">
								</div>
				      </div>
		          <div class="pb-21 clearfix">
		          	<img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative ml-56" width="250px" height="auto">
		          	<h3 class=" pt-14-100 light color-gray text-justify"><?php the_field('contenido-dtl-seccion'); ?></h3>
		          </div>		          
							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>        
        </div>
      </section>
      <section class="sumate-al-debate">
        <div class="container pb-0">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate.png" alt="" class="ribbon">
          <div class="row">
            <div class="col-sm-8 pt-70">
							<?php get_template_part( 'single-section' ); ?>
            </div>
            <div class="col-sm-4">
              <div class="debates-anteriores">
                <h4 class="medium text-gray-darker">¿Quieres ver los debates anteriores?</h4>
                <div class="text-right">
                  <a href="/debates-anteriores?categoria=<?php echo $segment2; ?>" class="btn btn-primary">Archivos</a>
                </div>
              </div>
              <div class="pl-21 pr-21">
	            	<h4 class="mt-35 mb-14 medium text-gray-darker">Lo último en las redes</h4>
	            	<div class="mb-14">
									<div class="fb-like-box" data-width="100%" data-height="310" data-href="https://www.facebook.com/redprolid" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
	            	</div>
	            	<div class="mb-14">
									<a class="twitter-timeline" width="298" height="310"  href="https://twitter.com/redprolid" data-widget-id="510444695814537216">Tuiteado por @redprolid</a> 
	            	</div>
	            	<div class="mb-14"> 
									<div class="g-person" data-width="100%" data-height="310" data-href="//plus.google.com/u/0/107403271684877473593" data-rel="author"></div>
	            	</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--NAVIMAGEN-->
    <?php //get_template_part( 'include', 'navimage' ); ?>    
    <section class="dtl-home pv-28">
      <div class="container ph-70-sm">
	      <h3 class="text-center">Desarrolla tu liderazgo</h3>
	      <div class="pb-14">
        <!-- DTL CAROUSEL -->
        <?php get_template_part( 'include', 'dtl-carousel' ); ?>
	      </div>
      </div>
    </section>    
<?php get_footer(); ?>    