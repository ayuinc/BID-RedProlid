<?php

/**
 * Forums Loop - Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<ul id="bbp-forum-<?php bbp_forum_id(); ?>" class="forum type-forum status-publish hentry loop-item-0 odd bbp-forum-status-open bbp-forum-visibility-publish p-0">

	<li class="bbp-forum-info-archive">

		<?php if ( bbp_is_user_home() && bbp_is_subscriptions() ) : ?>

			<span class="bbp-row-actions">

				<?php do_action( 'bbp_theme_before_forum_subscription_action' ); ?>

				<?php bbp_forum_subscription_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); ?>

				<?php do_action( 'bbp_theme_after_forum_subscription_action' ); ?>

			</span>

		<?php endif; ?>


		<?php do_action( 'bbp_theme_before_forum_title' ); ?>
	 	<div class="background-sepia ph-35 pv-14">
	 		<a class="bbp-forum-title" href="<?php bbp_forum_permalink(); ?>"><h2 class="light"><?php bbp_forum_title(); ?></h2></a>
	 	</div>
		<?php do_action( 'bbp_theme_after_forum_title' ); ?>

		<?php do_action( 'bbp_theme_before_forum_description' ); ?>

		<div class="bbp-forum-content background-light-sepia ph-35 pv-14 m-0"><?php bbp_forum_content(); ?></div>

		<?php do_action( 'bbp_theme_after_forum_description' ); ?>

		<?php do_action( 'bbp_theme_before_forum_sub_forums' ); ?>

		<?php bbp_list_forums(); ?>

		<?php do_action( 'bbp_theme_after_forum_sub_forums' ); ?>

		<?php bbp_forum_row_actions(); ?>

	</li>

	<li class="">
		    <?php 
		     if ( !bbp_is_forum_category() && bbp_has_topics( array('post_parent' => bbp_get_forum_id()))) :?>

				<?php bbp_get_template_part( 'loop',  'forum-topics' ); ?>
		
		<?php endif; ?>
	</li>


</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->
