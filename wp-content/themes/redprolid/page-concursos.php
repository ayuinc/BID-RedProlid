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
        <div class="col-sm-1 col-xs-3">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle.png" alt="" width="100%"></div>
		    </div>
        <div class="col-sm-5 col-xs-9">
          <h1 class="brand-titular">Concursos</h1>
        </div>
        <div class="col-sm-6 col-xs-12">
          <nav class="text-right text-center-xs">
            <a href="<?php echo home_url('/'); ?>">¿Quieres proponer un concurso?</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>/concursos/concursos-anteriores">Concursos anteriores</a>
          </nav>
        </div>
	    </div>
    	<?php query_posts( 'category_name=concursos&posts_per_page=1' ); ?>	
			<?php while ( have_posts() ) : the_post(); ?>  	    
	    <div class="row">		    
	    	<div class="col-sm-7">
					<h3 class="light"><?php the_title(); ?></h3>
					<p class="light"><?php the_field('descripcion_concurso'); ?></p>
			    <hr>               
			    <p class="light"><?php the_field('contenido_concurso'); ?></p>
			    <div class="row">
			    	<div class="col-xs-8 pull-right bg-gray-light p-7 flex-space-between">
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
	    	<div class="col-sm-1"></div>
	    	<div class="col-sm-4">
	    		<div class="bg-panel minh-560">
	    			<div class="bg-img-block minh-210" style="background-image: url(<?php the_field('imagen_concurso'); ?>)"></div>
	    			<div class="p-14">
		    			<ul class="span-gray normalize-text mb-ch-14">
		    				<li>
		    					<h5>Vigencia del concurso:</h5>
		    					<span><?php the_field('vigencia_concurso'); ?></span>
		    				</li>
		    				<li>
		    					<h5>Título:</h5>
		    					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
		    				</li>
		    				<li>
		    					<h5>Fecha:</h5>
		    					<span>del 01/30/15 al 06/12/15</span>
		    				</li>
		    				<li>
		    					<a href="#">Términos y condiciones del concurso</a>
		    				</li>
		    			</ul>
		    			<div class="text-center">
			    			<h3>
			    				Participa en el concurso inscribiéndote
			    			</h3>
		    				<a href="#" class="btn btn-primary">Aquí</a>
		    			</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <?php endwhile; ?>
	  </div> 
	</section>
</div>

<?php get_footer(); ?>    