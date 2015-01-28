<?php
/*
Template Name: Concursos
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
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle.png" alt="" width="100%"></div>
		    </div>
        <div class="col-md-5">
          <h1 class="brand-titular">Concursos</h1>
        </div>
        <div class="col-md-6">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>">¿Quieres proponer un concurso?</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>/concursos/concursos-anteriores">Concursos anteriores</a>
          </nav>
        </div>
	    </div>
    	<?php query_posts( 'category_name=concursos&posts_per_page=1' ); ?>	
			<?php while ( have_posts() ) : the_post(); ?>  	    
	    <div class="row">		    
	    	<div class="col-sm-8">
					<h3 class="light"><?php the_title(); ?></h3>
					<p class="light"><?php the_field('descripcion_concurso'); ?></p>
			    <hr>               
			    <p class="light"><?php the_field('contenido_concurso'); ?></p>
			    <div class="row">
			    	<div class="col-xs-8 pull-right bg-gray p-7 flex-space-between">
			    		<div class="left">
			    			<span>Invita a tus amigos a participar en el concurso</span>
			    		</div>
			    		<div class="right">
			    			<!-- Go to www.addthis.com/dashboard to customize your tools -->
								<div class="addthis_custom_sharing"></div>
			    		</div>
			    	</div>
			    </div>
	    	</div>
	    	<div class="col-sm-4">
	    		<div class="bg-panel minh-560">
		    		<img src="<?php the_field('imagen_concurso'); ?>" alt="" class="img-responsive mb-14">
		    		<h4>Vigencia del Concurso</h4>
		    		<p><?php the_field('vigencia_concurso'); ?></p>
		    		<h4>Términos y Condiciones</h4>
		    		<p><?php the_field('terminos_concurso'); ?></p>
	    		</div>
	    	</div>
	    </div>
	    <?php endwhile; ?>
	  </div> 
	</section>
</div>

<?php get_footer(); ?>    