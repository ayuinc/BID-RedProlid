<?php
/*
Template Name: Webinar principal Page
*/
get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section class="mt-7 mb-21"> 
			  <div class="container relative mb-14">
			    <div class="row">
			      <div class="col-md-12">
			        <?php the_breadcrumb(); ?>
			      </div>
			    </div>
			    <div class="clearfix sub-header">
			      <div class="col-md-1">
				      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/webinarios-icon.png" alt="" width="100%"></div>
				    </div>
		        <div class="col-md-4">
		          <h1 class="brand-titular">Webinarios</h1>
		        </div>
		        <div class="col-md-7">
		          <nav class="text-right">
		          	<a href="#" data-toggle="modal" data-target="#pdv-modal">¿Quieres proponernos un tema?</a> <span class="text-primary">|</span> 
				        <a href="<?php echo home_url('/'); ?>webinarios-anteriores" class="">Webinarios anteriores</a>
		          </nav>
		        </div>
			    </div>
			  </div>      
      </section>	    
      <section class="pt-7-100 mt-35">
	      <div class="container">
		      <div class="row">
			      <div class="col-md-10 col-md-offset-1">
				      <h5 class="medium">Próximo Webinario</h5>
			        <?php
				        $customposts = get_posts('category_name=webinario&showposts=1' );
				        foreach( $customposts as $post ) :  // start you custom loop
				        setup_postdata($post); 
			        ?>				      
		          <h1 class="mb-0 medium"><?php the_title(); ?></h1>
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
		          <?php endforeach; ?>	          	           		          
			      </div>
		      </div>
	      </div>
      </section>
    </div>

<?php get_footer(); ?>
