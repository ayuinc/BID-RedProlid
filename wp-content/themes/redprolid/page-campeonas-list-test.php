<?php
// die('entro plantilla');
/*
Template Name: Campeonas list test
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<?php the_breadcrumb(); ?>
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Entrevistas anteriores</h1>
          <nav class="mt-21">
            <a href="<?php echo content_url('/'); ?>campeonas">Campeon@s >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/campeonas-icon-square-alpha.png" width="94px" height="auto" alt="">
      </div>
    </div> 
    <?php add_filter('post_limits', 'my_post_limit'); ?>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
        <?php
        $count = 0; 
        global $myOffset;
        $myOffset = 1;
        $temp = $wp_query;
        $wp_query= null;
        $wp_query = new WP_Query();
        $wp_query->query('cat=2&offset='.$myOffset.'&showposts=10&paged='.$paged);
        ?>                   
        
<?php get_footer(); ?>