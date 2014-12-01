<?php
/*
Template Name: Eventos list
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
                <h1>Eventos</h1>
                <a href="#" class="block">Eventos >></a>
              </div>
              <div>
                <hr style="border-top: 3px dotted #aeab8b;">
                <div class="col-sm-6">
                  <?php //get_search_form(); ?>
                </div>
                <div class="col-sm-6 text-right">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container grid-block-lg">

          <?php query_posts( 'category_name=eventos' ); ?> 
          <?php //die(the_post()); ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 with-hr">
              <h3><?php the_title(); ?></h3>
              <p></p>
              <h4></h4>
              <p class="lh-lg text-justify"><?php the_field('descripcion_evento'); ?></p>
              <!-- <p class="text-gray">Diciembre 2013</p> -->
              <div class="text-right">
                <a href="<?php echo get_permalink( get_the_ID() ); ?>">Lee el artículo >></a>
              </div>
            </div>
            <div class="col-sm-1"></div>
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