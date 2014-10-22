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
							<?php
								// Start the Loop.
								while ( have_posts() ) : the_post();

									/*
									 * Include the post format-specific template for the content. If you want to
									 * use this in a child theme, then include a file called called content-___.php
									 * (where ___ is the post format) and that will be used instead.
									 */
									echo '<li>';
									// get_template_part( 'content', get_post_format() );
									the_content();
									echo '</li>';

								endwhile;
								// Previous/next post navigation.
								twentyfourteen_paging_nav();

							else :
								// If no content, include the "No posts found" template.
								get_template_part( 'content', 'none' );

							endif;
						?>
          </ol>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
