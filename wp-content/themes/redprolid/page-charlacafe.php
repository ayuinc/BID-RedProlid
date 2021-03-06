<?php
/*
Template Name: Charlacafe Page
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

  <section class="pv-28"> 
	  <div class="container relative mb-14 hidden-xs">
      <?php the_breadcrumb(); ?>
      <div class="clearfix sub-header">
        <div class="col-sm-1 col-xs-3">
          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-1.png" alt="" class="img-responsive"></div>
        </div>
        <div class="col-sm-5 col-xs-9">
          <h1 class="brand-titular">Charlacafé</h1>
        </div>
        <div class="col-sm-6 col-xs-12"></div>
      </div>
      <div class="ph-70">
        <p class="lead text-justify">Seguro que tienes mucho que aportar en los debates que vamos a propiciar en esta sección: por un lado, los webinarios, más cortos, de aproximadamente una hora de duración; y por otro, los foros virtuales que durarán alrededor de tres semanas, en  las cuales te animamos a intervenir para aportarnos tu experiencia y tu opinión...así como si nos estuviéramos tomando un café.</p>
        <div class="row">
          <div class="col-sm-6">
            <a href="<?php echo home_url('/'); ?>foros-proximamente" class="block text-center"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/charlacafe-foros-virtuales.png" alt="" class=""></a>
            <div class="text-right mr-63">
              <a href="<?php echo home_url('/'); ?>foros-proximamente">Foros aquí &gt; &gt;</a>
            </div>
          </div>
          <div class="col-sm-6">
            <a href="<?php echo home_url('/'); ?>webinarios-proximamente/" class="block text-center"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/charlacafe-webinarios.png" alt="" class=""></a>
            <div class="text-right mr-63">
              <a href="<?php echo home_url('/'); ?>webinarios-proximamente/">Webinarios aquí &gt; &gt;</a>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </section>      

<?php get_footer(); ?>
