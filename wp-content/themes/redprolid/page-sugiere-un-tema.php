<?php
/*
Template Name: Sugiere un tema
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
          <div><img class="icon-noticias" src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/foros-redondo.svg" alt="" width="100%"class="pt-35-xs">
		</div>
        </div>
        <div class="col-sm-5 col-xs-12 ">
          <h1 class="header-text-tu-opinioncuenta">Sugiere un tema</h1>
        </div>
        <div class="col-sm-6 col-xs-12">
        	<nav class="anchor-quieres-ver-lasencuestas text-right text-center-xs">
            <a href="<?php echo home_url('/'); ?>charlacafe/">¿Quieres ver los foros anteriores?</a>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 pl-14-xs">
          <h4 class="light pl-14-xs">
           Los foros virtuales que durarán alrededor de tres semanas, en las cuales te animamos a intervenir para aportarnos tu experiencia y tu opinión...así como si nos estuviéramos tomando un café.
          Sugiere temas que alimenten esta conversión de café.</h4>
        </div>
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
