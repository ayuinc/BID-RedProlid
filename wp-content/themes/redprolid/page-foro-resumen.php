<?php
/*
Template Name: Foro resumen
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div>
	<section class="mt-7 mb-21 pb-70"> 
	  <div class="container relative mb-14">
	    <?php the_breadcrumb(); ?>	    
	    <div class="clearfix sub-header bg-panel">
        <div class="col-sm-6">
          <h1>Resumen del foro</h1>
        </div>
        <div class="col-sm-6">
          <nav class="text-right text-center-xs">
            <a href="<?php echo home_url('/'); ?>charlacafe">Descargar como PDF</a> <span class="text-primary">|</span> <a href="#">Foros anteriores</a>
          </nav>
        </div>
	    </div> 
			<div class="ph-70 pb-70">
				<h3>Mujeres en la política</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam hic amet quos a temporibus, in quibusdam voluptatibus neque nobis nihil tempore eveniet officia, adipisci minima assumenda voluptatem. Eius, quisquam suscipit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui enim deleniti voluptas culpa sint delectus eum quisquam veniam, ratione aliquam quam! Illo distinctio recusandae, qui reprehenderit ut neque, ad ea!</p>
				<div class="text-right">
					<a href="#" class="btn btn-primary">Ver todo el documento</a>
				</div>
			</div>
	  </div>
	</section>
</div>

<?php get_footer(); ?>    













