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
	    <section class="mb-0 mt-7">
		    <div class="container">
			    <div class="row">
			      <div class="col-md-12">
			        <?php the_breadcrumb(); ?>
			      </div>
			    </div>
          <div class="mh-350 pb-21 mb-21 bg-img-block-right bg-img-block-top" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-network-right-half.png)">
            <div class="clearfix sub-header no-border">
              <div class="col-sm-1">
                <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-red-prolid-icon.png" alt="" width="100%"></div>
              </div>
              <div class="col-sm-6">
                <h1 class="text-white">¿Qué es Red PROLID?</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-1">
                <p class="lead text-justify">
                  <?php the_field('que_es_redprolid'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
	    </section>
      <!-- <section id="hero-unit" class="mt-7 mb-21">
        <div class="container">
          <div class="content clearfix pb-14">
            <div class="col-sm-7">
              <div class="dtl-custom-heading mt-0">
                <div class="ml-0"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-red-prolid-icon.png" alt=""></div>
                <h1 class="medium mt-21 ml-0">¿Qué es Red PROLID?</h1>
              </div>
              <h4 class="pt-21-100 ml-21 light text-justify"><?php the_field('que_es_redprolid'); ?></h4>
            </div>
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-network-right.png" alt="" class="network-right mt-21">
          </div>
        </div>
      </section> -->
      
      <section>
        <div class="container p-21">
          <h4 class="text-center light"><?php the_field('texto_central_redprolid'); ?></h4>
        </div>
      </section>      
      
      <section class="mb-21">
        <div class="container">
          <div class="panel panel-custom">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title highlight-white">La Red PROLID quiere ser</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-red-prolid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="panel-body pt-0 pb-0">
              <ul class="list-unstyled red-prolid-grid mb-0">
                <li class="light">
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-1.png" alt="">
                  <?php the_field('quiere_ser_op1'); ?>
                </li>
                <li class="light">
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-2.png" alt="">
                  <p><?php the_field('quiere_ser_op2'); ?></p>
                </li>
                <li class="light">
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-3.png" alt="">
                  <p><?php the_field('quiere_ser_op3'); ?></p>
                </li>
                <li class="light">
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-4.png" alt="">
                  <p><?php the_field('quiere_ser_op4'); ?></p>
                </li>
                <li class="light">
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/red-prolid-grid-5.png" alt="">
                  <p><?php the_field('quiere_ser_op5'); ?></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="mb-21">
	      <div class="container">
					<div class="panel panel-custom">
					  <div class="panel-heading">
					    <ul class="list-unstyled">
					      <li class="title highlight-white">¿A quiénes va dirigida?</li>
					      <li class="rule"></li>
					      <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-red-prolid.png); background-repeat: no-repeat; background-position: 0px -42px;"></li>
					    </ul>
					  </div>
					  <div class="panel-body pt-0 pb-0">
					    <div class="col-sm-9">
					      <?php the_field('quien_va_dirigida_redprolid'); ?>
					    </div>
					    <div class="col-sm-3 text-right pl-0 pr-0">
					      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-a-quienes.jpg" alt="" width="100%" class="pl-14">
					    </div>
					  </div>
					</div>	 
	      </div>     
      </section>
      
      <section class="mb-21">
	      <div class="container">
					<div class="panel panel-custom">
					  <div class="panel-heading">
					    <ul class="list-unstyled">
					      <li class="title highlight-white">¿Cómo nace Red PROLID?</li>
					      <li class="rule"></li>
					      <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-red-prolid.png); background-repeat: no-repeat; background-position: 0px -84px;"></li>
					    </ul>
					  </div>
					  <div class="panel-body pt-0 pb-0">
					    <div class="col-sm-3">
					      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/red-prolid-como-nace.jpg" alt="" width="100%" class="pr-14">
					    </div>
					    <div class="col-sm-9 text-left pl-0 pr-0">
						    <?php the_field('como_nace_redprolid'); ?>
					    </div>
					  </div>
					</div>	 
	      </div>     
      </section>      

    </div>
		<?php endwhile; ?>
	<?php endif; ?> 
<?php get_footer(); ?>
