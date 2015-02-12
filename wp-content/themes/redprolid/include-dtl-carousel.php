<div class="carousel">
  <div class="jcarousel">
    <ul class="grid-list grid-list-4 grid-list-1-xs dtl-carousel">
      <?php query_posts( 'category_name=home-desarrolla-tu-liderazgo&order=ASC' ); ?> 
      <?php while ( have_posts() ) : the_post(); ?>                   
      <li>
        <div class="dtl-item" data-href="<?php the_field('link_a_seccion_interna_home_dtl'); ?>">
          <div class="bg-img-block-no-cover bg-img-block" style="background-image: url(<?php the_field('imagen_home_dtl'); ?>);"></div>
          <div class="dtl-title">
            <h3><?php the_title(); ?></h3>
            <div class="text-center">
              <a href="<?php the_field('link_a_seccion_interna_home_dtl'); ?>" class="btn btn-xs btn-primary">Ve más</a>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile; ?>
    </ul>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#">
    <span class="icon-prev out"></span>
  </a>
  <a class="right carousel-control" href="#">
    <span class="icon-next out"></span>
  </a>
</div>