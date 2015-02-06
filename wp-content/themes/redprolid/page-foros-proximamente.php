<?php
/*
Template Name: Foros proximamente
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section> 
  <div class="container">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <!-- IF POSTS in FOROS -->
      <div class="col-sm-1 col-xs-3">
	      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/foros_icon.png" alt="" width="100%"></div>
	    </div>
      <div class="col-sm-5 col-xs-9">
        <h1 class="brand-titular">Foro virtual</h1>
      </div>
      <div class="col-sm-6 col-xs-12">
        <nav class="text-right text-center-xs">
          <a href="<?php echo home_url('/'); ?>charlacafe">Charlacafé >></a>
        </nav>
      </div>
      <!-- END:IF POSTS in FOROS -->
    </div> 
    <!-- IF NO POSTS in FOROS -->
    <div class="ph-70 text-center">
    	<h3>Próximamente anunciaremos nuestro primer foto virtual</h3>
    	<p class="light">¡Vuelve a visitar este espacio pronto!</p>
    	<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/02/foros.jpg">
    </div>
    <!-- END:IF NO POSTS in FOROS -->
  </div>
</section>
<?php get_footer(); ?> 













