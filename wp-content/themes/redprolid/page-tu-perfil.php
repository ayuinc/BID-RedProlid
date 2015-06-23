<?php
/*
Template Name: Tu Perfil
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<style>
	.custom_field_checkbox {
		display: table;
	}
</style>
  <section id="toc-main">
    <div class="container">
      <?php the_breadcrumb(); ?>

      <div class="row pv-42">
        <div class="col-sm-4">
          <?php echo get_avatar( $current_user->ID, 250); ?>
          <h4 class="light pt-7 mb-0"><?php echo $current_user->display_name; ?></h4>
        </div>
        <div class="col-sm-8 ph-70-sm">
          <div class="row">
          	<div class="col-xs-12">
				      <?php while ( have_posts() ) : the_post(); ?>
		    			  <?php the_content(); ?>
		    		  <?php endwhile; ?>
				    </div>
		      </div>
        </div>
      </div>
      <div class="row pv-42">
        <div class="col-sm-6">
          <h2 class="medium">Mis comentarios</h2>
          <div class="mb-25"></div>
          <ul class="list-unstyled list-group list-group-custom">
          <?php
          $args = array(
            'user_id' => $current_user->ID,
            'status'  => 'approve'
          );
          $comments = get_comments($args);?>

          <?php foreach ($comments as $comment) : ?>
            <li class="mb-14">
              <p class="light" id="home-comment"><?php echo($comment->comment_content);?></p>
              <small class="date light"><a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo get_the_title( $comment->comment_post_ID ); ?></a></small></br>
              <small class="date light"><?php echo($comment->comment_date);?> | <?php echo($comment->comment_author);?></small> 
            </li>
          <?php endforeach;?>
          </ul>
        </div>
        <div class="col-sm-6">
          <h2 class="medium">Mis publicaciones</h2>
          <div class="mb-35"></div>
          <?php query_posts('author='.$current_user->ID); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	          <div class="title">
	            <h3 class="medium mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
	            <?php $publicacion = get_field('publicacion_noticias'); ?>
	            <small>
	            	<?php echo get_the_date('j F, Y'); ?><?php if ($publicacion!='') { ?>, <a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a>
								<?php } ?>
							</small>              
	          </div>
	          <div class="content mb-7">
	            <?php the_field('descripcion_rapida_noticias'); ?>
							<p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>" class="medium">Lee más >></a></p>
	          </div>
	          <hr>
          <?php endwhile; else: ?>
          <?php echo "Aún no has subido un post"; ?>
          <?php endif; ?>

          <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>