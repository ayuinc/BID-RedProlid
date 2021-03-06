<?php
/*
Template Name: Puntos de vista list
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
      <div class="col-sm-7 col-xs-12 text-center-xs ">
        <div>
          <h1>Puntos de vista anteriores</h1>
          <nav class="mt-21">
            <a  href="<?php echo content_url('/'); ?>puntos-de-vista">Puntos de vista >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon hidden-xs" style="background-color:#AEAB8B;">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-icon-int.png" style"width=100%;" alt="">
      </div>
    </div>	      
    <div class="ph-70">
      <div class="row ph-14-sm">
        <div class="col-sm-12">
	        <?php add_filter('post_limits', 'my_post_limit'); ?>
	        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					<?php
					$count = 0;	
					global $myOffset;
					$myOffset = 1;
					$temp = $wp_query;
					$wp_query= null;
					$wp_query = new WP_Query();
					$wp_query->query('cat=13&offset='.$myOffset.'&showposts=10&paged='.$paged);
					?>	 					       
	        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>    	        
            <div class="title">
              <h3 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <span><?php the_field('profesion'); ?></span>
            </div>
            <div class="content mb-7">
              <?php the_field('descripcion_punto_de_vista'); ?>
							<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Lee el artículo >></a></p>
            </div>
            <hr>
            <?php $count++; ?>
          <?php endwhile; ?>
          <?php if ($count != 0) { ?>
            <div class="text-center">
              <ul class="pager">
                <li><?php next_posts_link( 'Anteriores' ); ?></li>
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