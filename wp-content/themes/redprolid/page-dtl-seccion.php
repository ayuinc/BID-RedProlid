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
		            <h1 style="color: #007c8d;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #007c8d;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "agenda-de-genero") : ?>
		            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-agenda-genero-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #c02f73;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #c02f73;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "carrera-de-vallas") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-carrera-vallas-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #9a205c;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #9a205c;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle" width="560px" height="auto">							
							<?php endif; ?>
							<?php if ($segment2 == "la-pinta-no-es-lo-de-menos") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-la-pinta-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #007c8d;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #007c8d;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "listas-para-la-politica") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-listas-politica-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #015a71;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #015a71;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "nivelando-la-cancha") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-nivelando-cancha-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #599a97;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #599a97;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-left mr-21 img-circle pt-7-100" width="560px" height="auto">
							<?php endif; ?>
							<?php if ($segment2 == "pistas") : ?>
								<div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #007c8d;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #007c8d;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle" width="560px" height="auto">	
							<?php endif; ?>
		          <p class="text-left pt-14-100"><?php the_field('contenido-dtl-seccion'); ?></p>
						<?php endwhile; ?>
					<?php endif; ?>        
        </div>
      </section>
      <section class="sumate-al-debate">
        <div class="container">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate.png" alt="" class="ribbon">
          <div class="row">
            <div class="col-sm-9 pt-35">
					  
							<?php get_template_part( 'single-section' ); ?>
            </div>
            <div class="col-sm-3">
              <div class="debates-anteriores">
                <h4>¿Quieres ver los debates anteriores?</h4>
                <div class="text-right">
                  <a href="#" class="btn btn-primary">Ir a archivos</a>
                </div>
              </div>
              <h4>Lo último en las redes</h4>
              <div>
								<div class="fb-like-box" data-width="250" data-height="520" data-href="https://www.facebook.com/redprolid" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>              
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--NAVIMAGEN-->
    <?php get_template_part( 'include', 'navimage' ); ?>    
    </div>

<?php get_footer(); ?>    