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
	  	<!-- IF NOT LOGGED IN -->
	  	<div class="text-center">
		  	<h3>¡Alerta!</h3>
		  	<p>Sólo los usuarios registrados tienen acceso a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident omnis ratione et tempora impedit facere, illo, repellendus ipsa fugit illum veniam maiores possimus voluptatum aliquam esse pariatur soluta nobis officia.</p>
	  	</div>
	  	<!-- END: if not logged in -->
	  	<!-- IF LOGGED IN -->
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
			<!-- END: if logged in -->
	  	<!-- <form action="">
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
	  	</form> -->
	  </div>
	  <!-- IF NOT LOGGED IN -->
	  <div class="container-sm pt-21">
	  	<div class="row">
	  		<div class="col-sm-6 text-center">
	  			<h5>Nuevos usuarios</h5>
	  			<div class="pv-21">
	  				<a href="#" class="btn btn-primary btn-lg">Únete</a>
	  			</div>
	  		</div>
	  		<div class="col-sm-6">
	  			<h5>Usuarios registrados</h5>
	  			<div class="user-sign-in-form pv-21">
              <?php 
                if ( is_user_logged_in() ) {

                  $current_user = wp_get_current_user();
                  echo '<div class="text-right">';
                  echo '<h4 class="light">Hola '.$current_user->user_nicename.'</h4>';
									echo '<a href="'.wp_logout_url().'" title="Logout" class="light">Cierra tu sesión</a>';
                  echo '</div>';

                } else {

                  echo do_shortcode('[dm_login_form]'); 

                }
              ?>
            </div>
	  			<!-- <div class="pv-21">
	  				<form action="">
	  					<div class="form-group">
	  						<label for="" class="sr-only">Usuario</label>
	  						<input type="text" class="form-control" placeholder="Usuario o correo electrónico">
	  					</div>
	  					<div class="form-group">
	  						<label for="" class="sr-only">Contraseña</label>
	  						<input type="password" class="form-control" placeholder="Contraseña">
	  					</div>
	  					<div class="form-group">
	  						<label for="">
	  							<input type="checkbox"> 
	  							Recordarme
	  						</label>
	  					</div>
	  					<div class="form-group row">
	  						<div class="col-xs-8 minh-70 flex-middle">
	  							<a href="#">¿Olvidaste tu contraseña?</a>
	  						</div>
	  						<div class="col-xs-4 minh-70 flex-middle">
	  							<button type="submit" class="btn btn-primary">Ingresar</button>
	  						</div>
	  					</div>
	  				</form>
	  			</div> -->
	  		</div>
	  	</div>	
	  </div>
	  <!-- END: if not logged in -->
	</section>
</div>

<?php get_footer(); ?>    













