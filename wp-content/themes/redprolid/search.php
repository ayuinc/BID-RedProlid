<?php
/**
 * The template for displaying Search Results pages
 *
 */

get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<div>
  <section id="search">
    <div class="container relative mh-140 mt-14">
      <div class="clearfix bg-panel sub-header">
        <div class="col-sm-1">
          <div>
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-3-alpha.png" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-7">
          <div>
            <h1>Resultados de tu búsqueda</h1>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="text-right">
            <p class="m-0">Resultados: 
            <span>
						<?php 
							$num = $wp_query->post_count; 
							if (have_posts()) : 
								echo $num; 
							endif;?> 
							<?php $cantidad = 0; ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php $cantidad++; ?>
              <?php endwhile; ?>
              <?php $cantidad; ?>							
            </span>
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container pt-21">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
	        <?php $resultado = $_GET['s']; ?>
	        <?php if ($resultado!='') { ?>
          <ul>

            <?php 
            // the query to set the posts per page to 10
            // $paged = (get_query_var('page')) ? get_query_var('page') : 1;
            // $args = array('posts_per_page' => 15, 'page' => $paged );
            // query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
              <li class="list-unstyled">
                <h4 class="medium m-0"><?php the_title(); ?></h4>
                <?php $conte = (wp_get_post_terms(get_the_ID(),'country',array("fields" => "names"))[0]); ?>
                <?php $recursos_autor = get_field('recurso_autor'); ?>
                <?php if ($recursos_autor!='') { ?>
                	<p>
	                	<?php $coma = 0; ?>
                		<?php $recurso_autor = get_field('recurso_autor'); ?>
										<?php if ($recurso_autor!='') { ?>
                		<strong>Autor: <?php the_field('recurso_autor'); ?></strong><?php $coma++; ?><?php } ?><?php $recurso_ano_de_publicacion = get_field('recurso_año_de_publicacion'); ?><?php if ($recurso_ano_de_publicacion!='') { ?><?php if ($coma==1) { ?>, <?php } ?><?php the_field('recurso_año_de_publicacion'); ?><?php } ?>
                	</p>
                <?php } else { ?>
                	<?php $fecha_entrevista = get_field ('fecha_entrevista'); ?>
                	<?php if ($fecha_entrevista!='') { ?>
                		<p><?php echo date_i18n('j', strtotime( $fecha_entrevista)); ?> de <?php echo date_i18n('F', strtotime( $fecha_entrevista)); ?> de <?php echo date_i18n('Y', strtotime( $fecha_entrevista)); ?></p> 
                	<?php } ?>
                	<?php $fecha_inicio_concurso = get_field ('fecha_inicio_concurso'); ?>
                	<?php if ($fecha_inicio_concurso!='') { ?>
                		<p><?php echo date_i18n('j', strtotime( $fecha_inicio_concurso)); ?> de <?php echo date_i18n('F', strtotime( $fecha_inicio_concurso)); ?> de <?php echo date_i18n('Y', strtotime( $fecha_inicio_concurso)); ?></p> 
                	<?php } ?>
                	<?php $fecha_inicio_evento = get_field ('fecha_inicio_evento'); ?>
                	<?php if ($fecha_inicio_evento!='') { ?>
                		<p><?php echo date_i18n('j', strtotime( $fecha_inicio_evento)); ?> de <?php echo date_i18n('F', strtotime( $fecha_inicio_evento)); ?> de <?php echo date_i18n('Y', strtotime( $fecha_inicio_evento)); ?></p> 
                	<?php } ?> 
                	<?php $video_fecha_publicacion = get_field ('video_fecha_publicacion'); ?>
                	<?php if ($video_fecha_publicacion!='') { ?>
                		<p><?php echo date_i18n('j', strtotime( $video_fecha_publicacion)); ?> de <?php echo date_i18n('F', strtotime( $video_fecha_publicacion)); ?> de <?php echo date_i18n('Y', strtotime( $video_fecha_publicacion)); ?></p> 
                	<?php } ?>    
                	<?php if (in_category('noticias')) { ?>
                		<?php $tempDate = get_the_date(); ?>
                		<p><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></p>
                	<?php } ?>            	               	                	
                	<?php //$tempDate = get_the_date(); ?>
									 <!--<p><?php //echo date_i18n('j', strtotime( $tempDate)); ?> de <?php //echo date_i18n('F', strtotime( $tempDate)); ?> de <?php //echo date_i18n('Y', strtotime( $tempDate)); ?></p>--> 
								<?php } ?>
                <p class="m-0">
                  <?php 
                    // switch (true) {
                    //   case the_field('contenido_punto_de_vista'):
                    //     echo the_field('contenido_punto_de_vista');
                    //     break;
                    //   case the_field('contenido_campeona'):
                    //     echo the_field('contenido_campeona');
                    //     break;
                    //   case the_field('contenido_concurso'):
                    //     echo the_field('contenido_concurso');
                    //     break;
                    //   case the_field('contenido-debates'):
                    //     echo the_field('contenido-debates');
                    //     break;
                    //   case the_field('contenido-dtl'):
                    //     echo the_field('contenido-dtl');
                    //     break;
                    //   case the_field('contenido-dtl-seccion'):
                    //     echo the_field('contenido-dtl-seccion');
                    //     break; 
                    //   case the_field('contenido_evento'):
                    //     echo the_field('contenido_evento');
                    //     break; 
                    //   case the_field('contenido_noticias'):
                    //     echo the_field('contenido_noticias');
                    //     break;  
                    //   case the_field('descripcion_video'):
                    //     echo the_field('descripcion_video');
                    //     break;                                        
                    // }
                  ?>
                </p>
                <small><a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve más >></a></small>
                <hr>
              </li>
              <?php endwhile; ?>
            <?php endif; ?> 
          </ul>

          <div class="text-center">
            <ul class="pager">
              <li><?php next_posts_link( 'Siguientes' ); ?></li>
              <li><?php previous_posts_link( 'Anteriores' ); ?></li>
            </ul>
          </div>

          <?php } else { ?>
          <h3 class="medium text-center">No insertaste ninguna palabra o frase para buscar. Vuelve a intentarlo.</h3>
          <?php } ?>

        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
