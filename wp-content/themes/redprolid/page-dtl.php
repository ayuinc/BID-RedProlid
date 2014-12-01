<?php
/*
Template Name: DTL
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section id="dtl" class="pt-0">
        <div class="container relative dtl-content with-shadow">
          <!-- Start the Loop. -->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
		          <div class="absolute dtl-custom-heading">
		            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-dtl-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #808080;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #808080;">
		          </div>
		          <img src="<?php the_field('imagen-dtl'); ?>" alt="<?php the_title(); ?>" class="pull-left mr-28 mb-21" width="630px" height="auto">
		          <div class="text-gris lead text-gray">
                <p class="text-right pt-14-100 mb-28"><?php the_field('contenido-dtl'); ?></p> 
              </div>
						<?php endwhile; ?>
					<?php endif; ?>                 
        </div>
      </section>      
      <section>
        <div class="container dtl-path">
          <div class="row">
            <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/"></a></div>
            <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/carrera-de-vallas/"></a></div>
            <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/"></a></div>
            <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/"></a></div>
            <div class="col-xs-2"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/"></a></div>
            <div class="col-xs-1"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas-2/"></a></div>
            <div class="col-xs-1"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/la-pinta-no-es-lo-de-menos/"></a></div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
