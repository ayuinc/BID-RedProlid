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

            <?php if( get_field('imagen_evento') ) { ?>
            <div class="col-sm-4 col-md-offset-1">
              <img src="<?php the_field('imagen_evento'); ?>" alt="" class="img-responsive">
            </div>
            <div class="col-sm-6">
            <?php } else {?>  
            <div class="col-sm-10 col-md-offset-1">
            <?php } ?>
              
              <h1 class="lh-lg"><?php the_title(); ?></h1>
              <h3 class="light "><?php the_field('descripcion_evento'); ?></h3>
              <p class="lh-lg text-justify">
              </p>

            </div>
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