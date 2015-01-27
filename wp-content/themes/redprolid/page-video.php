<?php
/*
Template Name: Video
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div class="">
	<section class="mt-7 mb-21"> 
	  <div class="container relative mb-14">
	    <div class="row">
	      <div class="col-md-12">
	        <?php the_breadcrumb(); ?>
	      </div>
	    </div>
	    <div class="clearfix sub-header">
	    	<div class="col-sm-1">
          <div>
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/video-icon-circle.png" alt="" width="100%">
          </div>
        </div>
        <div class="col-sm-7">
          <div>
            <h1>Video</h1>
          </div>
        </div>
        <div class="col-sm-4">
          <nav class="text-right mb-0 mt-0">
            <a href="<?php echo home_url('/'); ?>video/videos-anteriores" class="light">Videos Anteriores</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>compartir-video" class="light">¿Quieres compartir un video?</a>
          </nav>
        </div>
	    </div>
	  </div>      
	</section>
	
	<section class="pt-7-100 mb-21"> 
	  <div class="container">
      <?php query_posts( 'cat=259&posts_per_page=10&paged=' . $paged ); ?>
			<?php while ( have_posts() ) : the_post(); ?> 
	    <div class="row mt-21">
				<div class="col-md-7">
					<iframe width="100%" height="350" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-5">
					<h2 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h2>
					<?php $tempDate = get_the_date(); ?>
					<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
					<h3 class="mt-7 light"><?php the_field('descripcion_video'); ?></h3>
				</div>
	    </div>
	    <?php endwhile; ?>	
	  </div>      
	</section>
	          
	<section>
	  <div class="container">
	    <div class="panel panel-custom">         
	      <div class="panel-body pt-14">	
		      <div class="row">
		      	<div class="col-md-12">
			      	<h2>Videos más vistos</h2>
		      	</div>
		      </div>      
					<div class="row">
          	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          	<?php query_posts( 'cat=260&posts_per_page=10&paged=' . $paged ); ?>
						<?php while ( have_posts() ) : the_post(); ?>    
						<div class="col-md-3">
							<iframe width="100%" height="150" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
							<h3 class="medium mt-7 mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
							<p class="mb-0"><?php the_field('descripcion_video'); ?></p>
							<?php $tempDate = get_the_date(); ?>
							<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
						</div>																			
            <?php endwhile; ?>
          </div>
          <div class="row">
            <div class="col-md-12"> 
	            <!--Pagination-->
	            <div class="text-center">
	              <ul class="pager">
	                <li><?php next_posts_link( 'Anteriores' ); ?></li>
	                <li><?php previous_posts_link( 'Posteriores' ); ?></li>
	              </ul>
	            </div> 
	            <!--End.Pagination-->	  
            </div>          
					</div>
	      </div>
	    </div>
	  </div>
	</section>
</div>

<?php get_footer(); ?>    