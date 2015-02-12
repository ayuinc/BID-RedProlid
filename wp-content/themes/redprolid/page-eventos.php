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
			<h3 class="light text-justify">¿Te resulta difícil estar al día de todos los eventos sobre asuntos de género, políticas públicas, liderazgo y participación de la mujer en política? Aquí tratamos de sistematizar para ti todos esos eventos, incluyendo además los distintos programas de capacitación a los que te puedes presentar. Te ofrecemos también la posibilidad de que tú misma incluyas los eventos que pueden interesarnos y que encuentres que faltan en la sección.</h3>
    </div>
	</section>		
	
	<section class="bg-panel pt-21 pb-28 mb-21">
	  <div class="container ph-70-md">
	  	<h2>Eventos destacados</h2>
	  	<div id="carousel-eventos-destacados" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
					<!-- Start the Loop. -->
					<?php $aux = 0; ?>
					<?php if ( have_posts() ) : ?>
            <?php query_posts( array( 'category_name' => 'eventos-destacados', 'posts_per_page' => 3 ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
		        	<div class="item <?php if ($aux == 0) { ?> active <?php $aux++; } ?>">
		        		<div class="banner">
		        			<div class="banner-pic col-sm-4" style="background-image: url(<?php the_field('imagen_evento'); ?>)"></div>
		        			<div class="banner-content col-sm-8">
		        				<h3 class="medium mt-7 mb-14 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
		        				<p><?php the_field('descripcion_evento'); ?></p>
		        				<?php $tempDate = get_the_date(); ?>
		              	<p>
		                	<strong>Fecha:</strong> <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?><br>
		                	<strong>Hora:</strong> <?php the_field('hora_evento'); ?><br>
		                	<strong>Lugar:</strong> <?php the_field('lugar_evento'); ?><br>
		                	<strong>Organizan:</strong> <?php the_field('organizan_evento'); ?><br>
											<strong>Convocan:</strong> <?php the_field('convocan'); ?>
		                </p>
		                <p class="text-right mt-14 medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Más Información >></a></p>
		        			</div>
		        		</div>
		        	</div>
	          <?php endwhile; ?>
					<?php endif; ?>	
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-eventos-destacados" role="button" data-slide="prev">
          <span class="icon-prev out"></span>
        </a>
        <a class="right carousel-control" href="#carousel-eventos-destacados" role="button" data-slide="next">
          <span class="icon-next out"></span>
        </a>
      </div> <!-- END:CAROUSEL -->
	  </div>
	</section> 
	          
	<section>
	  <div class="container">
			<h2>Próximos eventos</h2>
			<hr>
    	<!-- Start the Loop. -->
    	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    	<?php query_posts( 'cat=11&posts_per_page=10&paged=' . $paged ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
	  	<div class="banner half-height">
	  		<div class="banner-pic col-sm-2 bg-panel text-center lead-ch normalize-text">
	  			<?php $tempDate = get_the_date(); ?>
	  			<h3 class="h1"><?php echo date_i18n('j', strtotime( $tempDate)); ?></h3>
			    <p><?php echo date_i18n('M', strtotime( $tempDate)); ?></p>
	  		</div>
	  		<div class="banner-content flex-none col-sm-10">
	  			<h4 class="medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h4>
          <p>
            <strong>Lugar:</strong> <?php the_field('lugar_evento'); ?><br>
            <strong>Hora:</strong> <?php the_field('hora_evento'); ?><br>
            <strong>Organizan:</strong> <?php the_field('organizan_evento'); ?><br>
            <strong>Convocan:</strong> <?php the_field('convocan'); ?>
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
      <div class="text-center">
        <ul class="pager">
          <li><?php next_posts_link( 'Anteriores' ); ?></li>
          <li><?php previous_posts_link( 'Posteriores' ); ?></li>
        </ul>
      </div> 
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
	        <div class="clearfix sub-header sub-header-sm">
		        <div class="col-sm-1 col-xs-3">
		          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-topic-icon.png" alt="" width="100%"></div>
		        </div>
		        <div class="col-sm-5 col-xs-9"></div>
		        <div class="col-sm-6 col-xs-12"></div>
		      </div>
		      <?php if ( is_user_logged_in() ) { ?>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 4 ); ?>
						<?php } ?>
					<?php } else { ?>
						<div class="row">
				  		<div class="col-sm-6 col-sm-offset-3">
				  			<div class="user-sign-in-form pv-21">
					  			<h2 class="medium">Ingresa al sistema</h2>
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
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar X</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END Modal EVENTOS-->	

<?php get_footer(); ?>    