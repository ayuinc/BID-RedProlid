<?php
/*
Template Name: Webinar previous Page
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
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/webinarios-icon.png" alt="" width="80"></div>
		      <div class="clearfix">
		        <div class="col-md-3">
		          <h1 class="mt-14 ml--25 mb-0 brand-titular">Webinarios</h1>
		        </div>
		        <div class="col-md-9 pt-28">
		          <nav class="text-right mb-0 mt-0">
			          <div class="row">
		            	<div class="col-md-12">
			            	<p class="text-right">
			            	<a href="#" data-toggle="modal" data-target="#pdv-modal">¿Quieres proponernos un tema?</a> 
			            	</p>
		            	</div>
			          </div>
		          </nav>
		        </div>
		      </div>
		    </div>	
		  </div>      
    </section>		  
    <section id="puntos-de-vista-anteriores" class="pt-7-100 mt-35">
      <div class="container grid-block-lg">
        <div class="row">
          <div class="col-sm-10 col-md-offset-1">
            <?php query_posts( 'category_name=webinario' ); ?> 
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="title">
                <h3 class="medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              </div>
              <div class="content mb-35">
                <?php echo get_post_field('post_content', get_the_ID()); ?>
                <small><a href="<?php echo get_permalink( get_the_ID() ); ?>">Lee más >></a></small>
              </div>
            <?php endwhile; ?>
            <div class="text-center">
              <ul class="pager">
                <li><a href="#">Previos</a></li>
                <li><a href="#">Siguiente</a></li>
              </ul>
            </div>
          </div>
        </div>          
      </div>
    </section>
  </div>

<?php get_footer(); ?>
