<section>
  <div class="container">
		<?php the_breadcrumb(); ?>
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7 col-xs-12">
        <div>
          <h1>Concurso</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>concursos">Concursos >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle-alpha.png" width="94px" height="auto" alt="">
      </div>
    </div>
    <div class="ph-70-sm ph-14-xs">
      <div class="row">
        <?php if( get_field('imagen_concurso') ) { ?>
        <div class="col-sm-3 col-xs-12 text-center-xs">
          <img src="<?php the_field('imagen_concurso'); ?>" alt="" class="img-responsive">
        </div>
        <div class="col-sm-7 col-xs-12 text-center-xs">
        <?php } else {?>
        <div class="col-sm-12 col-xs-12 text-center-xs">  
        <?php } ?>
          <h2 class="lh-lg"><?php the_title(); ?></h2>
          <h4 class="light lh-lg"><?php the_field('descripcion_concurso'); ?></h4>
          <p><?php the_field('contenido_concurso'); ?></p>
          <a name="terminos-y-condiciones"></a>
          <div class="content-display">
            <div class="text-right mt-14 mb-14">
              <a class="btn btn-primary" id="boton_entrevista_full" >Lee los Términos y Condiciones</a>
              <a class="btn btn-primary" id="boton_ocultar_entrevista_full" >Ocultar el detalle</a>
            </div>
          </div>
          <div id="entrevista_full">
          	<h4 class="medium">Términos y condiciones</h4>
  					<p><?php the_field('terminos_concurso'); ?></p>
          </div>
          <div class="text-right">
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
          </div>   
        </div>
      </div>
				<?php	if ( is_user_logged_in() ) { ?>
					<?php comments_template();?>
				<?php } else { ?>
          <p>Para poder comentar es necesario que <a href="/registrate/">inicies tu sesión o te registres</a> en Red PROLID.</p>
				<?php }	?>
    </div>
  </div>
</section>