<?php
/**
 * bbPress - Forum Archive
 *
 * @package bbPress
 * @subpackage Theme
 */
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<section class="mt-7 forum-archive"> 
	<div class="container relative">
	    <?php bbp_breadcrumb(); ?>
	    <?php bbp_get_template_part( 'content', 'forum-header' ); ?>
	    <div class="ph-70-sm ph-14-xs pv-7">
	      <div class="row pt-14-sm pb-14">

		<?php do_action( 'bbp_before_main_content' ); ?>

		<?php do_action( 'bbp_template_notices' ); ?>

		<div id="forum-front" class="bbp-forum-front">
			<div class="entry-content">

				<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

			</div>
		</div><!-- #forum-front -->

		<?php do_action( 'bbp_after_main_content' ); ?>
			</div>
		</div>
	</div>
</section>
	<script>
	$( document ).ready(function() {
		$.each( $('.forum'), function (hey1, foro) {
			$.each( $(foro).find('.bbp-topic-order') , function (index , value) { 
				$(value).html(index+1);
			}) 
		});
	});
	</script>
<?php get_footer(); ?>
