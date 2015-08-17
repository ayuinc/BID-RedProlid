<?php
/*
Template Name: Nuevas propuestas
*/

get_header(); ?>

<?php $tipo_de_formulario = $_GET["propuesta"]; ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div>
	<section class="mt-7"> 
	  <div class="container relative">
	    <?php the_breadcrumb(); ?>
	    <div class="clearfix sub-header">
        <div class="col-sm-1 col-xs-3">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-red-prolid-icon.png" alt="" width="100%"></div>
		    </div>
        <div class="col-sm-5 col-xs-9">
          <h1 class="brand-titular">Nuevas propuestas</h1>
        </div>
        <div class="col-sm-6 col-xs-12">
				<?php if ( is_user_logged_in() ) { ?>	   
				
				<?php } else { ?>     
          <!--<nav class="text-right text-center-xs">
            <a href="<?php echo home_url('/'); ?>">Ingresa</a> 
            <span class="text-primary">|</span> 
            <a href="<?php echo home_url('/registrate'); ?>">Regístrate</a>
          </nav>-->
        <?php } ?>  
        </div>
	    </div> 
	  </div>
	</section>
	<section> 
	  <div class="container">
	    <div class="row">
				<div class="col-md-12">
					<h3 class="light">Si quieres proponer un tema en esta sección, debes ser un usuario registrado, o haber ingresado a tu cuenta en Red PROLID.</h3>
				</div>
	    </div>	
	  </div>      
	</section>	  
	<section>  
	  <?php if ( is_user_logged_in() ) { ?>
		  <div class="container-xs">
				<!--Noticias-->
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ?>
					<?php if ($tipo_de_formulario=='noticias') { ?>
				  	<div class="text-center">
					  	<h3>¿Quieres compartir una noticia?</h3>
				  	</div>					
						<?php ninja_forms_display_form( 3 ); ?>
					<?php } ?>
				<?php } ?>
				
		  </div>
	  <?php } else { ?>
	  	<div class="container-sm pt-21">
	  	<div class="row">
	  		<div class="col-sm-6 text-center">
	  			<h3 class="medium">Registrate como un nuevo usuario</h3>
	  			<div class="pv-21">
	  				<a href="#" class="btn btn-primary btn-lg">Únete</a>
	  			</div>
	  		</div>
	  		<div class="col-sm-6">
	  			<h3 class="medium">Ingresa al sistema</h3>
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
	  		</div>
	  	</div>	
	  </div>
	  <?php } ?>
	</section>
</div>

<?php get_footer(); ?>    













