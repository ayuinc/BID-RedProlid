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
	    <p>FUENTE: <a href="<?php the_field('url');?>" target="_blank"><?php the_field('blog-debates');?> <img src="http://redprolid.org/wp-content/themes/redprolid/assets/img/enterate-grid-4-01.png" alt="" style="width:20px"></a> <?php the_field('autor');?></p>
    </div>
    <div class="content">
      <?php the_field('contenido-debates'); ?>
    </div>
    <div class="footer pt-0 pb-14">
      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
    </div>
    <div class="comments mt-35">
			<?php	if ( is_user_logged_in() ) { ?>
				<?php comments_template();?>
			<?php } else { ?>
				<p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
			<?php }	?>
    </div> 

<?php endforeach; ?>