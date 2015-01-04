<?php
/*
Template Name: Noticias list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<div>
  <section id="puntos-de-vista-anteriores">
    <div class="container">
	    <div class="row mt-7">
	      <div class="col-md-12">
	        <?php the_breadcrumb(); ?>
	      </div>
	    </div>	      
    </div>
  </section>
  
  <section class="mb-21">
    <div class="container">
	    <div class="row">
		    <div class="col-md-12 clearfix">
			    <div class="row titulos-anteriores">
				    <div class="col-md-11">
							<h1>Noticias Anteriores</h1>
							<a href="<?php echo content_url('/'); ?>noticias">Noticias >></a>
				    </div>
				    <div class="col-md-1 pl-0 pr-0">
					    <div>
					    	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" alt="" width="100%">
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
  </section>
  
  <section>  
    <div class="container grid-block-lg">
      <div class="row">
        <div class="col-sm-10 col-md-offset-1">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          <?php query_posts( 'category_name=noticias&posts_per_page=10&paged=' . $paged ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3 class="medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="content mb-35">
              <?php the_field('descripcion_rapida_noticias'); ?>
							<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Lee la noticia >></a></p>
            </div>
            <hr>
          <?php endwhile; ?>
          <div class="text-center">
            <ul class="pager">
              <li><?php next_posts_link( 'Anteriores' ); ?></li>
              <li><?php previous_posts_link( 'Posteriores' ); ?></li>
            </ul>
          </div>          
        </div>
      </div>          
    </div>
  </section>
</div>
<?php get_footer(); ?>