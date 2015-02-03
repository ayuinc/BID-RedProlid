<div class="mh-700">
	<section class="mt-7 mb-21"> 
	  <div class="container relative mb-14">
      <?php the_breadcrumb(); ?>
      <div class="clearfix sub-header">
	      <div class="col-md-1">
	        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/webinarios-icon.png" alt="" width="100%"></div>
	      </div>
	      <div class="col-md-4">
	        <h1 class="brand-titular">Webinarios</h1>
	      </div>
	      <div class="col-md-7">
	        <nav class="text-right">
	          <a href="<?php echo home_url('/'); ?>compartir-campeonas">¿Quieres proponernos un tema?</a>
	        </nav>
	      </div>
	    </div>	
		  <?php if (have_posts()) : ?>
		  <?php $count = 0; ?>
		
		  <?php while ( have_posts() ) : the_post(); ?>
		  <?php $count++; ?>
		
		  <?php if ($count <= 1) : ?>
		  <?php $id_post_comentarios = get_the_ID(); ?> 		
		    <div class="row">
		      <div class="col-md-10 col-md-offset-1">		
				    <h1 class="mb-21"><?php the_title(); ?></h1>
				    <p><?php echo get_post_field('post_content', get_the_ID()); ?></p>
				    <?php
				      $url = get_field('video');
				      parse_str( parse_url( $url, PHP_URL_QUERY ), $videocode );
				    ?> 
	          <div class="row">
		          <div class="col-md-10 col-md-offset-1">
						    <div class="video-container videoWrapper mt-35 mb-0">
						      <iframe src="//www.youtube.com/embed/<?php echo $videocode['v']; ?>" frameborder="0" allowfullscreen></iframe>
						    </div>
		          </div>
	          </div>
	          <div class="row">
		          <div class="col-md-10 col-md-offset-1">
			          <ul class="list-unstyled mt-35 mb-35 webinario-datos">
			            <li>
			            	<h5 class="medium mb-0">Resource type:</h5>
			            	<p><?php the_field('source_type'); ?></p>
			            </li>
			            <li>
				            <h5 class="medium mb-0">Region:</h5>
				            <p><?php the_field('region'); ?></p>
			            </li>
			            <li>
			            	<h5 class="medium mb-0">Theme:</h5>
			            	<p><?php the_field('theme'); ?></p>
			            </li>
			            <li>
			            	<h5 class="medium mb-0">Publisher:</h5>
			            	<p><?php the_field('publisher'); ?></p>
			            </li>
			            <li>
			            	<h5 class="medium mb-0">Publication year:</h5>
			            	<p><?php the_field('publication_year'); ?></p>
			            </li>
			          </ul>			          
		          </div>
	          </div>				
				    <div class="comments">
				      <?php comments_template();?>
				    </div> 
		      </div>
		    </div>
		  <?php endif; ?>
		  <?php endwhile; ?>
		  <?php endif; ?>
	  </div>
</div>