<?php
/*
Template Name: Noticias
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div class="">
	<section class="mt-7"> 
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <?php the_breadcrumb(); ?>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-md-1">
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" alt="" width="100%">
		    </div>
        <div class="col-md-4">
          <h1 class="mt-14 mb-0 brand-titular">Noticias</h1>
        </div>
        <div class="col-md-7 pt-28">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>compartir-noticias">¿Quieres compartir una noticia?</a> | <a href="<?php echo home_url('/'); ?>noticias-anteriores/">¿Quieres ver las noticias anteriores?</a>
          </nav>
        </div>
	    </div>
	    <hr>	
	  </div> 
	</section>
	<section class="mb-21"> 
	  <div class="container">
	    <div class="row">
				<div class="col-md-12">
					<h3 class="light">Todos los días encontramos en los medios noticias, buenas o malas, que nos hablan de los avances o retrocesos de la mujer en el espacio público. Hemos recogido algunas de las más relevantes o significativas de entre las que tienen que ver con nosotras y nos ayudan a entender cómo está cambiando el mundo para las mujeres. Anímate a proponer las noticias que te parezcan destacadas.</h3>
				</div>
	    </div>	
	  </div>      
	</section>
	
	<section class="bg-panel pt-21 pb-28 mb-21">
	  <div class="container">
	    <div class="panel panel-custom">
	      <div class="panel-heading mb-0 pb-0">
					<h2>Últimas noticias</h2>
	      </div>         
	      <div class="panel-body pt-14">
	        <div class="row">
	          <div class="col-md-12">
	            <div class="row noticias-grid">
								<!-- Start the Loop. -->
								<?php if ( have_posts() ) : ?>
	                <?php query_posts( 'cat=256&posts_per_page=3' ); ?>
									<?php while ( have_posts() ) : the_post(); ?>				            
				            <div class="col-md-4">
					            <div>
	                  	<?php if( get_field('imagen_noticias') ) { ?>
	                      <img src="<?php the_field('imagen_noticias'); ?>" alt="" class="img-responsive">
											<?php } else {?>
	                    	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive">
											<?php } ?>
	                    <a href="<?php echo get_permalink( get_the_ID() ); ?>"><h3 class="medium mt-7 mb-0 pb-0"><?php the_title(); ?></h3></a>
	                    <?php $publicacion = the_field('publicacion_noticias'); ?>
	                    <small>
	                    	<?php $tempDate = get_the_date(); ?>
		                    <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?>
	                    	<?php if ($publicacion!='') { ?> 
													/ <a href="<?php the_field('link_publicacion_noticias'); ?>"><?php the_field('publicacion_noticias'); ?></a>
												<?php } ?>
											</small>
	                    <p class="mt-14"><?php the_field('descripcion_rapida_noticias');?></p>
	                    <small class="vermas"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Noticia completa >></a></small>
					            </div>							            
				            </div>
			            <?php endwhile; ?>
								<?php endif; ?>				            				            
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section> 
	          
	<section>
	  <div class="container">
	    <div class="panel panel-custom">         
	      <div class="panel-body pt-14">	      
					<div class="row">
	          <div class="col-md-8 pr-14">
	            <h2>Otras Noticias</h2>  
	            <ul class="list-unstyled">
	            	<!-- Start the Loop. -->
	            	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	            	<?php query_posts( 'cat=12&posts_per_page=10&paged=' . $paged ); ?>
								<?php while ( have_posts() ) : the_post(); ?>    
		                  <li class="mb-14">
		                    <h5 class="medium mb-0"><?php the_title(); ?></h5>
		                    <p class="mb-0"><?php the_field('descripcion_rapida_noticias'); ?></p>
	                      <small>
	                      	<?php $tempDate = get_the_date(); ?>
													<?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?>
	                      	<?php if ($publicacion!='') { ?> 
														/ <a href="<?php the_field('link_publicacion_noticias'); ?>"><?php the_field('publicacion_noticias'); ?></a>
													<?php } ?>
												</small>
												<br>
												<small class="vermas"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Noticia completa >></a></small>
		                  </li>
	                    <hr> 
		            <?php endwhile; ?> 
	            </ul>
	            <div class="text-center">
	              <ul class="pager">
	                <li><?php next_posts_link( 'Anteriores' ); ?></li>
	                <li><?php previous_posts_link( 'Posteriores' ); ?></li>
	              </ul>
	            </div> 	            
	        	</div>
	          <div class="col-md-4 mostrar-anteriores">
	            <h4 class="medium text-gray-darker mb-14">Lo último en las redes</h4> 
	          	<div class="mb-14">
								<div class="fb-like-box" data-width="100%" data-height="310" data-href="https://www.facebook.com/redprolid" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
	          	</div>
	          	<div class="mb-14">
								<a class="twitter-timeline" width="298" height="310"  href="https://twitter.com/redprolid" data-widget-id="510444695814537216">Tuiteado por @redprolid</a> 
	          	</div>
	          	<div class="mb-14"> 
								<div class="g-person" data-width="100%" data-height="310" data-href="//plus.google.com/u/0/107403271684877473593" data-rel="author"></div>
	          	</div>			            
	          </div>
					</div>
	      </div>
	    </div>
	  </div>
	</section>
</div>

<?php get_footer(); ?>    