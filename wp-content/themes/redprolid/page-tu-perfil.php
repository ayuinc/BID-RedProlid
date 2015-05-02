<?php
/*
Template Name: Tu Perfil
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
  <section id="toc-main">
    <div class="container-sm">
      <?php the_breadcrumb(); ?>

      <div class="row pv-42">
        <div class="col-sm-4">
          <?php echo get_avatar( $current_user->ID, 250); ?>
          <h4 class="light mb-0"><?php echo $current_user->user_nicename; ?></h4>
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
        <div class="col-sm-6 ph-70-sm">
          <h2>Mis Cometarios</h2>
          <div class="mb-25"></div>
          <ul class="list-unstyled list-group list-group-custom">
          <?php
          $args = array(
            'user_id' => $current_user->ID
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
        <div class="col-sm-6 ph-70-sm">
          <h2>Mis Posts</h2>
          <div class="mb-35"></div>
          <?php query_posts('author='.$current_user->ID); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <ol>- <?php the_title(); ?></ol>
          <br>
          <?php endwhile; else: ?>
          <?php echo "Aun no tiene posts"; ?>
          <?php endif; ?>

          <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>