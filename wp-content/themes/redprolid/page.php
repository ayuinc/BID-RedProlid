<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<div id="content" style="position: absolute;">
<h1><?php the_title(); ?></h1>
<div class="entry">
<?php the_content('Read the rest of this page &raquo;'); ?>

<?php comments_template(); ?>

<?php wp_link_pages(array('before' => '<strong>Pages:</strong> ', 'after' => '', 'next_or_number' => 'number')); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
</div>