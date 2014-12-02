<?php
/*
Template Name: Puntos de vista list
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
                <h1>Puntos de vista anteriores</h1>
                <a href="#" class="block">Puntos de vista >></a>
              </div>
              <div>
                <hr style="border-top: 3px dotted #aeab8b;">
                <div class="col-sm-6">
                  <?php get_search_form(); ?>
                </div>
                <div class="col-sm-6 text-right">
                  <strong>Resultados 0</strong>
                  <p>Resultados por página: <a href="#">10</a> - <a href="#">50</a> - <a href="#">100</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container grid-block-lg hidden">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h5>No se encontraron resultados de búsqueda</h5>
            <ul class="pl-14">
              <li>Verifica que las palabras estén bien escritas</li>
              <li>Utiliza la opción de búsqueda avanzada  para que tu búsqueda sea más precisa</li>
              <li>No encierras la frase entre comillas si deseas realizar una búsqueda de cada palabra individualmente.
                <ul class="list-unstyled pl-14">
                  <li>Por ejemplo: <em>con género paridad</em> generalmente devolverá más resultados que <em>"género paridad"</em>.</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="col-sm-2"></div>
        </div>
        <div class="container grid-block-lg">

          <?php query_posts( 'category_name=puntos-de-vista' ); ?> 
          <?php //die(the_post()); ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 with-hr">
              <h3><?php the_field('nombre_completo'); ?> <small>(Bolivia)</small></h3>
              <p><?php the_field('profesion'); ?> <?php if(the_field('cuenta_de_twitter')){ echo " / <a href='https://twitter.com/".the_field('cuenta_de_twitter')."'>@".the_field('cuenta_de_twitter')."</a>"}?></p>
              <h4><?php the_title(); ?></h4>
              <p class="lh-lg text-justify"><?php the_field('contenido_punto_de_vista'); ?></p>
              <p class="text-gray">Diciembre 2013</p>
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