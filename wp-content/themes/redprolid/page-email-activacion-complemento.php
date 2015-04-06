<?php
/*
Template Name: Email Activacion Complemento
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section> 
  <div class="container">
    <!-- IF NO POSTS in FOROS -->
    <div class="ph-70 text-center">
    	<div class="container-sm">
	    	<div class="row pv-49">
	    		<div class="col-sm-8 col-sm-offset-2">
		    		<h3 class="medium text-center mt-35">Hemos recibido el formulario con tus datos</h3>
		    		<p>Por favor, ingresa tu correo electrónico y contraseña para que puedas empezar a navegar en Red PROLID</p>
          </div>
	    	</div>	    	
    	</div>
    </div>
    <!-- END:IF NO POSTS in FOROS -->
  </div>
</section>
<?php get_footer(); ?> 













