<?php 
    $uri = $_SERVER['REQUEST_URI'];
    $elements = explode('/', $uri) ;
    $segment1 = $elements[1] ; // For the first segment
    $segment2 = $elements[2] ; //For the 2nd segment
    $segment3 = $elements[3] ; //For the 3rd segment
?> 

<?php

$customposts = get_posts('category_name='.$segment2.'&showposts=1' ); // note: you assign your query to a custom post object ($customposts)

foreach( $customposts as $post ) :  // start you custom loop
    setup_postdata($post); ?>

    <div class="title">
    <h3><?php the_title(); ?></h3>
    <p>FUENTE: <?php the_field('fuente-debates'); ?></p>
    <span>Blog: <?php the_field('blog-debates'); ?></span>
    </div>
    <div class="content">
      <?php the_field('contenido-debates'); ?>
    </div>
    <div class="footer">
      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
    </div>
    <div class="comments">
      <?php comments_template();?>
    </div> 

<?php endforeach; ?>