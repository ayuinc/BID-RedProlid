<?php
/*
Template Name: Poll page
*/
get_header(); ?>

<div class="mh-700">
  <section id="toc-index">
    <div class="container">
      <div class="row with-hr">
        <div class="col-sm-6">
          <h3>Encuestas anteriores</h3>
        </div>
        <div class="col-sm-6 text-right pt-28">
          <a href="#">Tu opinión cuenta >></a>
        </div>
      </div>
      <ul class="grid-list grid-list-3">
    	<?php while ( have_posts() ) : the_post(); ?>
        <li>
			<?php the_content(); ?>
        </li>
		<?php endwhile; ?>
      </ul>
      <div class="text-center">
        <ul class="pager">
          <li><a href="#">Previos</a></li>
          <li><a href="#">Siguiente</a></li>
        </ul>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>    