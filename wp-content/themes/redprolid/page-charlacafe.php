<?php
/*
Template Name: Charlacafe Page
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section>
        <div class="container relative mh-140">
          <div class="absolute dtl-custom-heading">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-1.png" alt=""></div>
            <h1 style="color: #aeab8b;">Charlacafé</h1>
            <hr style="border-top: 3px dotted #aeab8b;">
          </div>
        </div>
        <div class="container with-shadow">
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <p class="lead">Seguro que tienes mucho que aportar en los debates que vamos a propiciar en esta sección: por un lado, los webinarios, más cortos, de aproximadamente una hora de duración ; y por otro, los foros virtuales que durarán alrededor de tres semanas, en  las cuales te animamos a intervenir para aportarnos tu experiencia y tu opinión...así como si nos estuviéramos tomando un café.</p>
              <div class="row">
                <div class="col-sm-6">
                  <a href="#" class="block text-center"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/charlacafe-foros-virtuales.png" alt="" class=""></a>
                  <div class="text-right">
                    <a href="#">Foros aquí &gt; &gt;</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <a href="#" class="block text-center"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/charlacafe-webinarios.png" alt="" class=""></a>
                  <div class="text-right">
                    <a href="<?php echo home_url('/'); ?>webinar-principal/">Webinarios aquí &gt; &gt;</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
