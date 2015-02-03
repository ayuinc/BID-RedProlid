<section class="mt-7 "> 
  <div class="container relative mb-14">
    <?php the_breadcrumb(); ?>    
    <div class="clearfix sub-header">
      <div class="col-md-1">
        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/campeonas-icon-circle.png" alt="" width="100%"></div>
      </div>
      <div class="col-md-4">
        <h1 class="brand-titular">Campeonas</h1>
      </div>
      <div class="col-md-7">
        <nav class="text-right">
          <a href="<?php echo home_url('/'); ?>campeonas/campeonas-anteriores">¿Quieres leer nuestras entrevistas anteriores?</a> <span class="text-primary">|</span>
          <a href="<?php echo home_url('/'); ?>compartir-campeonas">Nos propones un tema</a>
        </nav>
      </div>
    </div>
    <div class="row">
			<div class="col-md-12">
				<h3 class="light">Esta es la sección donde incluimos las entrevistas con testimonios de aquellas mujeres latinoamericanas que han dejado huella y han marcado o van a marcar las agendas de sus países para imprimir mayor equidad en las politicas públicas y en el quehacer diario de la política.</h3>
			</div>
    </div>	
    <div class="row">
      <?php if( get_field('imagen_campeonas') ) { ?>
      <div class="col-md-3 col-md-offset-1">
        <img src="<?php the_field('imagen_campeonas'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-md-7">
      <?php } else {  } ?>
      <h2 class="lh-lg mb-0"><?php the_title(); ?></h2>
      <small><?php the_field('posicion_campeona'); ?> <?php if (get_field('twitter_campeona')!='') { ?>/ <a href="http://twitter.com/<?php the_field('twitter_campeona'); ?>" target="_blank">@<?php the_field('twitter_campeona'); ?></a><?php } ?></small>
      <h4 class="mt-14 light lh-lg"><?php the_field('descripcion_campeona'); ?></h4>	      
    </div>
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr">     
        <p><?php the_field('intro_entrevista_campeona'); ?></p>
        <div class="content-display">
          <div class="text-right mt-14 mb-14">
  	        <a class="btn btn-primary" id="boton_entrevista_full" >Lee la entrevista completa</a>
  	        <a class="btn btn-primary" id="boton_ocultar_entrevista_full" >Ocultar la entrevista completa</a>
  	      </div>
        </div>
        <div id="entrevista_full">
          <p><?php the_field('entrevista_completa_campeona'); ?></p>
        </div>
        <div class="text-right">
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