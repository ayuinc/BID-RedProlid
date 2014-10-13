<?php
/*
Template Name: Posts List
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
  <?php query_posts( 'category_name=puntos-de-vista' ); ?> 
  <?php while ( have_posts() ) : the_post(); ?>                      
  <div class="panel-body">               
    <div class="col-sm-5">
      <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
    </div>
    <div class="col-sm-7">
      <h4><?php the_title(); ?></h4>
      <p class="light lh-lg"><?php the_field('descripcion_punto_de_vista'); ?></p>
      <div class="text-right"><a href="#" class="btn btn-primary">Lee más</a></div>
    </div>
  </div>
  <?php endwhile; ?>
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
                  <form class="form-search-inline">
                    <div class="input-group">
                      <input type="search" class="form-control" placeholder="Buscar">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"></button>
                      </span>
                    </div><!-- /input-group -->
                  </form>
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
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 with-hr">
              <h3>Erika Brockmann Quiroga <small>(Bolivia)</small></h3>
              <p>Psicóloga / <a href="#">@ErikaBrockmannQ</a></p>
              <p class="lh-lg text-justify">Especialista en temas de democracia y género. Psicóloga, magíster en Ciencia Política y docente. Exparlamentaria boliviana (1997-2005), presidió, durante cinco años, la Comisión de Descentralización y Desarrollo Local del Senado, y promovió la constitución de las primeras comisiones de ética parlamentaria en el Senado y en la Cámara de Diputados. Es fundadora y miembro del directorio del Centro de Promoción de la Mujer Gregoria Apaza, del Foro Político Nacional de Mujeres y de la Coordinadora de la Mujer. </p>
              <p class="text-gray">Diciembre 2013</p>
              <div class="text-right">
                <a href="#">Lee el artículo >></a>
              </div>
            </div>
            <div class="col-sm-1"></div>
          </div>
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