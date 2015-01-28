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
	</section>
</div>

<?php get_footer(); ?>    













