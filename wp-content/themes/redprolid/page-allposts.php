<?php
/*
Template Name: All Posts
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section id="dtl-adonde-vamos">
        <div class="container relative dtl-content">
         <!-- Start the Loop. -->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $fields = get_fields(); ?>

							<?php if( $fields )
							{
								foreach( $fields as $field_name => $value )
								{
									// get_field_object( $field_name, $post_id, $options )
									// - $value has already been loaded for us, no point to load it again in the get_field_object function
									$field = get_field_object($field_name, false, array('load_value' => false));

									echo '<div>';
										echo '<h3>' . $the_title() . '</h3>';
										echo '<h3>' . $field_name . '</h3>';
										echo $value;
									echo '</div>';
								}
							}

							?>
						<?php endwhile; ?>
					<?php endif; ?>        
        </div>
      </section>  
    </div>

<?php get_footer(); ?>    