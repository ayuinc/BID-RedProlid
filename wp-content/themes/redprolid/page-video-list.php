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
  <div class="container">
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
    <div class="ph-70">
  		<!--<div class="row">
  			<form action="">
  				<div class="col-sm-4 form-group">
  					<select name="" id="" class="form-control select-override">
  						<option value="Del más antiguo al más nuevo">Del más antiguo al más nuevo</option>
  					</select>
  				</div>
  			</form>
  		</div>
		 <h2 class="mb-21">Del más antiguo al más nuevo</h2>-->
			<div class="row">
      	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
      	<?php query_posts( 'cat=258&posts_per_page=10&offset=5&paged=' . $paged ); ?>
				<?php while ( have_posts() ) : the_post(); ?>    
				<div class="col-md-3">
					<iframe width="100%" height="150" src="//www.youtube.com/embed/<?php the_field('video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
					<h3 class="medium mt-7 mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
					<p class="mb-0"><?php the_field('descripcion_corta_video'); ?></p>
					<?php $tempDate = get_the_date(); ?>
					<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
				</div>																			
        <?php endwhile; ?>
      </div>
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