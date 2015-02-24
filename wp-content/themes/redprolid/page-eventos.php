<?php
/*
Template Name: Noticias
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

	<section class="mt-7"> 
    <div class="container">
      <?php the_breadcrumb(); ?> 
      <div class="clearfix sub-header">
        <div class="col-sm-1 col-xs-3">
          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/eventos-icon-circle.png" alt="" width="100%"></div>
        </div>
        <div class="col-sm-5 col-xs-9">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-sm-6 col-xs-12">
          <nav class="text-right text-center-xs">
            <a href="#" data-toggle="modal" data-target="#modalEventos">¿Quieres proponernos un evento?</a> <span class="brand-primary">|</span> <a href="<?php echo home_url('/'); ?>eventos-anteriores">Eventos anteriores</a>
          </nav>          
        </div>
      </div>
			<h3 class="light text-justify pb-28">¿Te resulta difícil estar al día de todos los eventos sobre asuntos de género, políticas públicas, liderazgo y participación de la mujer en política? Aquí tratamos de sistematizar para ti todos esos eventos, incluyendo además los distintos programas de capacitación a los que te puedes presentar. Te ofrecemos también la posibilidad de que tú misma incluyas los eventos que pueden interesarnos y que encuentres que faltan en la sección.</h3>
    </div>
	</section>		
	
	<section class="bg-panel pv-28">
	  <div class="container ph-70-md">
	  	<h2>Últimos eventos</h2>
	  	<div class="gallery js-flickity grid-list grid-list-12 grid-list-1-xs" data-flickity-options='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
				<?php if ( have_posts() ) : ?>
        	<?php query_posts( 'category_name=eventos&posts_per_page=3&order=DESC' ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
		  			<div class="gallery-cell grid-list-item" style="min-height: 350px;">
		  				<div class="banner borderless">
		        		<?php $imagen_evento = get_field('imagen_evento'); ?>
			        	<?php if ($imagen_evento!='') { ?>	
	        				<div class="banner-pic col-sm-4 mt-28" style="background-image: url(<?php the_field('imagen_evento'); ?>)"></div>
	        			<?php } else { ?>
	        				<div class="banner-pic col-sm-4 mt-28" style="background-image: url('/wp-content/uploads/2015/02/eventos_redprolid.png');"></div>
	        			<?php } ?>
	        			<div class="banner-content col-sm-8">
	        				<h3 class="medium mt-7 mb-14 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
	        				<p><?php the_field('descripcion_evento'); ?></p>
	        				<?php $tempDate = get_the_date(); ?>
	              	<p>
							      <?php $tempDate = get_field('fecha_inicio_evento'); ?>
							      <strong>Fecha de inicio:</strong> <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?><?php $lhora_evento = get_field('hora_evento'); ?><?php if ($hora_evento!='') { ?>, <?php the_field('hora_evento'); ?><?php } ?><br>
							      <?php $tempDateFin = get_field('fecha_fin_evento'); ?>
							      <?php if ($tempDateFin!='') { ?>
							      <strong>Fecha de fin:</strong> <?php echo date_i18n('j', strtotime( $tempDateFin)); ?> de <?php echo date_i18n('F', strtotime( $tempDateFin)); ?> de <?php echo date_i18n('Y', strtotime( $tempDateFin)); ?><br>
							      <?php } ?>
	                	<?php $lugar_evento = get_field('lugar_evento'); ?>
										<?php if ($lugar_evento!='') { ?>						
	                	<strong>Lugar:</strong> <?php the_field('lugar_evento'); ?><br>
	                	<?php } ?>
	                	<?php $organizan_evento = get_field('organizan_evento'); ?>
										<?php if ($organizan_evento!='') { ?>		                	
	                	<strong>Organizan:</strong> <?php the_field('organizan_evento'); ?><br>
	                	<?php } ?>
	                	<?php $convocan = get_field('convocan'); ?>
										<?php if ($convocan!='') { ?>		                	
										<strong>Convocan:</strong> <?php the_field('convocan'); ?>
										<?php } ?>
	                </p>
	                <p class="text-right mt-14 medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Más información >></a></p>
	        			</div>
	        		</div>
		  			</div>
  				<?php endwhile; ?>
				<?php endif; ?>	
  		</div>
  	</div>
	</section> 
	          
	<section class="pv-28">
	  <div class="container-sm">
			<h2>Otros eventos</h2>
			<hr>
    	<!-- Start the Loop. -->
    	<?php query_posts( 'cat=11&posts_per_page=4&offset=3'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
	  	<div class="banner half-height">
	  		<div class="banner-pic col-sm-2 bg-panel text-center lead-ch normalize-text">
	  			<?php $tempDate = get_field('fecha_inicio_evento'); ?>
	  			<h3 class="h1"><?php echo date_i18n('j', strtotime( $tempDate)); ?></h3>
			    <p><?php echo date_i18n('M', strtotime( $tempDate)); ?></p>
	  		</div>
	  		<div class="banner-content flex-none col-sm-10">
	  			<h4 class="medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h4>
          <p>
	        	<?php $lugar_evento = get_field('lugar_evento'); ?>
						<?php if ($lugar_evento!='') { ?>		          
            <strong>Lugar:</strong> <?php the_field('lugar_evento'); ?><br>
            <?php } ?>
	        	<?php $hora_evento = get_field('hora_evento'); ?>
						<?php if ($hora_evento!='') { ?>	            
            <strong>Hora:</strong> <?php the_field('hora_evento'); ?><br>
            <?php } ?>
	        	<?php $organizan_evento = get_field('organizan_evento'); ?>
						<?php if ($organizan_evento!='') { ?>	                        
            <strong>Organizan:</strong> <?php the_field('organizan_evento'); ?><br>
            <?php } ?>
	        	<?php $convocan = get_field('convocan'); ?>
						<?php if ($convocan!='') { ?>	                        
            <strong>Convocan:</strong> <?php the_field('convocan'); ?>
            <?php } ?>
          </p>
          <p>Para mayores informes contactar a <a href="mailto:<?php the_field('contacto_email_evento'); ?>"><?php the_field('contacto_nombre_evento'); ?></a></p>
          <small>
          	<?php if ($publicacion!='') { ?> 
							/ <a href="<?php the_field('link_publicacion_noticias'); ?>"><?php the_field('publicacion_noticias'); ?></a>
						<?php } ?>
					</small>
	  		</div>
	  	</div>
      <?php endwhile; ?> 
	  </div>
	</section>
	
	<!-- Modal EVENTOS -->
	<div class="modal fade" id="modalEventos" tabindex="-1" role="dialog" aria-labelledby="modalEventosLabel" aria-hidden="true">
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
		      	<h3 class="medium">¿Quieres proponernos un evento?</h3>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 4 ); ?>
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
	<!-- END Modal EVENTOS-->	

<?php get_footer(); ?>    