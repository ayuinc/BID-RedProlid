<?php
/*
Template Name: Video list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section id="puntos-de-vista-anteriores">
  <div class="container pb-42">
    <?php the_breadcrumb(); ?>
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Videos anteriores</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>eventos">Videos >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/video-icon-square-alpha.png" width="94px" height="auto" alt="">
      </div>
    </div>
    <div>
      <ul class="grid-list grid-list-3 grid-list-2-sm grid-list-1-xs isotope-grid">
      <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
      <?php query_posts( 'cat=258&posts_per_page=50&offset=5&paged=' . $paged ); ?>
      <?php while ( have_posts() ) : the_post(); ?>    
       <li class="grid-list-item">
         <div class="banner bg-white">
           <div class="banner-pic">
            <?php $youtube = get_field('video_youtube'); ?>
            <?php if ($youtube!='') { ?>
              <iframe width="100%" height="220" src="//www.youtube.com/embed/<?php the_field('video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>     
            <?php } ?>
            <?php $vimeo = get_field('video_vimeo'); ?>
            <?php if ($vimeo!='') { ?>        
              <iframe src="//player.vimeo.com/video/<?php the_field('video_vimeo'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="220" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <?php } ?>
           </div>
           <div class="banner-content flex-none">
              <a href="<?php echo get_permalink( get_the_ID() ); ?>"><h3 class="medium mt-7 mb-0"><?php the_title(); ?></h3></a>
              <p class="mb-0"><?php the_field('video_descripcion_cortao'); ?></p>
							<?php $video_autor = get_field('video_autor'); ?>
							<?php $video_fecha_publicacion = get_field('video_fecha_publicacion') ?>
							<small>
								<?php if ($video_autor!='') { ?><?php the_field('video_autor'); ?><?php } ?><?php if ($video_fecha_publicacion!='') { ?>, <?php the_field('video_fecha_publicacion'); ?><?php } ?>
							</small> 
           </div>
         </div>
       </li>
       <?php endwhile; ?>
      </ul>
      <div class="text-center">
        <ul class="pager">
          <li><?php next_posts_link( 'Anteriores' ); ?></li>
          <li><?php previous_posts_link( 'Posteriores' ); ?></li>
        </ul>
      </div> 
    </div>
  </div>
</section>
<?php get_footer(); ?>