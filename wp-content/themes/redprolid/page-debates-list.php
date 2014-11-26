<?php
/*
Template Name: Noticias list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
  <div class="mh-700">
      <section id="puntos-de-vista-anteriores">
        <div class="container">
          <div class="panel panel-custom panel-highlight panel-flex">
            <div class="panel-body">
              <div class="pdv-icon">
                <img src="../assets/img/pdv-main-icon.png" alt="">
              </div>
              <div class="col-sm-6 mb-ch-21">
                <h1>Debates</h1>
                <a href="#" class="block"></a>
              </div>
              <div>
                <hr style="border-top: 3px dotted #aeab8b;">
                <div class="col-sm-6">
                  <?php //get_search_form(); ?>
                </div>
                <div class="col-sm-6 text-right">
                  <!-- <strong>Resultados 0</strong>
                  <p>Resultados por página: <a href="#">10</a> - <a href="#">50</a> - <a href="#">100</a></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container grid-block-lg">

          <?php query_posts( 'category_name=dtl-debates' ); ?> 
          <?php //die(the_post()); ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3><?php the_title(); ?></h3>
              <p>FUENTE: <?php the_field('fuente-debates'); ?></p>
              <span>Blog: <?php the_field('blog-debates'); ?></span>
            </div>
            <div class="content">
              <?php the_field('contenido-debates'); ?>
            </div>
            <div class="footer">
              <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
            </div>
            <div class="comments">
              <?php comments_template();?>
            </div>
          <?php endwhile; ?>
          <div class="text-center">
            <ul class="pager">
              <li><a href="#">Previos</a></li>
              <li><a href="#">Siguiente</a></li>
            </ul>
          </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>