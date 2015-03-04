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
          <ol>
          <?php $resultado = $_GET['s']; ?>
          <?php if ($resultado!='') { ?>  
            <?php 
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array('posts_per_page' => 15, 'paged' => $paged );
            // the query
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

              <!-- pagination here -->

              <!-- the loop -->
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                  <h4 class="medium m-0"><?php the_title(); ?></h4>
                  <?php $conte = (wp_get_post_terms(get_the_ID(),'country',array("fields" => "names"))[0]); ?>
                  <?php $tempDate = get_the_date(); ?>
                  <small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>  
                  <p class="m-0">
                    <?php 
                      switch (true) {
                        case the_field('contenido_punto_de_vista'):
                          echo the_field('contenido_punto_de_vista');
                          break;
                        case the_field('contenido_campeona'):
                          echo the_field('contenido_campeona');
                          break;
                        case the_field('contenido_concurso'):
                          echo the_field('contenido_concurso');
                          break;
                        case the_field('contenido-debates'):
                          echo the_field('contenido-debates');
                          break;
                        case the_field('contenido-dtl'):
                          echo the_field('contenido-dtl');
                          break;
                        case the_field('contenido-dtl-seccion'):
                          echo the_field('contenido-dtl-seccion');
                          break; 
                        case the_field('contenido_evento'):
                          echo the_field('contenido_evento');
                          break; 
                        case the_field('contenido_noticias'):
                          echo the_field('contenido_noticias');
                          break;  
                        case the_field('descripcion_video'):
                          echo the_field('descripcion_video');
                          break;                                        
                      }
                    ?>
                  </p>
                  <small><a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve más >></a></small>
                  <hr>
                </li>
              <?php endwhile; ?>
              <!-- end of the loop -->

              <!-- pagination here -->
              <div class="text-center">
                <ul class="pager">
                  <li><?php previous_posts_link( 'Anterior' ); ?></li>
                  <li><?php next_posts_link( 'Siguiente' ); ?></li>
                </ul>
              </div>

              <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </ol>
          

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
