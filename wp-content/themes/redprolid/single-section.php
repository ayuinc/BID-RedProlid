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
    <div>
    <?php if ($segment2 == 'listas-para-la-politica'): ?>
      FUENTE: <a href="<?php the_field('url'); ?>"><?php the_field('fuente-debates'); ?></a>
    <?php else: ?>
      FUENTE: <?php the_field('fuente-debates'); ?>
    <?php endif; ?>
      <?php if ($blog!=''): ?>  
        <?php if ($segment2 == 'listas-para-la-politica'): ?>
          <p><?php the_field('blog-debates'); ?></p>
        <?php else: ?>
          <a href="<?php the_field('url'); ?>"><?php the_field('blog-debates'); ?></a>
        <?php endif; ?>
      <?php endif; ?>
    <?php if ($segment2 == 'agenda-de-genero' || $segment2 == 'carrera-de-vallas' || $segment2 == 'nivelando-la-cancha') {?>
      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/enterate-grid-4-01.png" alt="" style="width:20px">
    <?php } ?>
    </div>
    </div>
    <div class="content">
      <?php the_field('contenido-debates'); ?>
    </div>
    <div class="footer">
      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
    </div>
    <div class="comments mt-35">
      <?php comments_template();?>
    </div> 

<?php endforeach; ?>