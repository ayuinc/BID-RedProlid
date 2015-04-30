<?php
/*
Template Name: Tu Perfil
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
  <section id="toc-main">
    <div class="container">
      <?php the_breadcrumb(); ?>

      <div class="row pv-42">
        <div class="col-sm-4 with-hr">
          <?php echo get_avatar( $current_user->ID); ?>
        </div>
        <div class="col-sm-8 ph-70-sm">
          <h3>Nos interesa lo que piensas</h3>
          <p>¿Qué temas te parecen relevantes para incluir en nuestras encuestas?</p>
          <div class="row">
            <div class="col-xs-6">
              <label>Tu propuesta</label>
            </div>
            <!--<div class="col-xs-6 text-right">
              <nav><a href="#">Regístrate</a> / <a href="#">Inicia sesión</a></nav>
            </div>-->
          </div>
          <div class="row">
          	<div class="col-xs-12">
				      <?php while ( have_posts() ) : the_post(); ?>
		    			  <?php the_content(); ?>
		    		  <?php endwhile; ?>
				    </div>
		      </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>