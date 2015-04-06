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
              // Define custom query parameters
              $custom_query_args = array( /* Parameters go here */ );

              // Get current page and append to custom query parameters array
              //$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

              // Instantiate custom query
              $custom_query = new WP_Query( $custom_query_args );

              // Pagination fix
              $temp_query = $wp_query;
              $wp_query   = NULL;
              $wp_query   = $custom_query;

              // Output custom query loop
              if ( $custom_query->have_posts() ) :
                  while ( $custom_query->have_posts() ) :
                      $custom_query->the_post();?>
                      <li>
                        <h4 class="medium m-0"><?php the_title(); ?></h4>
                        <?php $conte = (wp_get_post_terms(get_the_ID(),'country',array("fields" => "names"))[0]); ?>
                        <?php $tempDate = get_the_date(); ?>
                        <small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>  
                        <small><a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve más >></a></small>
                        <hr>
                      </li>
                <?php
                  endwhile;
              endif;
              // Reset postdata
              wp_reset_postdata();
                ?>
              <!-- Custom query loop pagination -->
               <div class="text-center">
                <ul class="pager">
                  <li><?php previous_posts_link( 'Anterior' ); ?></li>
                  <li><?php next_posts_link( 'Siguiente', $custom_query->max_num_pages ); ?></li>
                </ul>
              </div> 
              <?php
              // Reset main query object
              $wp_query = NULL;
              $wp_query = $temp_query;
             ?>
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
