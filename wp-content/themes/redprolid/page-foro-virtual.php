<?php
/*
Template Name: Foro Virtual
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
	    <div class="clearfix sub-header">
        <div class="col-sm-1 col-xs-3">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/foros_icon.png" alt="" width="100%"></div>
		    </div>
        <div class="col-sm-5 col-xs-9">
          <h1 class="brand-titular">Foro virtual</h1>
        </div>
        <div class="col-sm-6 col-xs-12">
          <nav class="text-right text-center-sm text-center-xs txt-center-landscape-ipad">
            <a href="<?php echo home_url('/'); ?>charlacafe">¿Quieres proponer un tema para los foros?</a> <span class="text-primary">|</span> <a href="#">Foros anteriores</a> <span class="text-primary">|</span> <a href="#">Charlacafé</a>
          </nav>
        </div>
	    </div> 
	  </div>
	</section>

	<section class="container ph-ch-70 pv-ch-14">
		<div class="bg-panel-dark text-white normalize-text">
			<h1>Título: Mujeres en la política</h1>
			<p>Fecha del foro: del 30 de nomviembre al 20 de dicimebre</p>
		</div>
		<div class="bg-panel">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam hic amet quos a temporibus, in quibusdam voluptatibus neque nobis nihil tempore eveniet officia, adipisci minima assumenda voluptatem. Eius, quisquam suscipit.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui enim deleniti voluptas culpa sint delectus eum quisquam veniam, ratione aliquam quam! Illo distinctio recusandae, qui reprehenderit ut neque, ad ea!</p>
			<div class="text-right">
				<a href="#" class="btn btn-primary">Ve más aquí</a>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="flex-space-between">
			<div class="left col-sm-9">
				<div class="row pv-ch-14">
					<div class="col-xs-1 minh-70 bg-panel flex-middle-center">
						<span class="h1 text-panel-dark">1</span>
					</div>
					<div class="col-xs-11 minh-70 flex-middle">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</h3>
						<div class="text-right">
							<a href="#">Responde &gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
			<div class="right col-sm-3 normalize-text pv-14">
				<p><strong>Último comentario</strong> por Lulation</p>
				<p>Re: Mujeres al poder...</p>
				<small class="text-gray">23 de Julio, 11:13:07 a.m.</small>
			</div>
		</div>
		<div class="flex-space-between">
			<div class="left col-sm-9">
				<div class="row pv-ch-14">
					<div class="col-xs-1 minh-70 bg-panel flex-middle-center">
						<span class="h1 text-panel-dark">2</span>
					</div>
					<div class="col-xs-11 minh-70 flex-middle">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</h3>
						<div class="text-right">
							<a href="#">Responde &gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
			<div class="right col-sm-3 normalize-text pv-14">
				<p><strong>Último comentario</strong> por Lulation</p>
				<p>Re: Mujeres al poder...</p>
				<small class="text-gray">23 de Julio, 11:13:07 a.m.</small>
			</div>
		</div>
		<div class="flex-space-between">
			<div class="left col-sm-9">
				<div class="row pv-ch-14">
					<div class="col-xs-1 minh-70 bg-panel flex-middle-center">
						<span class="h1 text-panel-dark">3</span>
					</div>
					<div class="col-xs-11 minh-70 flex-middle">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</h3>
						<div class="text-right">
							<a href="#">Responde &gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
			<div class="right col-sm-3 normalize-text pv-14">
				<p><strong>Último comentario</strong> por Lulation</p>
				<p>Re: Mujeres al poder...</p>
				<small class="text-gray">23 de Julio, 11:13:07 a.m.</small>
			</div>
		</div>
		<div class="flex-space-between">
			<div class="left col-sm-9">
				<div class="row pv-ch-14">
					<div class="col-xs-1 minh-70 bg-panel flex-middle-center">
						<span class="h3 text-panel-dark">1,2,3</span>
					</div>
					<div class="col-xs-11 minh-70 flex-middle">
						<h3>&nbsp;</h3>
						<div class="text-right">
							<a href="#">Responde aquí las 3 preguntas &gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
			<div class="right col-sm-3 normalize-text pv-14">
				<p><strong>Último comentario</strong> por Lulation</p>
				<p>Re: Mujeres al poder...</p>
				<small class="text-gray">23 de Julio, 11:13:07 a.m.</small>
			</div>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'page' ); ?>
      <?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
	</section>












</div>

<?php get_footer(); ?>    













