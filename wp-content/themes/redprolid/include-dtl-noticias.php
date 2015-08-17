<div class="gallery js-flickity dtl-carousel grid-list grid-list-4 grid-list-1-xs"
    data-flickity-options='{ "cellAlign": "left", "contain": true, "wrapAround": true, "draggable": false }'>
  <?php query_posts( 'category_name=noticias&posts_per_page=3&order=ASC' ); ?> 
  <?php while ( have_posts() ) : the_post(); ?>  
    <div class="grid-list-item gallery-cell dtl-item" data-href="<?php the_field('link_a_seccion_interna_home_dtl'); ?>">
      <div class="bg-img-block-no-cover bg-img-block" style="background-image: url(<?php the_field('imagen_home_dtl'); ?>);"></div>
      <div class="dtl-title pt-0">
        <h3><?php the_title(); ?></h3>
        <div class="text-center">
          <a href="<?php the_field('link_a_seccion_interna_home_dtl'); ?>" class="btn btn-xs btn-primary">Ve más</a>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>