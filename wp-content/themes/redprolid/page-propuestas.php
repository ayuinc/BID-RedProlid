<?php
/*
Template Name: Nuevas propuestas
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
	    <div class="clearfix sub-header">
        <div class="col-md-1">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-red-prolid-icon.png" alt="" width="100%"></div>
		    </div>
        <div class="col-md-5">
          <h1 class="brand-titular">Nuevas propuestas</h1>
        </div>
        <div class="col-md-6">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>">Ingresa</a> 
            <span class="text-primary">|</span> 
            <a href="<?php echo home_url('/'); ?>">Regístrate</a>
          </nav>
        </div>
	    </div> 
	  </div>
	  <div class="container-xs">
	  	<form action="">
	  		<div class="form-group">
	  			<label for="">Título</label>
	  			<input type="text" class="form-control">
	  		</div>
	  		<div class="form-group">
	  			<label for="">Sección</label>
	  			<select name="" id="" class="form-control select-override">
	  				<option value="opción 1">Sección 1</option>
	  			</select>
	  			<small class="help-block">Esta es la sección para la que deseas proponer el tema</small>
	  		</div>
	  		<div class="form-group">
	  			<label for="">Tema</label>
	  			<textarea rows="5" class="form-control"></textarea>
	  		</div>
	  		<div class="text-right">
	  			<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
	  		</div>
	  	</form>
	  </div>
	</section>
</div>

<?php get_footer(); ?>    













