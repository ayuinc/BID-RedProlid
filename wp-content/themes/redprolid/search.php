<?php
/**
 * The template for displaying Search Results pages
 *
 */

get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<div class="mh-700">
  <section id="search">
    <div class="container relative mh-140">
      <div class="absolute dtl-custom-heading">
        <div><img src="../assets/img/pdv-main-icon.png" alt=""></div>
        <h1 style="color: #aeab8b;" class="bg-panel pt-21 pb-21 pl-14 border-radius">Resultados de tu búsqueda</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <form action="" class="search">
            <div class="form-group clearfix">
              <div class="col-sm-3 pt-14">
                <label>Búsqueda</label>
              </div>
              <div class="col-sm-9">
                <div class="input-group">
                  <input type="search" class="form-control" placeholder="Buscar">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"></button>
                  </span>
                </div><!-- /input-group -->
                <a href="#" class="text-primary toggle-adv-search">Búsqueda avanzada &gt; &gt;</a>
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-7 text-right">
          <p class="m-0">Resultados: </p>
          <span>Resultados por página: 15, 50, 100</span>
        </div>
      </div>
    </div>
    <div class="container adv-search hidden">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <form action="">
            <div class="form-group clearfix">
              <div class="col-sm-5">
                <label for="">Que contenga todas las palabras</label>
              </div>
              <div class="col-sm-7">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group clearfix">
              <div class="col-sm-5">
                <label for="">Frase exacta</label>
              </div>
              <div class="col-sm-7">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group clearfix">
              <div class="col-sm-5">
                <label for="">Temas</label>
              </div>
              <div class="col-sm-7">
                <select name="" id="" class="select-override form-control">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="form-group clearfix">
              <div class="col-sm-5">
                <label for="">Recurso</label>
              </div>
              <div class="col-sm-7">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group text-right">
              <input type="submit" class="btn btn-primary" value="Busca">
            </div>
          </form>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
    <div class="container pt-21">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <ol>
            <li>
              <h4 class="m-0">Alternancia y paridad lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
              <span class="text-gray-light">Bolivia, Julio 24/2014 / </span> <a href="#">El Tiempo</a>
              <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, obcaecati! Illum reiciendis voluptas eius ducimus. Repudiandae, eligendi corrupti repellendus pariatur veritatis, ab adipisci tempora magni, vel at eaque voluptatibus molestias.</p>
              <a href="#">Leer más &gt; &gt;</a>
              <hr>
            </li>

            <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <h4 class="m-0"><?php the_title(); ?></h4>
                <?php $conte = (wp_get_post_terms(get_the_ID(),'country',array("fields" => "names"))[0]); ?>
                <span class="text-gray-light"><?php if(isset($conte)){echo $conte.',';} ?> <?php echo get_the_date(); ?> / </span> <a><?php the_field('fuente-debates'); ?></a>
                <!-- <span class="text-gray-light">Bolivia, Julio 24/2014 / </span> <a href="#">El Tiempo</a> -->
                <p class="m-0">
                  <?php 
                    switch (true) {
                      case the_field('contenido_punto_de_vista'):
                        echo the_field('contenido_punto_de_vista');
                        break;
                      case the_field('contenido_campeona'):
                        echo the_field('contenido_campeona');
                        break;
                      case the_field('contenido_concurso'):
                        echo the_field('contenido_concurso');
                        break;
                      case the_field('contenido-debates'):
                        echo the_field('contenido-debates');
                        break;
                      case the_field('contenido-dtl'):
                        echo the_field('contenido-dtl');
                        break;
                      case the_field('contenido-dtl-seccion'):
                        echo the_field('contenido-dtl-seccion');
                        break; 
                      case the_field('contenido_evento'):
                        echo the_field('contenido_evento');
                        break; 
                      case the_field('contenido_noticias'):
                        echo the_field('contenido_noticias');
                        break;                
                    }
                  ?>
                </p>
                <a href="<?php echo get_permalink( get_the_ID() ); ?>">Leer más &gt; &gt;</a>
                <hr>
              </li>
              <?php endwhile; ?>
            <?php endif; ?> 
          </ol>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
