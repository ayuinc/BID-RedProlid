<?php
/*
Template Name: Concursos
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div class="">
	<section class="mt-7"> 
	  <div class="container">
	    <?php the_breadcrumb(); ?>
	    <div class="clearfix sub-header">
        <div class="col-sm-1 col-xs-3">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle.png" alt="" width="100%"></div>
		    </div>
        <div class="col-sm-5 col-xs-9">
          <h1 class="brand-titular">Concursos</h1>
        </div>
        <div class="col-sm-6 col-xs-12">
          <nav class="text-right text-center-xs">
            <a href="#" data-toggle="modal" data-target="#modalConcurso">¿Quieres proponer un concurso?</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>/concursos/concursos-anteriores">Concursos anteriores</a>
          </nav>
        </div>
	    </div>
	    <!-- IF NO POSTS in FOROS -->
	    <!-- <div class="pv-21 text-center">
	    	<h3>Próximamente anunciaremos nuestro primer concurso</h3>
	    	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/concursos-proximamente.jpg" alt="" class="img-responsive">
	    </div> -->
	    <!-- END:IF NO POSTS in FOROS -->
    	<?php query_posts( 'category_name=concursos&posts_per_page=1' ); ?>	
			<?php while ( have_posts() ) : the_post(); ?>  	    
	    <div class="row">		    
	    	<div class="col-sm-7">
					<h3 class="light">¿Quieres ganar premios que te ayuden en tu desarrollo profesional? Participa en los concursos de la Red aportando ideas, relatando tus experiencias y compartiendo tu creatividad.</h3>
			    <hr>    
			    <h2 class="medium"><?php the_title(); ?></h2>         
			    <p><?php the_field('descripcion_concurso'); ?></p>  
			    <p class="light"><?php the_field('contenido_concurso'); ?></p>
			    <p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>"  class="btn btn-primary">Ir al concurso >></a></p>
	    	</div>
	    	<div class="col-sm-1"></div>
	    	<div class="col-sm-4">
	    		<div class="bg-panel minh-560">
	    			<div class="bg-img-block minh-210" style="background-image: url(<?php the_field('imagen_concurso'); ?>)"></div>
	    			<div class="p-14">
		    			<ul class="span-gray normalize-text mb-ch-14">
		    				<li>
		    					<h5>Vigencia del concurso:</h5>
		    					<span><?php the_field('vigencia_concurso'); ?></span>
		    				</li>
		    				<li>
		    					<h5>Fecha:</h5>
		    					<span>Del <?php the_field ('fecha_inicio_concurso'); ?> al <?php the_field ('fecha_fin_concurso'); ?></span>
		    				</li>
		    				<li>
		    					<a href="<?php echo get_permalink( get_the_ID() ); ?>#terminos-y-condiciones">Términos y condiciones del concurso</a>
		    				</li>
		    			</ul>
		    			<div class="text-center">
			    			<h3>
			    				Participa en el concurso inscribiéndote
			    			</h3>
		    				<a href="#" class="btn btn-primary">Aquí</a>
		    			</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <?php endwhile; ?>
	  </div> 
	</section>
</div>

	<!-- Modal CONCURSO -->
	<div class="modal fade" id="modalConcurso" tabindex="-1" role="dialog" aria-labelledby="modalConcursoLabel" aria-hidden="true">
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
		      	<h3>¿Quieres proponer un concurso?</h3>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 8 ); ?>
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
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar X</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END Modal CONCURSO-->	

<?php get_footer(); ?>    