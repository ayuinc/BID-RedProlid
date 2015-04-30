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
    <div class="container">
      <?php the_breadcrumb(); ?>

      <div class="row pv-42">
        <div class="col-sm-4">
          <?php echo get_avatar( $current_user->ID); ?>
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
          <h1>Mis Cometarios</h1>
          <div class="with-hr"></div>
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
          <?php query_posts('author='.$current_user->ID); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_title(); ?>
          <br>
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