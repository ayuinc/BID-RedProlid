<section>
  <div class="container">
		<?php the_breadcrumb(); ?>
    <div class="row pv-21">
      <?php if( get_field('imagen_concurso') ) { ?>
      <div class="col-sm-3 col-md-offset-1">
        <img src="<?php the_field('imagen_concurso'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-sm-7">
      <?php } else {?>
      <div class="col-sm-10 col-md-offset-1">  
      <?php } ?>
        <p class="mb-0 pb-0">CONCURSOS</p>
        <h2 class="lh-lg"><?php the_title(); ?></h2>
        <h4 class="light lh-lg"><?php the_field('descripcion_concurso'); ?></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr">     
        <p><?php the_field('contenido_concurso'); ?></p>
        <a name="terminos-y-condiciones"></a>
        <p class="text-center"><button id="boton_entrevista_full" class="btn btn-primary">Lee los Términos y Condiciones</button></p>
        <div id="entrevista_full">
        	<h4 class="medium">Términos y condiciones</h4>
					<p><?php the_field('terminos_concurso'); ?></p>
        </div>
        <div class="text-center mb-35 ">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
        </div>   
      </div>
    </div>  
    <div class="row">
      <div class="col-sm-10 col-md-offset-1">  
        <?php comments_template(); ?>
      </div>
    </div>
  </div>
</section>