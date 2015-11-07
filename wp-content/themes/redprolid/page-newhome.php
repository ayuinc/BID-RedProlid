<?php
/*
Template Name: Prototipo Homepage
*/
get_template_part( 'include', 'headerprototipo' ); ?>
	
	<div class="site-content">
		<div class="minh-490 bg-img-block flex" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/img/women.jpg)">
			<div class="search-bar minh-70 p-21 bg-pink-redprolid flex-bar">
					<p class="bold text-white pt-7">Forma parte de la Red PROLID</p><input placeholder="Nombre" class="border-radius mh-14" type="text"><input placeholder="Correo Electrónico" class=" border-radius mh-14" type="text"><button class="btn btn-outline btn-white border-radius bold">REGÍSTRATE</button>
			</div>
		</div>
		<div class="middle-content">
		 	<div class="container-sm">
				<div class="row">
			 		<div class="col-sm-12 col-md-12 col-xs-12">
			 			<div class="icono-content text-center">
			 				<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-red-prolid-icon.png" class="img-responsive" style="width:6%;">
			 			</div>
			 			<div class="text-description">
			 				<p class="text-gray">Somos una inciativa del Banco Interamericano de Desarrollo (BID) para el intercambio de experiencias e ideas entre mujeres que hacen política y que ocupan -- o apiran a ocupar -- posciciones de liderazgo en la administración pública en América Latina.</p>			 				
			 			</div>
			 			<div class="video-intro text-center">
			 				<iframe width="580" height="315" src="https://www.youtube.com/embed/NOZGTyHWs9M" frameborder="0" allowfullscreen></iframe>
			 			</div>
			 		</div>
				</div>
		 		<div class="col-sm-12 col-md-12 col-xs-12"></div>	
		 		<div class="col-sm-12 col-md-12 col-xs-12"></div>		 			 		
		 	</div>
		</div>
	</div>
<?php  get_footer(); ?>


