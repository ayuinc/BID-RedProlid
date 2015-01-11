<?php
/*
Template Name: Boletin
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div>
	<section class="mt-7 mb-21"> 
	  <div class="container relative mb-14">
	    <div class="row">
	      <div class="col-md-12">
	        <?php the_breadcrumb(); ?>
	      </div>
	    </div>	
	  </div>      
	</section>
	
	<section>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 mostrar-anteriores">
				<div class="row">
					<div class="col-md-3">
						<h2 class="medium mt-0">Boletín enero 2015</h2>
						<a href="">Boletín >></a>
					</div>
					<div class="col-md-6">
						<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_anterior_interna_V6-02.png">
					</div>					
					<div class="col-md-3">
					</div>					
				</div>
			</div>
		</div>
	</section>
	
</div>

<?php get_footer(); ?>    