<?php $flag = $_GET['flag']; ?>
<?php if ($flag!='') { ?>
<section class="bg-white pv-70 entrevista-a">
	<div class="container-sm ph-56-md">
		<h4 class="bold mb-0"><?php the_field('nombre_completo'); ?></h4>		
		<?php $tempDate = get_field('fecha_publicacion_puntosdevista'); ?>
		<?php if ($tempDate!='') { ?>
		<p class="thin text-gray text-left">Publicado el <?php echo date_i18n('d-m-Y', strtotime( $tempDate)); ?></p>
		<?php } ?> 							 		
		<div class="text-center pt-21 pb-21">
      <?php $imagen_punto_de_vista = get_field('imagen_punto_de_vista'); ?>
      <?php if ($imagen_punto_de_vista!='') { ?>
      	<img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="<?php the_title(); ?>" style="width:100%;">
      <?php } ?>			
      <?php $video = get_field('video_youtube_puntos_de_vista'); ?>
      <?php if ($video!='') { ?>
      	<iframe  class="embed-responsive-item" width="100%" height="340" src="https://www.youtube.com/embed/<?php the_field('video_youtube_puntos_de_vista'); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      <?php } ?>
      <?php $video_vimeo = get_field('video_vimeo_puntos_de_vista'); ?>
      <?php if ($video_vimeo!='') { ?>
      	<iframe src="//player.vimeo.com/video/<?php the_field('video_vimeo_puntos_de_vista'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="340" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <?php } ?> 			
		</div>
    <?php the_field('profesion'); ?>
  	<?php $autor_puntos = get_field('autor_puntos'); ?>
		<?php if ($autor_puntos!='') { ?>
  	<p class="text-gray-dark f-s-19 mv-14">Tema propuesto por <a href="mailto:<?php the_field('autor_email_puntos'); ?>"><?php the_field('autor_puntos'); ?></p>
  	<?php } ?>		
		<div class="collapse-bio">
			<div class="row">
				<div class="col-xs-12 hidden-md hidden-lg text-left thin">
					<?php $facebook_campeonas = get_field('facebook_puntosdevista'); ?>
					<?php $twitter_campeona = get_field('cuenta_de_twitter'); ?>
					<?php if (($facebook_campeonas!='') && ($twitter_campeona!='')) { ?>
					Sígueme en las redes
					<?php } ?>
					<?php if ($facebook_campeonas!='') { ?> 
					<a href="<?php echo $facebook_campeonas; ?>" target="_blank"><img src="<?php echo content_url('/'); ?>uploads/2016/02/facebook2.png" alt="Facebook" width="22"></a>
					<?php } ?>
					<?php if ($twitter_campeona!='') { ?>
					<a href="<?php echo $twitter_campeona; ?>" target="_blank"><img src="<?php echo content_url('/'); ?>uploads/2016/02/twitter2.png" alt="Twitter" width="22"></a>
					<?php } ?>
				</div>
				<div class="col-md-6 col-xs-12 text-left">
					<a id="btnbiografia">Lee su breve biografía <img style="width:5%;" src="<?php echo content_url('/'); ?>uploads/2016/02/arrow-down-o.svg" alt="arrow down"></a>
				</div>
				<div class="col-md-6 hidden-xs hidden-sm text-right thin"> 
					<?php $facebook_campeonas = get_field('facebook_puntosdevista'); ?>
					<?php $twitter_campeona = get_field('cuenta_de_twitter'); ?>
					<?php if (($facebook_campeonas!='') && ($twitter_campeona!='')) { ?>
					Sígueme en las redes
					<?php } ?>
					<?php if ($facebook_campeonas!='') { ?> 
					<a href="<?php echo $facebook_campeonas; ?>" target="_blank"><img src="<?php echo content_url('/'); ?>uploads/2016/02/facebook2.png" alt="Facebook" width="22"></a>
					<?php } ?>
					<?php if ($twitter_campeona!='') { ?>
					<a href="<?php echo $twitter_campeona; ?>" target="_blank"><img src="<?php echo content_url('/'); ?>uploads/2016/02/twitter2.png" alt="Twitter" width="22"></a>
					<?php } ?>
				</div>
				<div class="col-md-12 col-xs-12 pv-21">
					<h3 class="text-gray-darker color-g bold text-left pb-0 mb-0"><?php the_title(); ?></h3>
					<p class="text-gray thin"><?php the_field('descripcion_larga_punto_de_vista'); ?></p>
				</div>
			</div>
		</div>
		<div class="border-bottom-gray-light pv-14"></div>
		<div class="entrevista">
			<p><?php the_field('intro_entrevista_campeona'); ?></p>
			<?php the_field('contenido_punto_de_vista'); ?>
		</div>
		<?php get_template_part( 'include', 'encuestassugeridas' ); ?>
		<?php get_template_part( 'include', 'registroemail' ); ?>
	  <div class="row">
			<div class="col-sm-12 pv-21">  
				<?php	if ( is_user_logged_in() ) { ?>
					<?php comments_template();?>
				<?php } else { ?>
			   <p>Para poder comentar es necesario que <a href="/registrate/">inicies tu sesión o te registres</a> en Red PROLID.</p>
				<?php }	?>
			</div>
		</div>
	</div>
</section>
				
<?php } else { ?>

<section id="puntos-de-vista" class="mt-7">
  <div class="container relative mb-14">
    <?php the_breadcrumb(); ?>
    <div class="row clearfix sub-header">
      <div class="icon-punto-de-vista col-lg-1 col-sm-12 text-center-sm hidden-xs txt-center-landscape-ipad">
        <div><img class="txt-mt-res-landscape" src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-icon.png" alt="" width="100%"></div>
      </div>
      <div class="col-lg-4 col-sm-12 text-center-sm  col-xs-12 text-center-xs pl-14">
        <h1 class="brand-titular txt-center-landscape-ipad">Puntos de vista</h1>
      </div>
      <div class="col-lg-7 pr-0-lg col-sm-12 col-xs-12">
        <nav class="text-right text-center-sm text-center-xs txt-center-landscape-ipad">
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
      <div class="col-md-3 col-sm-12 text-center-sm col-md-offset-1">
        <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="" style="width:100%;">
      </div>
      <div class="col-md-7">
        <h2 class="mt--5 pt-14-sm mb-0 medium"><?php the_title(); ?></h2>
		    <?php $tempDate = get_field('fecha_publicacion_puntosdevista'); ?>
				<?php if ($tempDate!='') { ?>
				<p class="thin text-gray text-left">Publicado el <?php echo date_i18n('d-m-Y', strtotime( $tempDate)); ?></p>
				<?php } ?> 		
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
    <div class="row ph-14-sm">
      <div class="col-lg-10 col-sm-12 text-left-sm col-md-offset-1 with-hr pb-14 pl-0 pr-0 mt-14">  
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
        <div class="col-sm-12 with-hr">
          <p class="ph-14-sm">
	          <strong>Sígueme: </strong>
		      	<?php $facebook_puntosdevista = get_field('facebook_puntosdevista'); ?>
						<?php if ($facebook_puntosdevista!='') { ?>
		      	<a href="<?php echo $facebook_puntosdevista; ?>" target="_blank"><img src="<?php echo content_url('/'); ?>uploads/2016/02/facebook2.png" alt="Facebook" width="22"></a>
		      	<?php } ?>            
            <?php $twitter_puntosdevista = get_field('cuenta_de_twitter'); ?>
            <?php if ($twitter_puntosdevista!='') { ?>
            <a href="http://twitter.com/<?php the_field('cuenta_de_twitter'); ?>" target="_blank"><img src="<?php echo content_url('/'); ?>uploads/2016/02/twitter2.png" alt="Twitter" width="22"></a>
            <?php } ?>
            <?php $google_puntosdevista = get_field('google_puntosdevista'); ?>
            <?php if ($google_puntosdevista!='') { ?>
            <a href="<?php the_field('google_puntosdevista'); ?>" target="_blank"><img src="<?php echo content_url('/'); ?>uploads/2016/05/Google-Plus-Filled-50.png" alt="Google" width="22"></a>
            <?php } ?>
            <?php $linkedin_puntosdevista = get_field('linkedin_puntosdevista'); ?>
            <?php if ($linkedin_puntosdevista!='') { ?>
            <a href="<?php the_field('linkedin_puntosdevista'); ?>" target="_blank"><img src="<?php echo content_url('/'); ?>uploads/2016/05/LinkedIn-Filled-50.png" alt="Linkedin" width="22"></a>
            <?php } ?>
            <br>
            <?php $tema_pdv = get_field('tema_pdv'); ?>
            <?php if ($tema_pdv!='') { ?>
            <strong>Tema:</strong> <a><?php the_field('tema_pdv'); ?></a><br>
            <?php } ?>
            <?php $pais_pdv = get_field('pais_pdv'); ?>
            <?php if ($pais_pdv!='') { ?>
            <strong>País:</strong> <a><?php the_field('pais_pdv'); ?></a><br>
            <?php } ?>
            <?php $tipo_de_recurso_puntosdevista = get_field('tipo_de_recurso_puntosdevista'); ?>
            <?php if ($tipo_de_recurso_puntosdevista!='') { ?>
            <strong>Tipo de recurso:</strong> <a><?php the_field('tipo_de_recurso_puntosdevista'); ?></a><br>
            <?php } ?>
          </p>  
        </div>  
		    <div class="text-center mt-14">
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
		    </div>   
      </div>
    </div>       
    <div class="row">
      <div class="col-lg-10 col-sm-12 col-md-offset-1 with-hr pt-14 pb-14 pl-0 pr-0">	  
				<?php	if ( is_user_logged_in() ) { ?>
					<?php comments_template();?>
				<?php } else { ?>
          <p>Para poder comentar es necesario que <a href="/registrate/">inicies tu sesión o te registres</a> en Red PROLID.</p>
				<?php }	?>
      </div>
    </div>
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
<?php } ?>


<script type="text/javascript">
	$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

	});
</script>
<script>
		$("#btnbiografia").on('click',function(e){
	   e.preventDefault();
	   $(this).parents().toggleClass('active');
	 });
</script>
