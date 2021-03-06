<section class="">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-xs-12 pt-35 text-center-xs">
        <div class="title">
          <h3><?php the_title(); ?></h3>
          <p>FUENTE: <?php the_field('fuente-debates'); ?></p>
          <span>Blog: <?php the_field('blog-debates'); ?></span>
        </div>
        <div class="content">
          <?php the_content(); ?>
        </div>
        <div class="footer">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
        </div>
        <div class="comments">
					<?php	if ( is_user_logged_in() ) { ?>
						<?php comments_template();?>
					<?php } else { ?>
           <p>Para poder comentar es necesario que <a href="/registrate/">inicies tu sesión o te registres</a> en Red PROLID.</p>
					<?php }	?>
        </div> 
      </div>
    </div>
  </div>
</section>