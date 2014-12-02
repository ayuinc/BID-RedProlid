<?php
/*
Template Name: DTL-Seccion
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
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
		          <div class="absolute dtl-custom-heading">
							<?php if ($segment2 == "a-donde-vamos") : ?>
		            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-adonde-vamos-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #f05f6a;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #aaa; width: 830px; margin-right: 178px;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "agenda-de-genero") : ?>
		            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-agenda-genero-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #c02f73;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #aaa; width: 830px; margin-right: 178px;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "carrera-de-vallas") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-carrera-vallas-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #9a205c;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #aaa; width: 830px; margin-right: 178px;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative" width="560px" height="auto">							
							<?php endif; ?>
							<?php if ($segment2 == "la-pinta-no-es-lo-de-menos") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-la-pinta-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #007c8d;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #aaa; width: 830px; margin-right: 178px;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "listas-para-la-politica") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-listas-politica-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #015a71;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #aaa; width: 830px; margin-right: 178px;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "nivelando-la-cancha") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-nivelando-cancha-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #599a97;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #aaa;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-left mr-21 img-circle relative pt-70 mt-42" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "pistas-2") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #007c8d;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #aaa; width: 830px; margin-right: 178px;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle relative ml-56" width="460px" height="auto">	
							<?php endif; ?>
		          <p class="text-justify pt-14-100 lead" style="color: #aaa;"><?php the_field('contenido-dtl-seccion'); ?></p>
						<?php endwhile; ?>
					<?php endif; ?>        
        </div>
      </section>
      <section class="sumate-al-debate">
        <div class="container">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate.png" alt="" class="ribbon">
          <div class="row">
            <div class="col-sm-8 pt-70">
							<?php get_template_part( 'single-section' ); ?>
            </div>
            <div class="col-sm-4">
              <div class="debates-anteriores">
                <h4 >¿Quieres ver los debates anteriores?</h4>
                <div class="text-right">
                  <a href="http://redprolid.org/debates/" class="btn btn-primary">Ir a archivos</a>
                </div>
              </div>
              <div class="pl-21 pr-21">
	            	<h4 class="mt-35">Lo último en las redes</h4>
								<div class="fb-like-box" data-width="100%" data-height="220" data-href="https://www.facebook.com/redprolid" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
								<a class="twitter-timeline" width="95%" height="220"  href="https://twitter.com/redprolid" data-widget-id="510444695814537216">Tuiteado por @redprolid</a>  
								<div class="g-person" data-width="100%" data-height="220" data-href="//plus.google.com/u/0/107403271684877473593" data-rel="author"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--NAVIMAGEN-->
    <?php get_template_part( 'include', 'navimage' ); ?>    
    </div>

<?php get_footer(); ?>    