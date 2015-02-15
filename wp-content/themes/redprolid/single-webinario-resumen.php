    <div class="mh-700">
      <section>
        <div class="container relative bg-panel normalize-text">
          <div class="row pv-35">
            <div class="col-sm-7">
              <h1>Resumen del webinario</h1>
            </div>
            <div class="col-sm-5 pt-7">
              <a href="#" class="see-more">Descargar archivo en PDF <?php if (function_exists("wpptopdfenh_display_icon")) echo wpptopdfenh_display_icon();?></a> | <a href="<?php echo home_url('/'); ?>webinarios-anteriores">Webinarios anteriores</a>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
	          <?php $video = get_field('video'); ?>
	          <?php if ($video!='') { ?>
            <div class="col-sm-4">
              <iframe class="embed-responsive-item" width="100%" height="210" src="//www.youtube.com/embed/<?php the_field('video_resumen_webinario'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
	          <?php } else { ?>
            <div class="col-sm-4">
              <img src="<?php the_field('imagen'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
            </div>
            <div class="col-sm-8">
	          <?php } ?>  
              <h3 class="mb-0"><?php the_title(); ?></h3>
              <strong><?php the_field('sub_titulo'); ?></strong>
              <div class="pv-21">
                <p><?php the_field('descripcion_webinario_resumen'); ?></p>
              </div>
		          <div class="text-right mt-14 mb-14">
		  	        <a class="btn btn-primary" id="boton_entrevista_full" >Lee el resumen completo</a>
		  	        <a class="btn btn-primary" id="boton_ocultar_entrevista_full" >Ocultar el resumen completo</a>
		  	      </div>
              <div class="pv-21" id="entrevista_full">
	              <p><?php the_field('contenido_resumen_webinario'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container-sm pv-35">
					<?php	if ( is_user_logged_in() ) { ?>
						<?php comments_template();?>
					<?php } else { ?>
						<p>Para poder comentar es necesario <a href="/registrate/">registrarse</a> a Red PROLD.</p>
					<?php }	?>
        </div>
      </section>
    </div>    