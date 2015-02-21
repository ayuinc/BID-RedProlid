<?php
/*
Template Name: Propuesta Exito - Noticias
*/

get_header(); ?>
    
<?php if ( is_user_logged_in() ) { ?>
	<h3 class="medium">¿Quieres compartir una noticia?</h3>
	<?php if( function_exists( 'ninja_forms_display_form' ) ) { ?>
		<?php ninja_forms_display_form( 3 ); ?>
	<?php } ?>
<?php } else { ?>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="user-sign-in-form pv-21">
  			<h2 class="medium">Ingresa o regístrate</h2>
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
<?php } ?>

