<section id="puntos-de-vista">
  <div class="container relative with-shadow mb-28">
    <div class="absolute dtl-custom-heading">
      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-icon.png" alt=""></div>
      <div class="clearfix">
        <div class="col-sm-6">
          <h1 style="color: #aeab8b;">Puntos de vista</h1>
        </div>
        <div class="col-sm-6 pt-28">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>puntos-de-vista-list">Puntos de vista anteriores</a> | <a href="#" data-toggle="modal" data-target="#pdv-modal">¿Te gustaría proponernos un tema?</a>
          </nav>
        </div>
      </div>
      <hr style="border-top: 3px dotted #aeab8b;">
    </div>
    <div clas="row">
	    <div class="col-sm-10 col-md-offset-1">
	    	<h4 class="pt-14-100 light mt-35 mb-35">Te ofrecemos artículos escritos por mujeres líderes en la región latinoamericana: políticas, especialistas o profesionales relevantes que ponen sobre el papel su experiencia en pro de unas sociedades más equitativas.</h4>
	    </div>
    </div>
  </div>
  <div class="container text-left mt-70 mb-35">
    <div class="row">
      <div class="col-sm-3 col-md-offset-1">
        <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-sm-6">
        <h1><?php the_title(); ?><small>(Bolivia)</small></h1>
        <p><?php the_field('profesion'); ?> / <a href="http://twitter.com/<?php the_field('cuenta_de_twitter'); ?>">@<?php the_field('cuenta_de_twitter'); ?></a></p>
        <p class="text-justify">
        	<?php the_field('descripcion_punto_de_vista'); ?>
        </p>
      </div>
    </div>
  </div>
  <div class="container text-left">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr pb-70">	  
			  <h4><?php the_field('nombre_completo'); ?></h4>
		    <p><?php the_field('contenido_punto_de_vista'); ?></p>
		    <div class="text-center mt-35">
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
		    </div>   
      </div>
    </div>       
  </div>
  <div class="container text-justify">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr pt-49 pb-49">	  
				<?php comments_template(); ?>
      </div>
    </div>
	</div>	
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 pt-35">		  
		    <h4>Artículos comentados</h4>
		    <ul class="grid-list grid-list-2 pb-ch-7">
		      <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
		      <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
		      <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
		      <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
		      <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
		    </ul>
      </div>
    </div>
  </div>
</section>
<!-- MODAL -->
<div class="modal fade" id="pdv-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="panel panel-custom panel-highlight">
          <div class="panel-body pl-14 pr-14">
            <div class="row">
              <div class="col-sm-1">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-topic-icon.png" alt="">
              </div>
              <div class="col-sm-11">
                <?php 
                  if ( is_user_logged_in() ) {


                  } else {

                  }
                ?>
                <nav class="text-right"><a href="#">Iniciar sesión</a> / <a href="#">Registrarse</a></nav>
                <hr class="m-0" style="border-top: 3px dotted #aeab8b;">
              </div>
            </div>
            <div class="grid-block row">
              <div class="col-sm-6">
                <p>Adjuntar: <a href="#">O</a></p>
              </div>
              <div class="col-sm-6"></div>
            </div>
            <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
            <button type="button" class="btn btn-default pull-right pl-28 pr-28" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->