<?php

/**
 * Single Topic
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<section class="mt-7"> 
 	<div class="container relative">
    <?php bbp_breadcrumb(); ?>
    <?php bbp_get_template_part( 'content', 'forum-header' ); ?>
	    <div class="ph-70-sm ph-14-xs pv-7">
	      	<div class="row pt-14-sm pb-14">

		<?php do_action( 'bbp_before_main_content' ); ?>

			<?php do_action( 'bbp_template_notices' ); ?>	

			<?php if ( bbp_user_can_view_forum( array( 'forum_id' => bbp_get_topic_forum_id() ) ) ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div id="bbp-topic-wrapper-<?php bbp_topic_id(); ?>" class="bbp-topic-wrapper">
						<h1 class="entry-title pv-14 background-light-sepia mb-0 light text-center"><?php bbp_topic_title();?></h1>
						<div class="entry-content">
							<?php bbp_get_template_part( 'content', 'single-topic' ); ?>
						</div>
					</div><!-- #bbp-topic-wrapper-<?php bbp_topic_id(); ?> -->

				<?php endwhile; ?>

			<?php elseif ( bbp_is_forum_private( bbp_get_topic_forum_id(), false ) ) : ?>

				<?php bbp_get_template_part( 'feedback', 'no-access' ); ?>

			<?php endif; ?>

			<?php do_action( 'bbp_after_main_content' ); ?>

			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>