<?php
/*
Template Name: Tu Opinion Cuenta
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
  <section id="toc-main">
    <div class="container">
      <?php the_breadcrumb(); ?>
      <div class="row clearfix sub-header">
        <div class="col-sm-1 text-center col-xs-12">
          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/speaker-radius-main-icon.png" alt="" width="100%" class="pt-35-xs"></div>
        </div>
        <div class="col-sm-5 col-xs-12 ">
          <h1 class="header-text-tu-opinioncuenta">Tu opinión cuenta</h1>
        </div>
        <div class="col-sm-6 col-xs-12">
        	<nav class="anchor-quieres-ver-lasencuestas text-right text-center-xs">
            <a href="<?php echo home_url('/'); ?>resultados/">¿Quieres ver las encuestas anteriores?</a>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 pl-14-xs">
          <h4 class="light pl-14-xs">
            Anímate a participar en nuestras encuestas, porque tu opinión nos interesa a todas. Cada mes te proponemos un sondeo sencillo sobre temas relevantes de nuestra red o temas que estén siendo objeto de debate en ese momento en la región.
          </h4>
        </div>
      </div>
      <div class="row pv-42">
        <div class="col-sm-4 with-hr">
          <!-- <h3>¿Qué es lo que más descuidas de tu vida personal cuando estás trabajando?</h3>
          <h4>Razones</h4>
          <ul class="list-unstyled">
            <li>- (Sí) Sed accumsan neque purus, ac tincidunt sapien selerisque.</li>
            <li>- (No) Sed accumsan neque purus, ac tincidunt sapien selerisque.</li>
          </ul>
          <p class="text-gray">Agosto 2014</p> -->
          <!-- <?php the_content(); ?> --->
          <?php echo do_shortcode('[yop_poll id="28"]'); ?>           
        </div>
        <div class="col-sm-8 ph-70-sm pt-14-xs pl-14-xs">
          <h3 class="pl-14-xs">Nos interesa lo que piensas</h3>
          <p class="pl-14-xs">¿Qué temas te parecen relevantes para incluir en nuestras encuestas?</p>
          <div class="row">
            <div class="col-xs-6">
              <label class="pl-14-xs">Tu propuesta</label>
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
