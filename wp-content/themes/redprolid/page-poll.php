<?php
/*
Template Name: Poll page
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
  <section class="minh-630">
    <div class="container">
      <?php the_breadcrumb(); ?>
      <div class="clearfix sub-header bg-panel">
        <div class="col-sm-6 col-xs-12">
          <h1>Encuestas anteriores</h1>
        </div>
        <div class="col-sm-6 col-xs-12">
          <!--<nav class="text-right text-center-xs">
            <a href="<?php echo content_url('/'); ?>tu-opinion-cuenta">Tu opinión cuenta &gt;&gt;</a>
          </nav>-->          
        </div>
      </div>
      <div>
        <ul class="grid-list grid-list-3 grid-list-1-xs grid-list-2-sm">
        	<?php while ( have_posts() ) : the_post(); ?>
    			  <?php the_content(); ?>
    		  <?php endwhile; ?>
        </ul>
      </div>
      <!-- <div class="text-center">
        <ul class="pager">
          <li><a href="#">Previos</a></li>
          <li><a href="#">Siguiente</a></li>
        </ul>
      </div> -->
    </div>
  </section>
<?php get_footer(); ?>    