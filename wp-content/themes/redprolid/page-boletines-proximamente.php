<?php
/*
Template Name: Boletines proximamente
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
	      <div>
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_suscribete.png" alt="" width="100%">
			  </div>
	    </div>
      <div class="col-sm-5 col-xs-9">
        <h1 class="brand-titular">Boletines</h1>
      </div>
      <div class="col-sm-6 col-xs-12"></div>
      <!-- END:IF POSTS in FOROS -->
    </div> 
    <!-- IF NO POSTS in FOROS -->
    <div class="ph-70 text-center pb-35">
    	<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/02/Screen-Shot-2015-02-27-at-9.49.16-AM.png" width="100%">
    </div>
    <!-- END:IF NO POSTS in FOROS -->
  </div>
</section>
<?php get_footer(); ?> 













