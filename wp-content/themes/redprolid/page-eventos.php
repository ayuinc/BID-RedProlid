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
      <?php the_breadcrumb(); ?> 
      <div class="clearfix sub-header">
        <div class="col-md-1">
          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/eventos-icon-circle.png" alt="" width="100%"></div>
        </div>
        <div class="col-md-5">
          <h1>Eventos</h1>
        </div>
        <div class="col-md-6">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>compartir-noticias">¿Quieres proponernos un evento?</a> <span class="brand-primary">|</span> <a href="<?php echo home_url('/'); ?>eventos-anteriores">Eventos anteriores</a>
          </nav>          
        </div>
      </div>
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
	  <div class="container ph-70-md">
	  	<h2>Eventos destacados</h2>
	  	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
					<!-- Start the Loop. -->
					<?php if ( have_posts() ) : ?>
            <?php query_posts( array( 'category_name' => 'eventos-destacados', 'posts_per_page' => 1 ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
		        	<div class="item">
		        		<div class="banner">
		        			<div class="banner-pic col-sm-4" style="background-image: url(<?php the_field('imagen_evento'); ?>)"></div>
		        			<div class="banner-content col-sm-8">
		        				<h3 class="medium mt-7 mb-14 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
		        				<?php $tempDate = get_the_date(); ?>
		              	<p>
		                	<strong>Fecha:</strong> <?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?><br>
		                	<strong>Hora:</strong> <?php the_field('hora_evento'); ?><br>
		                	<strong>Lugar:</strong> <?php the_field('lugar_evento'); ?><br>
		                	<strong>Organizan:</strong> <?php the_field('organizan_evento'); ?><br>
											<strong>Convocan:</strong> <?php the_field('convocan'); ?>
		                </p>
		                <p class="text-right mt-14 medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Más Información >></a></p>
		        			</div>
		        		</div>
		        	</div>
	          <?php endwhile; ?>
					<?php endif; ?>	
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="icon-prev out"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="icon-next out"></span>
        </a>
      </div> <!-- END:CAROUSEL -->
	  </div>
	</section> 
	          
	<section>
	  <div class="container">
			<h2>Próximos eventos</h2>
			<hr>
    	<!-- Start the Loop. -->
    	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    	<?php query_posts( 'cat=11&posts_per_page=10&paged=' . $paged ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
	  	<div class="banner">
	  		<div class="banner-pic col-sm-2 bg-panel text-center lead-ch normalize-text">
	  			<?php $tempDate = get_the_date(); ?>
	  			<h3 class="h1"><?php echo date_i18n('j', strtotime( $tempDate)); ?></h3>
			    <p><?php echo date_i18n('M', strtotime( $tempDate)); ?></p>
	  		</div>
	  		<div class="banner-content col-sm-10">
	  			<h4 class="medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h4>
          <p>
            <strong>Lugar:</strong> <?php the_field('lugar_evento'); ?><br>
            <strong>Hora:</strong> <?php the_field('hora_evento'); ?><br>
            <strong>Organizan:</strong> <?php the_field('organizan_evento'); ?><br>
            <strong>Convocan:</strong> <?php the_field('convocan'); ?>
          </p>
          <p>Para mayores informes contactar a <a href="mailto:<?php the_field('contacto_email_evento'); ?>"><?php the_field('contacto_nombre_evento'); ?></a></p>
          <small>
          	<?php if ($publicacion!='') { ?> 
							/ <a href="<?php the_field('link_publicacion_noticias'); ?>"><?php the_field('publicacion_noticias'); ?></a>
						<?php } ?>
					</small>
	  		</div>
	  	</div>
      <?php endwhile; ?> 
      <div class="text-center">
        <ul class="pager">
          <li><?php next_posts_link( 'Anteriores' ); ?></li>
          <li><?php previous_posts_link( 'Posteriores' ); ?></li>
        </ul>
      </div> 
	  </div>
	</section>
</div>

<?php get_footer(); ?>    