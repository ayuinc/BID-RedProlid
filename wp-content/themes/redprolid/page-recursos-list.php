<?php
/*
Template Name: Recursos list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

	<section class="pv-7"> 
    <div class="container">
      <?php the_breadcrumb(); ?> 
      <div class="clearfix sub-header">
        <div class="col-sm-1 col-xs-3">
          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/publicaciones.png" alt="" width="100%"></div>
        </div>
        <div class="col-sm-5 col-xs-9">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-sm-6 col-xs-12">
          <nav class="text-right text-center-xs">
            <a href="#" data-toggle="modal" data-target="#modalRecursos">¿Quieres compartir una publicación?</a> <span class="text-primary">|</span> <a href="<?php echo content_url('/'); ?>enterate">Entérate</a>
          </nav>	          
        </div>
      </div>
	    <div class="row text-justify">
				<div class="col-md-12">
					<h3 class="light mb-14">Hemos identificado y ordenado para ti en este espacio diversas publicaciones sobre temas que nos interesan porque tratan sobre el liderazgo, la igualdad y el empoderamiento de la mujer: guías de capacitación, folletos, informes e investigaciones, legislación, libros, revistas, boletines, blogs...Por supuesto, también estás invitada a participar aportando tus comentarios a las publicaciones que te atraigan y compartiendo con nosotras las que te parezcan relevantes.</h3>
				</div>
	    </div>	
    </div>
	</section>

<section id="puntos-de-vista-anteriores mt-35">
  <div class="container">
    <?php // the_breadcrumb(); ?>
    <!--<div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Recursos</h1>
          <div class="col-xs-12 col-sm-7">
            <nav class="text-right text-center-xs mb-0 mt-0">
              <a href="#" data-toggle="modal" data-target="#modalRecursos">¿Quieres compartir un recurso?</a> <span class="text-primary">|</span> <a href="<?php echo content_url('/'); ?>enterate">Entérate >></a>
            </nav>
          </div>          
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" width="94px" height="auto" alt="">
      </div>
    </div>	-->      
    <div class="ph-70 mt-35">
      <div class="row">
        <div class="col-sm-12">
        	<?php add_filter('post_limits', 'my_post_limit'); ?>
        	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					<?php
					$count = 0;	
					global $myOffset;
					$myOffset = 3;
					$temp = $wp_query;
					$wp_query= null;
					$wp_query = new WP_Query();
					$wp_query->query('category_name=recursos&meta_key=recurso_año_de_publicacion&orderby=meta_value_num&offset='.$myOffset.'&showposts=10&paged='.$paged);
					?>	 					       
	        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>            
            <div class="title">
              <h3 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
		          <p>
			          <?php $coma = 0; ?>
			          <?php $recurso_autor = get_field('recurso_autor'); ?>
								<?php if ($recurso_autor!='') { ?>
            		<strong>Autor: <?php the_field('recurso_autor'); ?></strong><?php $coma++; ?><?php } ?><?php $recurso_ano_de_publicacion = get_field('recurso_año_de_publicacion'); ?><?php if ($recurso_ano_de_publicacion!='') { ?><?php if ($coma==1) { ?>, <?php } ?> <?php the_field('recurso_año_de_publicacion'); ?><?php } ?>
		  				</p>               
            </div>
            <div class="content mb-7">
              <?php the_field('recurso_descripcion'); ?>
							<p><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="text-primary">Lee más >></a></p>
            </div>
            <hr>
            <?php $count++; ?>
          <?php endwhile; ?>
          
          <?php if ($count!=0) { ?>
          <div class="text-center">
            <ul class="pager">
              <li><?php next_posts_link( 'Siguientes' ); ?></li>
              <li><?php previous_posts_link( 'Anteriores' ); ?></li>
            </ul>
          </div>  
          <?php } else { ?>
          	<div class="text-center pv-70">
          		<h3 class="medium">No hay más eventos. <a href="javascript:history.back();">Regresa</a></h3>
          	</div>
          <?php } ?> 
					<?php $wp_query = null; $wp_query = $temp;?>
					<?php remove_filter('post_limits', 'my_post_limit'); ?>           
        </div>
      </div>          
    </div>
  </div>
</section>
	<!-- Modal RECURSO -->
	<div class="modal fade" id="modalRecursos" tabindex="-1" role="dialog" aria-labelledby="modalRecursosLabel" aria-hidden="true">
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
		      	<h3 class="medium">¿Quieres compartir una publicación?</h3>
		      	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
							<?php ninja_forms_display_form( 10 ); ?>
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
	<!-- END Modal RECURSOS-->  
<?php get_footer(); ?>