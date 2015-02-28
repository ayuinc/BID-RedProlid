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
		          <div>
			          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/a-tu-estilo.png" alt="" width="100%">
		          </div>
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
							<p class="light text-justify">No todo es trabajo en esta vida, ni actividad política. Te gusta (¡nos gusta!) aprovechar el tiempo libre:  salir a comer con tu gente, ir de tiendas o tomarte un café en esos lugares especiales. En esta sección vas a encontrar las pistas para sacar partido a tu ocio más allá de las guías de viajes.</p>
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
			<h3>Dónde puedo comer y comprar</h3>
			<p>Te ofrecemos, ordenadas por ciudades, sugerencias de restaurantes y tiendas concretas de las principales ciudades de Latinoamérica para que, en tus viajes de trabajo o cuando asistas a foros y congresos, puedas tener mejores alternativas que la cafetería del hotel o el Mall al frente. En definitiva, donde poder darte un gusto.</p>
			<form action="/a-tu-estilo/a-tu-estilo-resultados-de-busqueda/" method="post">
			<div class="row">
				<div class="col-sm-4">
						<div class="form-group">
							<select name="lugar" id="" class="select-override form-control">
								<option selected>- Selecciona - </option>
								<option value="buenos-aires">Argentina, Buenos Aires</option>
								<option value="cordoba">Argentina, Córdoba</option>
								<option value="la-paz">Bolivia, La Paz</option>
								<option value="santa-cruz">Bolivia, Santa Cruz</option>
								<option value="brasilia">Brasil, Brasilia</option>
								<option value="sao-paulo">Brasil, Sao Paulo</option>
								<option value="rio-de-janeiro">Brasil, Rio de Janeiro</option>
								<option value="santiago-de-chile">Chile, Santiago de Chile</option>
								<option value="concepcion">Chile, Concepción</option>
								<option value="bogota">Colombia, Bogotá</option>
								<option value="medellin">Colombia, Medellín</option>
								<option value="san-jose">Costa Rica, San José</option>
								<option value="alajuela">Costa Rica, Alajuela</option>
								<option value="quito">Ecuador, Quito</option>
								<option value="guayaquil">Ecuador, Guayaquil</option>
								<option value="san-salvador">El Salvador, San Salvador</option>
								<option value="santa-ana">El Salvador, Santa Ana</option>
								<option value="new-york">Estados Unidos, Nueva York</option>
								<option value="washington-dc">Estados Unidos, Washington DC</option>
								<option value="ciudad-de-guatemala">Guatemala, Ciudad de Guatemala</option>
								<option value="quetzaltenango">Guatemala, Quetzaltenango</option>
								<option value="tegucigalpa">Honduras, Tegucigalpa</option>
								<option value="san-pedro-sula">Honduras, San Pedro Sula</option>
								<option value="mexico-d-f">México, México D.F.</option>
								<option value="guadalajara">México, Guadalajara</option>
								<option value="managua">Nicaragua, Managua</option>
								<option value="estelí">Nicaragua, Estelí</option>
								<option value="ciudad-de-panama">Panamá, Ciudad de Panamá</option>
								<option value="asuncion">Paraguay, Asunción</option>
								<option value="ciudad-del-este">Paraguay, Ciudad del Este</option>
								<option value="lima">Perú, Lima</option>
								<option value="cusco">Perú, Cusco</option>
								<option value="santo-domingo">República Dominicana, Santo Domingo</option>
								<option value="santiago-de-los-caballeros">República Dominicana, Santiago de los Caballeros</option>
								<option value="montevideo">Uruguay, Montevideo</option>
								<option value="ciudad-de-la-costa">Uruguay, Ciudad de la Costa</option>
								<option value="caracas">Venezuela, Caracas</option>
								<option value="valencia">Venezuela, Valencia</option>
							</select>
						</div>
				</div>
				<div class="col-sm-8">
					<nav class="custom-nav bg-secondary clearfix">
						<input type="radio" name="tipo_lugar" value="restaurantes" id="restaurantes" checked> <label class="text-white light" for="restaurantes">Restaurantes</label>
						<input type="radio" name="tipo_lugar" value="tiendas" id="tiendas"> <label class="text-white light" for="tiendas">Tiendas</label>
						<button type="submit" class="btn btn-default ml-21 pull-right borderless" style="padding: 7px 12px;">Busca</button>
					</nav>
				</div>
			</div>
			</form>
			<div class="row">
				<!-- Start the Loop. -->
				<?php if ( have_posts() ) : ?>
          <?php query_posts( 'cat=266&posts_per_page=4&orderby=rand' ); ?>
					<?php while ( have_posts() ) : the_post(); ?>				            
            <div class="banner col-md-3 banner-label-bottom">
            	<div class="bg-white">
	            	<?php $image_foto_nombre = get_field('estilo_foto_nombre'); ?>
	            	<?php $image_foto_restaurante = get_field("estilo_foto_restaurante"); ?>
					    	<?php if ($image_foto_nombre!='') { ?>
				    			<div class="banner-pic" style="background-image: url(<?php echo home_url("/"); ?>fotos_restaurantes/<?php the_field("estilo_foto_nombre"); ?>)"></div>
				    		<?php } else { ?>
				    			<?php if ($image_foto_restaurante!='') { ?>
				    				<div class="banner-pic" style="background-image: url(<?php the_field("estilo_foto_restaurante"); ?>)"></div>
				    			<?php } else { ?>
				    				<div class="banner-pic" style="background-image: url(/wp-content/uploads/2015/02/eventos_redprolid.png)"></div>
				    			<?php } ?>
				    		<?php } ?>	  
	            	<div class="banner-content flex-none">
		            	<?php	$category = get_the_category(); ?>
		            	<?php $nombre1 = $category[3]->cat_name; ?>
	            		<?php $nombre2 = $category[2]->cat_name; ?>
	            		<?php $nombre3 = $category[1]->cat_name; ?>
	            		<?php if ($nombre1=='Tiendas') { ?>
	            			<small>Tienda</small>
	            		<?php } ?>
	            		<?php if ($nombre2=='Tiendas') { ?>
	            			<small>Tienda</small>
	            		<?php } ?>	            		
	            		<?php if ($nombre3=='Tiendas') { ?>
	            			<small>Tienda</small>
	            		<?php } ?>
	            		<?php if ($nombre1=='Restaurantes') { ?>
	            			<small>Restaurante</small>
	            		<?php } ?>
	            		<?php if ($nombre2=='Restaurantes') { ?>
	            			<small>Restaurante</small>
	            		<?php } ?>	            		
	            		<?php if ($nombre3=='Restaurantes') { ?>
	            			<small>Restaurante</small>
	            		<?php } ?>	            		
		              <h3 class="medium mt-7 mb-0 pb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
		              <?php $estilo_descripcion = get_field('estilo_descripcion');?>
		              <?php $estilo_descripcion = substr($estilo_descripcion, 0, 100); ?>
		              <p class="mt-14"><?php echo $estilo_descripcion;?>...</p>
		              <small><?php the_field('estilo_direccion_lugar') ?></small>
		              <div class="text-right banner-label mb-7">
		              	<small><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="vermas medium">Ve más &gt;&gt;</a></small>
		              </div>
	            	</div>
            	</div>
            </div>
          <?php endwhile; ?>
				<?php endif; ?>				            				            
      </div>
		</div>
	</section>

	<section class="pv-70">
		<div class="container-sm">
			<div class="row normalize-text">
				<div class="col-sm-12">
					<h3>¿Tienes alguna recomendación?</h3>
					<p class="mt-7">Anímate a mandarnos los nombres de los lugares que tú recomendarías, esos restaurantes donde siempre comes rico, esas tiendas donde encuentras ropa o complementos originales. Tú conoces tu ciudad como la palma de la mano, igual que conoces otras a  las que viajes con frecuencia. Tu opinión nos puede ser muy útil a todas las demás.</p>
				</div>
			</div>
			<hr>
			<?php if ( is_user_logged_in() ) { ?>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 12 ); } ?>	
			<?php } else { ?>
				<h4 class="medium text-center">Para hacer una recomendación es necesario <a href="<?php echo home_url('/'); ?>registrate/">ingresar a tu cuenta o registrarte</a> a Red PROLID.</h4>
			<?php } ?>			
					
			<!--<form action="">
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
			</form>-->
		</div>
	</section>

<?php get_footer(); ?>    















