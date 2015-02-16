<?php
/*
Template Name: A tu estilo
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

	<section class="mt-7"> 
    <div class="container">
      <?php the_breadcrumb(); ?>
      <div class="row">
      	<div class="col-sm-8">
		      <div class="clearfix sub-header">
		        <div class="col-sm-2 col-xs-3">
		          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/a-tu-estilo.png" alt="" width="100%"></div>
		        </div>
		        <div class="col-sm-5 col-xs-9">
		          <h1><?php the_title(); ?></h1>
		        </div>
		        <div class="col-sm-5 col-xs-12">
		          <nav class="text-right text-center-xs">
		            <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/la-pinta-no-es-lo-de-menos/">La pinta no es lo de menos</a> <span class="brand-primary">|</span> <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas-2/">Pistas</a>
		          </nav>          
		        </div>
		      </div>
		      <div class="row">
			      <div class="col-sm-offset-2">
							<p class="light text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore enim totam, ipsa harum in. Officia unde iste placeat, ullam corrupti quia expedita blanditiis necessitatibus saepe velit maxime maiores, aliquid provident.</p>
			      </div>		      	
		      </div>
      	</div>
      	<div class="col-sm-4 hidden-xs">
					<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/a-tu-estilo-rombo.png" alt="" class="img-responsive">
      	</div>
      </div>
    </div>
	</section>		
	
	<section class="bg-panel pv-21">
		<div class="container">
			<h3>¿Dónde puedo comer y/o comprar?</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur vitae expedita quibusdam enim, esse, neque rem sed ipsum pariatur repudiandae iure voluptatum distinctio modi animi error sint porro quam provident!</p>
			<div class="row">
				<div class="col-sm-4">
					<form action="">
						<div class="form-group">
							<select name="" id="" class="select-override form-control">
								<option value="Colombia, Bogotá">Colombia, Bogotá</option>
							</select>
						</div>
					</form>
				</div>
				<div class="col-sm-8 bg-secondary">
					<nav>
						<a href="#">Restaurantes</a>
						<a href="#">Tiendas</a>
					</nav>
				</div>
			</div>
			<div class="row noticias-grid">
				<!-- Start the Loop. -->
				<?php if ( have_posts() ) : ?>
          <?php query_posts( 'cat=256&posts_per_page=4' ); ?>
					<?php while ( have_posts() ) : the_post(); ?>				            
            <div class="col-md-3">
            	<?php if( get_field('imagen_noticias') ) { ?>
                <img src="<?php the_field('imagen_noticias'); ?>" alt="" class="img-responsive">
							<?php //} else {?>
              	<!--<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive">-->
							<?php } ?>
							<small>Restaurantes</small>
              <h3 class="medium mt-7 mb-0 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <?php $publicacion = get_field('publicacion_noticias'); ?>
              <p class="mt-14"><?php the_field('descripcion_rapida_noticias');?></p>
              <div class="text-right">
              	<a href="#" class="vermas medium">Ver más</a>
              </div>
            </div>
          <?php endwhile; ?>
				<?php endif; ?>				            				            
      </div>
      <nav>
			  <ul class="pager">
			    <li><a href="#">Anteriores</a></li>
			    <li><span>|</span></li>
			    <li><a href="#">Siguiente</a></li>
			  </ul>
			</nav>
		</div>
	</section>

	<section class="pv-21">
		<div class="container pv-70">
			<div class="row normalize-text">
				<div class="col-sm-6">
					<h3>¿Tienes alguna recomendación?</h3>
				</div>
				<div class="col-sm-6">
					<nav class="text-right">
						<a href="#">Regístrate</a>
						<span class="text-primary">|</span>
						<a href="#">Inicia sesión</a>
					</nav>
				</div>
			</div>
			<hr>
			<form action="">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="" class="sr-only">Escoge</label>
							<select name="" id="" class="select-override form-control">
								<option value="Escoge">Escoge</option>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="sr-only">País</label>
							<select name="" id="" class="select-override form-control">
								<option value="País">País</option>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="sr-only">Ciudad</label>
							<select name="" id="" class="select-override form-control">
								<option value="Ciudad">Ciudad</option>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="sr-only">Dirección del lugar</label>
							<input type="text" class="form-control" placeholder="Dirección del lugar">
						</div>
						<div class="form-group">
							<label for="" class="sr-only">Sitio web</label>
							<input type="text" class="form-control" placeholder="Sitio web">
						</div>
						<div class="form-group">
							<label for="" class="sr-only">Fuente</label>
							<input type="text" class="form-control" placeholder="Fuente">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="flex-space-between normalize-text">
							<div class="left">
								<p>Escribe tu recomendación (Máximo 300 caracteres)</p>
							</div>
							<div class="right">
								<label for="">Sube una foto <input type="file" accept="image/*"></label>
							</div>
						</div>
						<div class="form-group">
							<textarea name="" id="" rows="10" class="form-control"></textarea>
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary">Sube tu recomendación</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

<?php get_footer(); ?>    















