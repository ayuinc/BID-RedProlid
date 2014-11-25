<section class="">
  <div class="container text-justify with-hr">
    <div class="row">

      <?php if( get_field('imagen_concurso') ) { ?>
      <div class="col-sm-4 col-md-offset-1">
        <img src="<?php the_field('imagen_concurso'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-sm-6">
      <?php } else {?>  
      <div class="col-sm-10 col-md-offset-1">
      <?php } ?>
        
        <h1 class="lh-lg"><?php the_title(); ?></h1>
        <h3 class="light "><?php the_field('descripcion_concurso'); ?></h3>
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
