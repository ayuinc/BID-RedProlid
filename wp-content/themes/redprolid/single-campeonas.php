<section class="mt-7 "> 
  <div class="container relative mb-14">
    <?php the_breadcrumb(); ?>    
    <div class="clearfix sub-header">
      <div class="col-sm-1 col-xs-3">
        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/campeonas-icon-circle.png" alt="" width="100%"></div>
      </div>
      <div class="col-sm-4 col-xs-9">
        <h1 class="brand-titular">Campeonas</h1>
      </div>
      <div class="col-sm-7 col-xs-12">
        <nav class="text-right text-center-xs">
          <a href="#" data-toggle="modal" data-target="#modalCampeonas">Nos propones un tema</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>campeonas/campeonas-anteriores">¿Quieres leer nuestras entrevistas anteriores?</a>
        </nav>
      </div>
    </div>
    <div class="ph-70">
  		<h3 class="light text-justify mb-14">Esta es la sección donde incluimos las entrevistas con testimonios de aquellas mujeres latinoamericanas que han dejado huella y han marcado o van a marcar las agendas de sus países para imprimir mayor equidad en las políticas públicas y en el quehacer diario de la política.</h3>
      <div class="row">
        <?php if( get_field('imagen_campeonas') ) { ?>
        <div class="col-md-3">
          <?php $imagen_campeona = get_field('imagen_campeonas'); ?>
          <?php if ($imagen_campeona!='') { ?>
          <img  src="<?php the_field('imagen_campeonas'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
          <?php } ?>
          <?php $video = get_field('video_campeonas'); ?>
          <?php if ($video!='') { ?>
          <iframe class="embed-responsive-item" width="100%" height="229" src="//www.youtube.com/embed/<?php the_field('video_campeonas'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          <?php } ?>
          <small><?php the_field('fuente_imagen_campeonas'); ?></small>
        </div>
        <div class="col-md-9">
        <?php } else {  } ?>
        <div class="row">
	        <div class="col-sm-12">
		        <h2 class="lh-lg mb-0"><?php the_title(); ?></h2>
		        <small><?php $tempDate = get_field(fecha_de_la_entrevista); ?>
            <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
            <p>
		        		<em>
		        		<?php the_field('posicion_campeona'); ?>
								<?php the_field('descripcion_campeona'); ?>
		        		</em>
            </p>
            
	        </div>
	        <div class="col-sm-3">
	        <ul class="list-inline text-right">
		        <?php $facebook_campeonas = get_field('facebook_campeonas'); ?>
		        <?php $twitter_campeona = get_field('twitter_campeona'); ?>
		        <?php $google_campeonas = get_field('google_campeonas'); ?>
		        <?php if ($facebook_campeonas!='') { ?>
		        <li>
			        <a href="<?php echo $facebook_campeonas; ?>" target="_blank"><img src="http://redprolid.org/wp-content/uploads/2015/02/facebook.png"></a>
		        </li>
		        <?php } ?>
		        <?php if ($twitter_campeona!='') { ?>
	        	<li>
		        	<a href="<?php echo $twitter_campeona; ?>" target="_blank"><img src="http://redprolid.org/wp-content/uploads/2015/02/twitter.png"></a>
	        	</li>
	        	<?php } ?>
	        	<?php if ($google_campeonas!='') { ?>
	        	<li>
		        	<a href="<?php echo $google_campeonas; ?>" target="_blank"><img src="http://redprolid.org/wp-content/uploads/2015/02/googleplus.png"></a>
	        	</li>
	        	<?php } ?>
	        </ul>
	        </div>	        
        </div>	            
      </div>
      <div class="with-hr">
        <p><?php the_field('intro_entrevista_campeona'); ?></p>
	    	<p>
	      	<?php $pais_campeona = get_field('pais_campeona'); ?>
					<?php if ($pais_campeona!='') { ?>
	      	<strong>País:</strong> <?php the_field('pais_campeona'); ?><br>
	      	<?php } ?>
	      	<?php $tipo_de_recurso = get_field('tipo_de_recurso'); ?>
	      	<?php $tags_tipo_de_recurso_campeona = get_field('tags_tipo_de_recurso_campeona'); ?>
					<?php if ($tipo_de_recurso!='') { ?>	      	
					<strong>Tipo de recurso:</strong> <?php the_field('tipo_de_recurso'); ?>
						<?php if ($tags_tipo_de_recurso_campeona!='') { ?>
							<?php echo ', '.$tags_tipo_de_recurso_campeona; ?>
						<?php } ?>
					<br>
					<?php } ?>
	      	<?php $tema = get_field('tema'); ?>
	      	<?php $tag_tema_campeona = get_field('tag_tema_campeona'); ?>
					<?php if ($tema!='') { ?>					
					<strong>Tema:</strong> <?php the_field('tema'); ?>
						<?php if ($tag_tema_campeona!='') { ?>
							<?php echo ', '.$tag_tema_campeona; ?>
						<?php } ?>					
					<?php } ?>					
				</p>           
        <div class="content-display">
          <div class="text-right mt-14 mb-14">
  	        <a class="btn btn-primary" id="boton_entrevista_full" >Lee la entrevista completa</a>
  	        <a class="btn btn-primary" id="boton_ocultar_entrevista_full" >Ocultar la entrevista completa</a>
  	      </div>
        </div>
        <div id="entrevista_full">
	        <hr>
	        <?php $tempDate = get_field('fecha_entrevista'); ?>
	        <!--<h3 class="medium mt-21">Entrevista</h3>-->
          <p><?php the_field('entrevista_completa_campeona'); ?></p>         
        </div>
        <div class="text-right">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
        </div>
      </div>       
  	  <div class="row">
  			<div class="col-sm-12 pv-21">  
					<?php	if ( is_user_logged_in() ) { ?>
						<?php comments_template();?>
					<?php } else { ?>
						<p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
					<?php }	?>
  			</div>
  	  </div>
    </div>
  </div>      
</section>

	<!-- Modal CAMPEONAS -->
	<div class="modal fade" id="modalCampeonas" tabindex="-1" role="dialog" aria-labelledby="modalCampeonasLabel" aria-hidden="true">
		<?php if ( is_user_logged_in() ) { ?>
  	<div class="modal-dialog">
  	<?php } else { ?>
  	<div class="modal-dialog modal-lg">
  	<?php } ?>
	    <div class="modal-content bg-panel">
	      <div class="modal-body">
	        <!--<div class="clearfix sub-header sub-header-sm mb-0">
		        <div class="col-sm-1 col-xs-3">
		          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-topic-icon.png" alt="" width="100%"></div>
		        </div>
		        <div class="col-sm-5 col-xs-9"></div>
		        <div class="col-sm-6 col-xs-12"></div>
		      </div>-->
		      <?php if ( is_user_logged_in() ) { ?>
		      	<h3 class="medium">¿Nos propones un tema para desarrollar en nuestras entrevistas y/o a quién te gustaría que entrevistemos?</h3>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 5 ); ?>
						<?php } ?>
					<?php } else { ?>
						<div class="row">
				  		<div class="col-sm-6 col-sm-offset-3">
				  			<div class="user-sign-in-form pv-21">
					  			<h2 class="medium">Ingresa o regístrate</h2>
			            <?php 
			              if ( is_user_logged_in() ) {

			                $current_user = wp_get_current_user();
			                echo '<div class="text-right">';
			                echo '<h4 class="light">Hola '.$current_user->user_nicename.'</h4>';
											echo '<a href="'.wp_logout_url().'" title="Logout" class="light">Cierra tu sesión</a>';
			                echo '</div>';

			              } else {

			                echo do_shortcode('[dm_login_form]'); 

			              }
			            ?>
			           </div>
				  		</div>
				  	</div>
			  	<?php } ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar X</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END Modal CAMPEONAS-->	