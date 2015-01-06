<?php
/*
Template Name: Campeonas
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
	    <div class="absolute dtl-custom-heading z-index-100">
	      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/enterate-icon.png" alt="" width="100%"></div>
	      <div class="clearfix">
	        <div class="col-md-6">
	          <h1 class="mt-14 ml--25 mb-0 brand-titular">Campeonas</h1>
	        </div>
	        <div class="col-md-6 pt-28">
	          <nav class="text-right mb-0 mt-0">
	            <a href="<?php echo home_url('/'); ?>compartir-campeonas" class="light">Nos propones un tema >></a> 
	          </nav>
	        </div>
	      </div>
	    </div>	
	  </div>      
	</section>
	
	<section class="pt-7-100 mb-21"> 
	  <div class="container">
	    <div class="row">
				<div class="col-md-8">
					<h3 class="light mt-21">Esta es la sección donde incluimos las entrevistas con testimonios de aquellas mujeres latinoamericanas que han dejado huella y han marcado o van a marcar las agendas de sus países para imprimir mayor equidad en las politicas públicas y en el quehacer diario de la política.</h3>
				</div>
				<div class="col-md-4">
					<div class="mostrar-anteriores mt-21">
						<h4 class="medium">¿Quieres leer nuestras entrevistas anteriores?</h4>
						<div class="text-right">
							<a class="btn btn-primary" href="<?php echo content_url('/'); ?>noticias-anteriores/">Ve todas</a>
						</div>
					</div>
				</div>
	    </div>	
	  </div>      
	</section>

<?php if ( have_posts() ) : ?>
  <?php query_posts( 'cat=2&posts_per_page=1' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>		
		<section class="mb-21">
		  <div class="container">
		    <div class="row">
		      <?php if( get_field('imagen_campeonas') ) { ?>
		      <div class="col-md-3 col-md-offset-1">
		        <img src="<?php the_field('imagen_campeonas'); ?>" alt="" class="img-responsive">
		      </div>
		      <div class="col-md-7">
		      <?php } else {  } ?>
	        <h2 class="lh-lg mb-0"><?php the_title(); ?></h2>
	        <small><?php the_field('posicion_campeona'); ?> <?php if (get_field('twitter_campeona')!='') { ?>/ <a href="http://twitter.com/<?php the_field('twitter_campeona'); ?>" target="_blank">@<?php the_field('twitter_campeona'); ?></a><?php } ?></small>
	        <h4 class="mt-14 light lh-lg"><?php the_field('descripcion_campeona'); ?></h4>	      
		    </div>
		  </div>		
		</section>
		          
		<section>
		  <div class="container text-left">
		    <div class="row">
		      <div class="col-sm-10 col-md-offset-1 with-hr">     
		        <p><?php the_field('contenido_campeona'); ?></p>
		        <div class="text-center">
		          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
		        </div>   
		      </div>
		    </div>       
		  </div>
		  <div class="container pb-70">
		    <div class="row">
		      <div class="col-sm-10 col-md-offset-1">  
		        <?php comments_template(); ?>
		      </div>
		    </div>
		  </div>
		</section>
  <?php endwhile; ?>
<?php endif; ?>		
</div>

<?php get_footer(); ?>    