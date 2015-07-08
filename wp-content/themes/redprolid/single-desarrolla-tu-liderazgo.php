<section>
  <div class="container">
		<?php the_breadcrumb(); ?>
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Desarrolla tu liderazgo</h1>
          <nav class="mt-21">
            <!-- <a href="<?php echo content_url('/'); ?>concursos">Concursos >></a> -->
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <!-- <img src="<?php //echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle-alpha.png" width="94px" height="auto" alt=""> -->
      </div>
    </div>
    <div class="ph-70">
      <div class="row">
        <div class="col-sm-12">
            <div class="title">
              <h3 class="medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <?php $fuente_debates = get_field('fuente-debates'); ?>
              <?php if ($fuente_debates!='') { ?>
                <p>FUENTE: <?php echo $fuente_debates; ?></p>
              <?php } ?>
              <?php $blog_debates = get_field('blog-debates'); ?>
              <?php if ($blog_debates!='') { ?>
                <span>Blog: <?php echo $blog_debates; ?></span>
              <?php } ?>
            </div>
            <div class="content">
              <?php the_field('contenido-debates'); ?>
            </div>         
        </div>
        <div class="comments mt-35">
          <?php if ( is_user_logged_in() ) { ?>
            <?php comments_template();?>
          <?php } else { ?>
            <p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
          <?php } ?>
        </div> 
      </div>          
    </div>
  </div>
</section>