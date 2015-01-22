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
        <div class="clearfix bg-panel sub-header">
          <div class="col-sm-7">
            <div>
              <h1 style="color: #aeab8b;" class="">Webinarios anteriores</h1>
              <nav class="mt-21">
                <a href="#">Charlacafé &gt;&gt;</a>
              </nav>
            </div>
          </div>
          <div class="sub-header-icon">
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/webinarios-icon.png" width="94px" height="auto" alt="">
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
