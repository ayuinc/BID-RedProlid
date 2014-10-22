<?php
/**
 * The template for displaying Search Results pages
 *
 */

get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
	<div class="container">
    <div class="panel panel-custom panel-highlight panel-flex">
      <div class="panel-body">
        <div class="pdv-icon">
          <img src="../assets/img/pdv-main-icon.png" alt="">
        </div>
        <div class="col-sm-6 mb-ch-21">
          <h1>Puntos de vista anteriores</h1>
          <a href="#" class="block">Puntos de vista >></a>
        </div>
        <div>
          <hr style="border-top: 3px dotted #aeab8b;">
          <div class="col-sm-6">
            <?php get_search_form(); ?>
          </div>
          <div class="col-sm-6 text-right">
            <strong>Resultados 0</strong>
            <p>Resultados por página: <a href="#">10</a> - <a href="#">50</a> - <a href="#">100</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next post navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>
