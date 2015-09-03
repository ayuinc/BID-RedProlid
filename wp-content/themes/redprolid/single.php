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

<script>
function delayer(){
  setTimeout(window.location = "/", 20000);
}
</script>
<div>
  <?php
    global $wc_core;
    // die(print_r($wc_core));
    $post = $wp_query->post;
    $cat = get_the_category($post->id);
		$home_url = home_url('/'); 

    if ( $cat[0]->slug == 'a-donde-vamos' ) {
      echo $cat[0]->slug;
      //get_template_part( 'single-sectionpost' );
      
      if (isset($_GET['wpdiscuzSubscribeID']) && isset($_GET['key'])) {       
        $wc_core->wc_unsubscribe($_GET['wpdiscuzSubscribeID'], $_GET['key']);
        ?>
        <div id="wc_unsubscribe_message" style="background:#79B17E">
            <span class="wc_unsubscribe_message"><?php echo $wc_core->wc_options->wc_options_serialized->wc_phrases['wc_unsubscribe_message']; ?></span>
        </div>
        <nav class="mt-21 pb-21 text-center">
          <a href="/">Inicio &gt;&gt;</a>
        </nav>
        <?php
      }
      else{
        // header("Location: ".$home_url."desarrolla-tu-liderazgo/a-donde-vamos/");
        get_template_part( 'single-desarrolla-tu-liderazgo' );
      }
    }

    elseif ( $cat[0]->slug == 'agenda-de-genero' ) {
      echo $cat[0]->slug;
      //get_template_part( 'single-sectionpost' );
      if (isset($_GET['wpdiscuzSubscribeID']) && isset($_GET['key'])) {       
          $wc_core->wc_unsubscribe($_GET['wpdiscuzSubscribeID'], $_GET['key']);
          ?>
          <div id="wc_unsubscribe_message" style="background:#79B17E">
              <span class="wc_unsubscribe_message"><?php echo $wc_core->wc_options->wc_options_serialized->wc_phrases['wc_unsubscribe_message']; ?></span>
          </div>
          <nav class="mt-21 pb-21 text-center">
            <a href="/">Inicio &gt;&gt;</a>
          </nav>
          <?php
      }
      else{
        // header("Location: ".$home_url."desarrolla-tu-liderazgo/a-donde-vamos/");
        get_template_part( 'single-desarrolla-tu-liderazgo' );
      }
    }

    elseif ( $cat[0]->slug == 'carrera-de-vallas' ) {
      echo $cat[0]->slug;
      //get_template_part( 'single-sectionpost' );
      if (isset($_GET['wpdiscuzSubscribeID']) && isset($_GET['key'])) {       
          $wc_core->wc_unsubscribe($_GET['wpdiscuzSubscribeID'], $_GET['key']);
          ?>
          <div id="wc_unsubscribe_message" style="background:#79B17E">
              <span class="wc_unsubscribe_message"><?php echo $wc_core->wc_options->wc_options_serialized->wc_phrases['wc_unsubscribe_message']; ?></span>
          </div>
          <nav class="mt-21 pb-21 text-center">
            <a href="/">Inicio &gt;&gt;</a>
          </nav>
          <?php
      }
      else{
        // header("Location: ".$home_url."desarrolla-tu-liderazgo/a-donde-vamos/");
        get_template_part( 'single-desarrolla-tu-liderazgo' );
      }
    }

    elseif ( $cat[0]->slug == 'la-pinta-no-es-lo-de-menos' ) {
      echo $cat[0]->slug;
      //get_template_part( 'single-sectionpost' );
      if (isset($_GET['wpdiscuzSubscribeID']) && isset($_GET['key'])) {       
          $wc_core->wc_unsubscribe($_GET['wpdiscuzSubscribeID'], $_GET['key']);
          ?>
          <div id="wc_unsubscribe_message" style="background:#79B17E">
              <span class="wc_unsubscribe_message"><?php echo $wc_core->wc_options->wc_options_serialized->wc_phrases['wc_unsubscribe_message']; ?></span>
          </div>
          <nav class="mt-21 pb-21 text-center">
            <a href="/">Inicio &gt;&gt;</a>
          </nav>
          <?php
      }
      else{
        // header("Location: ".$home_url."desarrolla-tu-liderazgo/a-donde-vamos/");
        get_template_part( 'single-desarrolla-tu-liderazgo' );
      }
    }

    elseif ( $cat[0]->slug == 'listas-para-la-politica' ) {
      echo $cat[0]->slug;
      //get_template_part( 'single-sectionpost' );
      if (isset($_GET['wpdiscuzSubscribeID']) && isset($_GET['key'])) {       
          $wc_core->wc_unsubscribe($_GET['wpdiscuzSubscribeID'], $_GET['key']);
          ?>
          <div id="wc_unsubscribe_message" style="background:#79B17E">
              <span class="wc_unsubscribe_message"><?php echo $wc_core->wc_options->wc_options_serialized->wc_phrases['wc_unsubscribe_message']; ?></span>
          </div>
          <nav class="mt-21 pb-21 text-center">
            <a href="/">Inicio &gt;&gt;</a>
          </nav>
          <?php
      }
      else{
        // header("Location: ".$home_url."desarrolla-tu-liderazgo/a-donde-vamos/");
        get_template_part( 'single-desarrolla-tu-liderazgo' );
      }
    }

    elseif ( $cat[0]->slug == 'nivelando-la-cancha' ) {
      echo $cat[0]->slug;
      //get_template_part( 'single-sectionpost' );
      if (isset($_GET['wpdiscuzSubscribeID']) && isset($_GET['key'])) {       
          $wc_core->wc_unsubscribe($_GET['wpdiscuzSubscribeID'], $_GET['key']);
          ?>
          <div id="wc_unsubscribe_message" style="background:#79B17E">
              <span class="wc_unsubscribe_message"><?php echo $wc_core->wc_options->wc_options_serialized->wc_phrases['wc_unsubscribe_message']; ?></span>
          </div>
          <nav class="mt-21 pb-21 text-center">
            <a href="/">Inicio &gt;&gt;</a>
          </nav>
          <?php
      }
      else{
        // header("Location: ".$home_url."desarrolla-tu-liderazgo/a-donde-vamos/");
        get_template_part( 'single-desarrolla-tu-liderazgo' );
      }
    }
    
    elseif ( $cat[0]->slug == 'puntos-de-vista' ) {
      get_template_part( 'single-puntosdevista' );
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
    
    elseif ( $cat[0]->slug == 'otros-eventos' ) {
      get_template_part( 'single-eventos' );
    }
    
    elseif ( $cat[0]->slug == 'proximos-eventos' ) {
      get_template_part( 'single-eventos' );
    }

    elseif ( $cat[0]->slug == 'evento-destacado' ) {
      get_template_part( 'single-eventos' );
    }            

    elseif ( $cat[0]->slug == 'campeonas' ) {
      get_template_part( 'single-campeonas' );
    }
    
     elseif ( $cat[0]->slug == 'campeona-destacada' ) {
      get_template_part( 'single-campeonas' );
    }

    elseif ( $cat[0]->slug == 'webinario' ) {
      get_template_part( 'single-webinario' );
    }
    
    elseif ( $cat[0]->slug == 'video' ) {
      get_template_part( 'single-video' );
    }
    
    elseif ( $cat[0]->slug == 'boletin' ) {
      get_template_part( 'single-boletin' );
    }
    
     elseif ( $cat[0]->slug == 'recursos' ) {
      get_template_part( 'single-recursos' );
    }  

     elseif ( $cat[0]->slug == 'webinario-resumen' ) {
      get_template_part( 'single-webinario-resumen' );
    }  

     elseif ( $cat[0]->slug == 'a-tu-estilo' ) {
      get_template_part( 'single-a-tu-estilo' );
    }
    else{
      // header("Location: ".$home_url."desarrolla-tu-liderazgo/a-donde-vamos/");
      get_template_part( 'single-desarrolla-tu-liderazgo' );
    }                    
  ?>
</div>
<?php get_footer(); ?>