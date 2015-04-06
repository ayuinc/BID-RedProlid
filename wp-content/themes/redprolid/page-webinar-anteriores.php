<?php
/*
Template Name: Webinar previous Page
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<section class="mt-7 mb-21"> 
  <div class="container relative mb-14">
    <?php the_breadcrumb(); ?>        
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Webinarios anteriores</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>charlacafe">Charlacafé &gt;&gt;</a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/webinarios-icon.png" width="94px" height="auto" alt="">
      </div>
    </div>
    <div class="ph-70">
      <div class="row">
        <form action="">
          <div class="col-sm-4 form-group">
            <select name="" id="" class="form-control select-override">
              <option value="Del más antiguo al más nuevo">Del más antiguo al más nuevo</option>
            </select>
          </div>
        </form>
      </div>
      <?php query_posts( 'category_name=webinario' ); ?> 
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="banner">
        <div class="banner-pic bg-panel col-sm-4">
          <iframe class="embed-responsive-item" width="100%" height="210" src="//www.youtube.com/embed/<?php the_field('video'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="banner-content col-sm-8">
            <h3 class="text-gray-dark"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
            <div>
              <p><?php the_field('descripcion_resumen'); ?></p>
              <span class="text-gray"><?php echo_post_views(get_the_ID()); ?> visualizaciones</span>
            </div>
            <div class="flex-space-between pt-21">
              <div class="left">
                <strong>Fecha:</strong>
                <div>
	                <?php $tempDate = $field = get_field('fecha_inicio_resumen'); ?>
                  <span><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></span> a las <span class="text-gray"><?php the_field('hora_inicio_resumen'); ?> horas</span>
                </div>
              </div>
              <div class="right flex-middle">
                <nav>
                  <a href="<?php echo get_permalink( get_the_ID() ); ?>">Ver webinario</a> 
                  <span class="text-primary">|</span> 
                  <a href="<?php the_field('link_a_resumen'); ?>">Resumen del webinario</a>
                </nav>
              </div>
            </div>
        </div>
      </div>
      <?php endwhile; ?> 
      <ul class="pager">
        <li><a href="#">Previos</a></li>
        <li><a href="#">Siguiente</a></li>
      </ul>
    </div>
  </div>      
</section>

<?php get_footer(); ?>
