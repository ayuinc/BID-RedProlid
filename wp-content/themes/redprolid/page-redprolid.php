<?php
/*
Template Name: Red PROLID
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    
    
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
    <div class="mh-700">
      <section id="hero-unit">
        <div class="container with-shadow">
          <div class="content clearfix">
            <div class="col-sm-6">
              <div class="dtl-custom-heading">
                <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-red-prolid-icon.png" alt=""></div>
                <h1 style="color: #fff;">¿Qué es Red PROLID?</h1>
                <hr style="border-top: 3px dotted #fff;">
              </div>
              <p class="pt-28-100 pl-7-100 text-justify"><?php the_field('que_es_redprolid'); ?></p>
            </div>
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-network-right.png" alt="" class="network-right">
          </div>
          <h5 class="text-center light pt-42 lead"><?php the_field('texto_central_redprolid'); ?></h5>
        </div>
      </section>
      <section class="pb-0">
        <div class="container with-shadow pb-28">
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title">La Red PROLID quiere ser</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(../assets/icons/sprites-red-prolid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="panel-body">
              <ul class="list-unstyled red-prolid-grid">
                <li>
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-1.png" alt="">
                  <p class="light h5"><?php the_field('quiere_ser_op1'); ?></p>
                </li>
                <li>
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-2.png" alt="">
                  <p class="light h5"><?php the_field('quiere_ser_op2'); ?></p>
                </li>
                <li>
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-3.png" alt="">
                  <p class="light h5"><?php the_field('quiere_ser_op3'); ?></p>
                </li>
                <li>
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-4.png" alt="">
                  <p class="light h5"><?php the_field('quiere_ser_op4'); ?></p>
                </li>
                <li>
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-5.png" alt="">
                  <p class="light h5"><?php the_field('quiere_ser_op5'); ?></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title">¿A quiénes va dirigida?</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-red-prolid.png); background-repeat: no-repeat; background-position: 0px -42px;"></li>
              </ul>
            </div>
            <div class="panel-body pb-0">
              <div class="col-sm-6">
                <p><?php the_field('quien_va_dirigida_redprolid'); ?></p>
              </div>
              <div class="col-sm-6 text-right">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-a-quienes.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-0">
        <div class="container pt-0">
          <div class="row">
            <div class="col-sm-3">
              <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-como-nace.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-sm-9 pt-42">
              <div class="panel panel-custom mh-70">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">¿Cómo nace Red PROLID?</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-red-prolid.png); background-repeat: no-repeat; background-position: 0px -84px;"></li>
                  </ul>
                </div>
                <div class="panel-body mh-70">
                  <p><?php the_field('como_nace_redprolid'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
		<?php endwhile; ?>
	<?php endif; ?> 
<?php get_footer(); ?>
