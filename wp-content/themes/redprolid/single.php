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
<?php //query_posts( 'category_name=puntos-de-vista' ); ?> 
<div class="mh-700">
  
  <?php

    $uri = $_SERVER['REQUEST_URI'];
    $elements = explode('/', $uri) ;
    $segment1 = $elements[1] ; // For the first segment
    $segment2 = $elements[2] ; //For the 2nd segment
    $segment3 = $elements[3] ; //For the 3rd segment

    echo $segment1;
    echo $segment2;
    echo $segment3;

    $post = $wp_query->post;

    $cat = get_the_category($post->id);

    print_r($cat[0]->slug);

    
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
  
  ?>
</div>
<?php get_footer(); ?>