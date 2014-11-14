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
      <section>
        <div class="container relative bg-panel pv-14">
          <h1 class="mb-7-100">Webinarios anteriores</h1>
          <a href="#" class="see-more">Charlacafé</a>
          <div class="absolute" style="right: 70px; top: 0;">
            <img src="../assets/img/webinarios-icon.png" alt="">
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <form action="">
            <div class="form-group row">
              <div class="col-sm-4">
                <select name="" id="" class="form-control select-overide">
                  <option value="Ordenar por">Ordenar por</option>
                </select>
              </div>
            </div>
          </form>
          <?php query_posts( 'category_name=webinario' ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <div class="row pv-ch-14">
            <div class="col-sm-4 bg-panel">
              <img src="../assets/img/img.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-8">
              <h3><?php the_title(); ?></h3>
              <p><?php echo get_post_field('post_content', get_the_ID()); ?></p>
              <span class="help-block"><?php echo_views(get_the_ID()); ?> visualizaciones</span>
              <div class="row mt-35">
                <div class="col-sm-6">
                  <span class="bold block">Fecha:</span>
                  <strong><?php echo get_the_date(); ?>. <?php echo get_the_time(); ?>.</strong>
                </div>
                <div class="col-sm-6 mt-21 text-right">
                  <a href="<?php echo get_permalink( get_the_ID() ); ?>">Ver webinario</a> | <a href="#">Resumen del webinario</a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <div class="text-center">
            <nav>
              <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
