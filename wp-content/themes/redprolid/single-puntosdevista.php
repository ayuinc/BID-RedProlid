<section id="puntos-de-vista" class="mt-7">
  <div class="container relative mb-14">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-1 col-xs-3">
        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-icon.png" alt="" width="100%"></div>
      </div>
      <div class="col-sm-4 col-xs-9 pl-14">
        <h1 class="brand-titular">Puntos de vista</h1>
      </div>
      <div class="col-sm-7 col-xs-12">
        <nav class="text-right text-center-xs">
           <a href="#" data-toggle="modal" data-target="#modalPuntosdevista">¿Nos propones un tema?</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>puntos-de-vista-anteriores">Puntos de vista anteriores</a>
        </nav>
      </div>
    </div>
    <div clas="row">
	    <div class="col-md-10 col-md-offset-1 pl-0 pr-0">
	    	<h3 class="pt-14-100 light mt-14 mb-21">Te ofrecemos artículos escritos por líderes de la región latinoamericana: políticas y políticos, especialistas o profesionales relevantes que ponen sobre el papel su experiencia en pro de unas sociedades más equitativas.</h3>
	    </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-md-offset-1">
        <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-md-7">
        <h2 class="mt--5 mb-0 medium"><?php the_title(); ?></h2>
        <p>
	        <?php the_field('profesion'); ?><br>
	      	<?php $autor_puntos = get_field('autor_puntos'); ?>
					<?php if ($autor_puntos!='') { ?>
	      	<small>Tema propuesto por <a href="mailto:<?php the_field('autor_email_puntos'); ?>"><?php the_field('autor_puntos'); ?></a>
	      	<?php } ?>
	      </p>
        <p class="text-left">
        	<?php the_field('descripcion_larga_punto_de_vista'); ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr pb-14 pl-0 pr-0 mt-14">  
			  <h3 class="medium mb-0"><?php the_field('nombre_completo'); ?></h3>
		    <?php the_field('contenido_punto_de_vista'); ?>
        <div class="embed-responsive embed-responsive-16by9">
          <?php $youtube = get_field('video_youtube_puntos_de_vista'); ?>
          <?php if ($youtube!='') { ?>
          	<iframe class="embed-responsive-item" width="100%" height="350" src="//www.youtube.com/embed/<?php the_field('video_youtube_puntos_de_vista'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          <?php } ?>
          <?php $vimeo = get_field('video_vimeo_puntos_de_vista'); ?>
          <?php if ($vimeo!='') { ?>
          	<iframe src="//player.vimeo.com/video/<?php the_field('video_vimeo_puntos_de_vista'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="420" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          <?php } ?>                      
        </div>
        <div class="with-hr">
          <p>
            <?php $facebook_puntosdevista = get_field('facebook_puntosdevista'); ?>
            <?php if ($facebook_puntosdevista!='') { ?>
            <strong>Sígueme en Facebook:</strong> <a href="<?php the_field('facebook_puntosdevista'); ?>" target="_blank"><?php the_field('facebook_puntosdevista'); ?></a><br>
            <?php } ?>
            <?php $twitter_puntosdevista = get_field('cuenta_de_twitter'); ?>
            <?php if ($twitter_puntosdevista!='') { ?>
            <strong>Sígueme en Twitter:</strong> <a href="<?php the_field('cuenta_de_twitter'); ?>" target="_blank"><?php the_field('cuenta_de_twittera'); ?></a><br>
            <?php } ?>
            <?php $google_puntosdevista = get_field('google_puntosdevista'); ?>
            <?php if ($google_puntosdevista!='') { ?>
            <strong>Sígueme en Google+:</strong> <a href="<?php the_field('google_puntosdevista'); ?>" target="_blank"><?php the_field('google_puntosdevista'); ?></a><br>
            <?php } ?>
            <?php $linkedin_puntosdevista = get_field('linkedin_puntosdevista'); ?>
            <?php if ($linkedin_puntosdevista!='') { ?>
            <strong>Sígueme en LinkedIn:</strong> <a href="<?php the_field('linkedin_puntosdevista'); ?>" target="_blank"><?php the_field('linkedin_puntosdevista'); ?></a><br>
            <?php } ?>
            <?php $tema_puntosdevista = get_field('tema_puntosdevista'); ?>
            <?php if ($tema_puntosdevista!='') { ?>
            <strong>Sígueme en Tema:</strong> <a href="<?php the_field('tema_puntosdevista'); ?>" target="_blank"><?php the_field('tema_puntosdevista'); ?></a><br>
            <?php } ?>
            <?php $pais_puntosdevista = get_field('pais_puntosdevista'); ?>
            <?php if ($pais_puntosdevista!='') { ?>
            <strong>Sígueme en Pais:</strong> <a href="<?php the_field('pais_puntosdevista'); ?>" target="_blank"><?php the_field('pais_puntosdevista'); ?></a><br>
            <?php } ?>
            <?php $tipo_de_recurso_puntosdevista = get_field('tipo_de_recurso_puntosdevista'); ?>
            <?php if ($tipo_de_recurso_puntosdevista!='') { ?>
            <strong>Sígueme en Tipo de recurso:</strong> <a href="<?php the_field('tipo_de_recurso_puntosdevista'); ?>" target="_blank"><?php the_field('tipo_de_recurso_puntosdevista'); ?></a><br>
            <?php } ?>
          </p>  
        </div>  
		    <div class="text-center mt-14">
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
		    </div>   
      </div>
    </div>       
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr pt-14 pb-14 pl-0 pr-0">	  
				<?php	if ( is_user_logged_in() ) { ?>
					<?php comments_template();?>
				<?php } else { ?>
					<p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
				<?php }	?>
      </div>
    </div>
    <!--<div class="row">
      <div class="col-sm-10 col-md-offset-1 pl-0 pr-0 mt-21">		  
		    <h3 class="text-gray-darker">Artículos comentados</h3>
		    <ul class="ml--14 grid-list grid-list-2 pb-ch-7 light">
        <?php 
        $args = array(
          'number' => '3'
        );
        $prev_post_id = '';
        $comments = get_comments();?>

        <?php foreach ($comments as $comment) : ?>
          <?php   
            $comm_post_id = $comment->comment_post_ID; 
            $cat = get_the_category( $comm_post_id );
          ?>
          <?php if ( $cat[0]->slug == "puntos-de-vista") : ?>
            <?php if ($prev_post_id != $comm_post_id) : ?>
              <?php $prev_post_id = $comm_post_id; ?>
                <li class="mb-14">

                  <small class="date light"><?php echo(substr( $comment->comment_content, 0, 250 )); ?></small></br>
                  <small class="date light"><?php echo($comment->comment_date);?> 
                  <?php //echo($comment->comment_author);?>
                  <?php
                    $categories = get_the_category($comment->comment_post_ID);
                    $cat_name = $categories[0]->name;
                  ?>
                  | <span><?php echo $comment->comment_author; ?></span>
                  </small> 
                </li>
            <?php endif; ?>
          <?php endif; ?>
          
        <?php endforeach;?>
        </ul>
      </div>
    </div>-->
  </div>
</section>

	<!-- Modal PUNTOS DE VISTA -->
	<div class="modal fade" id="modalPuntosdevista" tabindex="-1" role="dialog" aria-labelledby="modalPuntosdevistaLabel" aria-hidden="true">
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
		      	<h3 class="medium">¿Cuál es tu propuesta de tema?</h3>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 9 ); ?>
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
	<!-- END Modal PUNTOS DE VISTA-->
