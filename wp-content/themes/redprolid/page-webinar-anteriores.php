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
		    <?php the_breadcrumb(); ?>        
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
    <section class="pv-7">
      <div class="container">
        <div class="row">
          <form action="">
            <div class="col-sm-4 form-group">
              <select name="" id="" class="form-control select-override">
                <option value="Del más antiguo al más nuevo">Del más antiguo al más nuevo</option>
              </select>
            </div>
          </form>
        </div>
      </div>
    </section> 
    <section id="puntos-de-vista-anteriores">
      <div class="container mh-560">
        <?php query_posts( 'category_name=webinario' ); ?> 
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="banner">
          <div class="banner-pic bg-panel col-sm-4">
            <iframe class="embed-responsive-item" width="100%" height="210" src="//www.youtube.com/embed/JJqT7jaHXN0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="banner-content col-sm-8">
              <h3 class="text-gray-dark"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <div>
                <p><?php echo get_post_field('post_content', get_the_ID()); ?></p>
                <span class="text-gray">177.001 visualizaciones</span>
              </div>
              <div class="flex-space-between pt-21">
                <div class="left">
                  <strong>Fecha:</strong>
                  <div>
                    <span>1 de septiembre de 2014</span> <span class="text-gray">07:00:00 a.m.</span>
                  </div>
                </div>
                <div class="right flex-middle">
                  <nav>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>">Ver webinario</a> 
                    <span class="text-primary">|</span> 
                    <a href="#">Resumen del webinario</a>
                  </nav>
                </div>
              </div>
          </div>
        </div>
        <?php endwhile; ?> 
        <!-- <div class="row">
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
          </div>
        </div> -->
      </div>
      <div class="container text-center">
        <ul class="pager">
          <li><a href="#">Previos</a></li>
          <li><a href="#">Siguiente</a></li>
        </ul>
      </div>
    </section>
  </div>

<?php get_footer(); ?>
