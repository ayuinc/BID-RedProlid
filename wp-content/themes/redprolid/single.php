<?php
/**
 * The Template for displaying all single posts
 *
 */

get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div>
  <?php
    $post = $wp_query->post;
    $cat = get_the_category($post->id);
    
    if ( $cat[0]->slug == 'puntos-de-vista' ) {
      get_template_part( 'single-puntosdevista' );
    }

    elseif ( $cat[0]->slug == 'a-donde-vamos' ) {
      get_template_part( 'single-sectionpost' );
    }

    elseif ( $cat[0]->slug == 'agenda-de-genero' ) {
      get_template_part( 'single-sectionpost' );
    }

    elseif ( $cat[0]->slug == 'carrera-de-vallas' ) {
      get_template_part( 'single-sectionpost' );
    }

    elseif ( $cat[0]->slug == 'la-pinta-no-es-lo-de-menos' ) {
      get_template_part( 'single-sectionpost' );
    }

    elseif ( $cat[0]->slug == 'listas-para-la-politica' ) {
      get_template_part( 'single-sectionpost' );
    }

    elseif ( $cat[0]->slug == 'nivelando-la-cancha' ) {
      get_template_part( 'single-sectionpost' );
    }

    elseif ( $cat[0]->slug == 'noticias' ) {
      get_template_part( 'single-noticias' );
    }

    elseif ( $cat[0]->slug == 'concursos' ) {
      get_template_part( 'single-concurso' );
    }

    elseif ( $cat[0]->slug == 'eventos' ) {
      get_template_part( 'single-eventos' );
    }

    elseif ( $cat[0]->slug == 'campeonas' ) {
      get_template_part( 'single-campeonas' );
    }

    elseif ( $cat[0]->slug == 'webinario' ) {
      get_template_part( 'single-webinario' );
    }
    
    elseif ( $cat[0]->slug == 'video-nuevo' ) {
      get_template_part( 'single-video' );
    }

    elseif ( $cat[0]->slug == 'videos-anteriores' ) {
      get_template_part( 'single-video' );
    }        
  ?>
</div>
<?php get_footer(); ?>