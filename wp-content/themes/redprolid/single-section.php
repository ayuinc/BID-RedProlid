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
	    <h4><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h4>
	    <p>FUENTE: <a href="<?php the_field('url');?>" target="_blank"><?php the_field('blog-debates');?><?php $debate_tipo_de_url=get_field('debate_tipo_de_url'); ?><?php if ($debate_tipo_de_url=='video') { ?><img src="http://redprolid.org/wp-content/themes/redprolid/assets/img/enterate-grid-4-01.png" alt="" style="margin:0 5px; width:20px"><?php } ?></a> <?php the_field('autor');?></p>
    </div>
    
    <?php $youtube = get_field('debate_video_youtube'); ?>
  	<?php if ($youtube!='') { ?>
    <div class="pv-21">
    	<iframe width="100%" height="551" src="//www.youtube.com/embed/<?php the_field('debate_video_youtube'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>  
    </div>   
		<?php } ?>
    <?php $vimeo = get_field('debate_video_vimeo'); ?>
  	<?php if ($vimeo!='') { ?>		
  	<div class="pv-21">	
			<iframe src="//player.vimeo.com/video/<?php the_field('debate_video_vimeo'); ?>?color=1f3340&title=0&byline=0&portrait=0" width="100%" height="551" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div> 		
		<?php } ?>
    <?php $vimeo = get_field('debate_imagen'); ?>
  	<?php if ($vimeo!='') { ?>		
  	<div class="pv-21">	
			<img src="<?php the_field('debate_imagen'); ?>" alt="<?php the_title(); ?>" class="img-responsive" width="100%">
		</div> 		
		<?php } ?>		
        
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
        <p>Para poder comentar es necesario que <a href="/registrate/">inicies tu sesión o te registres</a> en Red PROLID.</p>
			<?php }	?>
    </div> 

<?php endforeach; ?>