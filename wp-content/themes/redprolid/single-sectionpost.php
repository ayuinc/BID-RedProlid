<section class="sumate-al-debate">
  <div class="container">
    <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate.png" alt="" class="ribbon">
    <div class="row">
      <div class="col-sm-9 pt-35">
        <div class="title">
          <h3><?php the_title(); ?></h3>
          <p>FUENTE: <?php the_field('fuente-debates'); ?></p>
          <span>Blog: <?php the_field('blog-debates'); ?></span>
        </div>
        <div class="content">
          <?php the_field('contenido-debates'); ?>
        </div>
        <div class="footer">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>