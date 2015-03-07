<?php
/*
Template Name: Noticias list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section id="puntos-de-vista-anteriores">
  <div class="container">
    <?php the_breadcrumb(); ?>
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Noticias anteriores</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>noticias">Noticias >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon-alpha.png" width="94px" height="auto" alt="">
      </div>
    </div>	      
    <div class="ph-70">
      <div class="row">
        <div class="col-sm-12">
	        <?php add_filter('post_limits', 'my_post_limit'); ?>
	        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					<?php
					$count = 0;	
					global $myOffset;
					$myOffset = 11;
					$temp = $wp_query;
					$wp_query= null;
					$wp_query = new WP_Query();
					$wp_query->query('category_name=noticias&offset='.$myOffset.'&showposts=10&paged='.$paged);
					?>	 					       
          <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="title">
              <h3 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <?php $publicacion = get_field('publicacion_noticias'); ?>
              <small>
              	<?php echo get_the_date('j F, Y'); ?><?php if ($publicacion!='') { ?>, <a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a>
								<?php } ?>
							</small>              
            </div>
            <div class="content mb-7">
              <?php the_field('descripcion_rapida_noticias'); ?>
							<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Lee la noticia >></a></p>
            </div>
            <hr>
          <?php endwhile; ?>
          <?php if ($count!=0) { ?>
          <div class="text-center">
            <ul class="pager">
              <li><?php next_posts_link( 'Ve más' ); ?></li>
              <li><?php previous_posts_link( 'Posteriores' ); ?></li>
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
<section>  
  <div class="container p-21">
  </div>
</section>
<?php get_footer(); ?>