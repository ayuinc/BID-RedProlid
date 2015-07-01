<?php
/*
Template Name: Campeonas list
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
          <h1>Entrevistas anteriores</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>campeonas">Campeon@s >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/campeonas-icon-square-alpha.png" width="94px" height="auto" alt="">
      </div>
    </div>  
    <div class="ph-70">
      <div class="row">
        <?php add_filter('post_limits', 'my_post_limit'); ?>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
				<?php
				$count = 0;	
				global $myOffset;
				$myOffset = 1;
				$temp = $wp_query;
				$wp_query= null;
				$wp_query = new WP_Query();
				$wp_query->query('cat=2&offset='.$myOffset.'&showposts=10&paged='.$paged);
				?>	 					       
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>        
	      <div class="col-md-2">
          <?php $imagen_campeona = get_field('imagen_campeonas'); ?>
          <?php if ($imagen_campeona!='') { ?>
          	<img  src="<?php the_field('imagen_campeonas'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
          <?php } ?>
          <?php $video = get_field('video_campeonas'); ?>
          <?php if ($video!='') { ?>
          	<img class="img-responsive"  alt="<?php the_title(); ?>" src="http://img.youtube.com/vi/<?php the_field('video_campeonas'); ?>/maxresdefault.jpg" width="100%">
          <?php } ?>
	      </div>
        <div class="col-md-10">
          <div class="title">
            <h3 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
		        <?php $tempDate = get_field('fecha_de_la_entrevista'); ?>
		        <?php if ($tempDate!='') { ?>
		        <small>
            <!--<?php //echo date_i18n('j', strtotime( $tempDate)); ?> de <?php //echo date_i18n('F', strtotime( $tempDate)); ?> de --><?php echo date_i18n('Y', strtotime( $tempDate)); ?>
	          </small>     
	          <?php } ?>   
            <!-- <p><?php //the_field('posicion_campeona'); ?> <?php //if (get_field('twitter_campeona')!='') { ?>/ <a href="http://twitter.com/<?php //the_field('twitter_campeona'); ?>" target="_blank"><?php //the_field('twitter_campeona'); ?></a><?php } ?></p> -->
          </div>
          <div class="content mv-14">
            <p>
			        <strong><em><?php the_field('posicion_campeona'); ?></em></strong><br>
			        <?php the_field('descripcion_home_campeonas'); ?> 
            </p>
						<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Lee la entrevista >></a></p>
          </div> 
          <hr>   
        </div>
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
</section>
<?php get_footer(); ?>