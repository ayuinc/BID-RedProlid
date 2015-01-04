<?php
/*
Template Name: Charlacafe Page
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

    <div class="mh-500">
      <section class="mt-7 mb-21"> 
			  <div class="container relative mb-14">
			    <div class="row">
			      <div class="col-md-12">
			        <?php the_breadcrumb(); ?>
			      </div>
			    </div>
			    <div class="absolute dtl-custom-heading z-index-100">
			      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-1.png" alt="" width="80"></div>
			      <div class="clearfix">
			        <div class="col-md-12">
			          <h1 class="mt-14 ml--25 mb-0 brand-titular">Charlacafé</h1>
			        </div>
			      </div>
			    </div>	
			  </div>      
      </section>	    
      <section class="pt-7-100 mb-21">
        <div class="container">
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <p class="lead">Seguro que tienes mucho que aportar en los debates que vamos a propiciar en esta sección: por un lado, los webinarios, más cortos, de aproximadamente una hora de duración ; y por otro, los foros virtuales que durarán alrededor de tres semanas, en  las cuales te animamos a intervenir para aportarnos tu experiencia y tu opinión...así como si nos estuviéramos tomando un café.</p>
              <div class="row">
                <div class="col-sm-6">
                  <a href="#" class="block text-center"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/charlacafe-foros-virtuales.png" alt="" class=""></a>
                  <div class="text-right mr-63">
                    <a href="#">Foros aquí &gt; &gt;</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <a href="<?php echo home_url('/'); ?>webinar-principal" class="block text-center"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/charlacafe-webinarios.png" alt="" class=""></a>
                  <div class="text-right mr-63">
                    <a href="<?php echo home_url('/'); ?>webinar-principal">Webinarios aquí &gt; &gt;</a>
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
