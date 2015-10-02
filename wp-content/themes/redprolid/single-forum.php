<?php

/**
 * Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<div class="container">
<section class="mt-7"> 
  <div class="container relative">
    <?php bbp_breadcrumb(); ?>
    <?php bbp_get_template_part( 'content', 'forum-header' ); ?>
    <div class="ph-14-xs pv-21">
      <div class="pt-14-sm pb-14">

	<div class="single-forum">
	<?php do_action( 'bbp_before_main_content' ); ?>

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php if ( bbp_user_can_view_forum() ) : ?>

			<div id="forum-<?php bbp_forum_id(); ?>" class="bbp-forum-content">
				<div class="entry-title ph-70-lg ph-35-sm pv-14 background-sepia">
					<h1 class="light mb-0"><?php bbp_forum_title(); ?></h1>
						<div class="bbp-subscribe-link text-right">	
						<?php bbp_forum_subscription_link(); ?>
						</div>
				</div>
				<div class="entry-content">
					<?php bbp_get_template_part( 'content', 'single-forum' ); ?>
				</div>
			</div><!-- #forum-<?php bbp_forum_id(); ?> -->

		<?php else : // Forum exists, user no access ?>

			<?php bbp_get_template_part( 'feedback', 'no-access' ); ?>

		<?php endif; ?>

	<?php endwhile; ?>

	<?php do_action( 'bbp_after_main_content' ); ?>
	</div>
	</div>
	</div>
	</div>
	</section>
</div>
	<script>
	$( document ).ready(function() {
		$.each( $('.bbp-topic-order') , function (index , value){ 
				$(value).html(index+1);
			});
	});
	</script>

<?php get_footer(); ?>
