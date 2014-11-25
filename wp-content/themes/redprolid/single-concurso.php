<section class="">
  <div class="container text-justify with-hr">
    <div class="row">
      <div class="col-sm-3">
        <img src="<?php the_field('imagen_concurso'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-sm-9">
        <h3><?php the_title(); ?></h3>
        <p><?php the_field('descripcion_concurso'); ?></p>
        <p class="lh-lg text-justify">
          
        </p>
      </div>
    </div>
  </div>
  <div class="container text-justify with-hr">
    <h4><?php //the_title(); ?></h4>
    <p><?php the_field('contenido_concurso'); ?></p>
    <div class="text-center">
      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
    </div>          
  </div>
  <div class="container text-justify with-hr">
    <?php comments_template(); ?>
  </div>
</section>
