<?php
/*
Template Name: Foros principal page
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
	    	<!-- IF NO POSTS in FOROS -->
	      <!-- <div class="col-md-1">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/foros-icon.png" alt="" width="100%"></div>
		    </div>
        <div class="col-md-5">
          <h1 class="brand-titular">Foro virtual</h1>
        </div>
        <div class="col-md-6">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>charlacafe">Charla café &gt;&gt;</a>
          </nav>
        </div> -->
        <!-- END:IF NO POSTS in FOROS -->
        <!-- IF POSTS in FOROS -->
        <div class="col-md-1">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/foros-icon.png" alt="" width="100%"></div>
		    </div>
        <div class="col-md-5">
          <h1 class="brand-titular">Foro virtual</h1>
        </div>
        <div class="col-md-6">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>charlacafe">¿Quieres proponer un tema para los foros?</a> <span class="text-primary">|</span> <a href="#">Foros anteriores</a> <span class="text-primary">|</span> <a href="#">Charlacafé</a>
          </nav>
        </div>
        <!-- END:IF POSTS in FOROS -->
	    </div> 
	    <!-- IF NO POSTS in FOROS -->
	    <!-- <div class="pv-21">
	    	<h3>Próximamente anunciaremos nuestro primer foto virtual</h3>
	    	<p class="light">¡Vuelve a visitar este espacio pronto!</p>
	    </div> -->
	    <!-- END:IF NO POSTS in FOROS -->
	    <div class="banner">
	    	<div class="col-sm-4 banner-pic">
	    		
	    	</div>
	    	<div class="col-sm-8 banner-content">
	    		<h3>Red PROLID anuncia el lanzamiento del Foro: <strong>Mujeres en la política</strong> que se llevará a cabo <strong>el XXX de XXXX del XXXX el tema es xxxxxxxxx</strong></h3>
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, ea. Nobis possimus vitae iusto, blanditiis, dolore velit in quidem esse, harum impedit ex ratione officia beatae deserunt fugiat quod. Dolorum.</p>
	    		<nav class="text-right">
	    			<a href="#">Participa aquí</a>
	    		</nav>
	    	</div>
	    </div>
	  </div>
	</section>
</div>

<?php get_footer(); ?>    













