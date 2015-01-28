<?php
/*
Template Name: Foro respuestas
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
        <div class="col-md-6">
          <h1 class="brand-titular">Tus respuestas</h1>
        </div>
        <div class="col-md-6">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>charlacafe">Foro virtual &gt;&gt;</a>
          </nav>
        </div>
	    </div> 
	  </div>
	  <div class="container-sm">
	  	<form action="">
	  		<div class="form-group">
	  			<label for="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
	  			<textarea name="" id="" rows="5" class="form-control"></textarea>
	  			<small class="help-block">Escribe aquí tus respuestas</small>
	  		</div>
	  		<div class="form-group">
	  			<label for="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
	  			<textarea name="" id="" rows="5" class="form-control"></textarea>
	  			<small class="help-block">Escribe aquí tus respuestas</small>
	  		</div>
	  		<div class="form-group">
	  			<label for="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
	  			<textarea name="" id="" rows="5" class="form-control"></textarea>
	  			<small class="help-block">Escribe aquí tus respuestas</small>
	  		</div>
	  		<div class="form-group text-right">
	  			<button type="submit" class="btn btn-primary">Enviar</button>
	  		</div>
	  	</form>
	  </div>
	  <div class="container">
	  	<h3>Todas las respuestas</h3>
	  	<hr>
	  	<div class="clearfix text-white">
	  		<div class="col-sm-3 minh-70 flex-middle">
	  			<h5>Autor</h5>
	  		</div>
	  		<div class="col-sm-9 minh-70 flex-middle">
	  			<h3>Título del foro: Mujeres en la política <span class="light">(Leído 770 veces)</span></h3>
	  		</div>
	  	</div>
	  	<div class="banner">
	  		<div class="banner-pic col-sm-3 bg-panel text-center">
	  			<div>
	  				<h5>Red Prolid</h5>
	  				<div>
	  					<span>Administrador</span>
	  					<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/foros_icon.png" alt="" width="70px" class="img-circle">
	  				</div>
	  			</div>
	  		</div>
	  		<div class="banner-content col-sm-9">
	  			<div class="row">
	  				<div class="col-sm-9">
	  					<div class="comment-icon-content">
	  						<h5>Mujeres en la política</h5>
	  						<small class="text-gray">Agosto 1 del 2014, 07:00:00 a.m.</small>
	  					</div>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam modi alias animi itaque vel. Eaque, cumque, velit! Cum aliquid in, qui sint aliquam, fuga consectetur odio sit autem placeat similique!</p>
	  				</div>
	  				<div class="col-sm-3 text-center">
	  					<a href="#" class="h5">Comenta</a>
	  					<div class="pv-14 online-icon">En línea</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="banner">
	  		<div class="banner-pic col-sm-3 bg-panel text-center">
	  			<div>
	  				<h5>Red Prolid</h5>
	  				<div>
	  					<span>Administrador</span>
	  					<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/foros_icon.png" alt="" width="70px" class="img-circle">
	  				</div>
	  			</div>
	  		</div>
	  		<div class="banner-content col-sm-9">
	  			<div class="row">
	  				<div class="col-sm-9">
	  					<div class="comment-icon-content">
	  						<h5>Mujeres en la política</h5>
	  						<small class="text-gray">Agosto 1 del 2014, 07:00:00 a.m.</small>
	  					</div>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam modi alias animi itaque vel. Eaque, cumque, velit! Cum aliquid in, qui sint aliquam, fuga consectetur odio sit autem placeat similique!</p>
	  				</div>
	  				<div class="col-sm-3 text-center">
	  					<a href="#" class="h5">Comenta</a>
	  					<div class="pv-14 online-icon">En línea</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	</section>
</div>

<?php get_footer(); ?>    













