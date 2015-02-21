<div id="nav-main-menu" style="z-index:999" class="hidden-sm-down">
  <div class="container">
    <div class="flex-space-between">
      <div class="left" style="width: 68%; ">
        <ul class="list-unstyled m-0">
          <?php 
            $uri = $_SERVER['REQUEST_URI'];
            $elements = explode('/', $uri) ;
            $segment1 = $elements[1] ; // For the first segment
            $segment2 = $elements[2] ; //For the 2nd segment
            $segment3 = $elements[3] ; //For the 3rd segment
          ?>
          <li><a href="<?php echo home_url(); ?>" class="home"><i></i></a></li>
          <li>
            <a href="<?php echo home_url('/'); ?>redprolid/" class="red-prolid <?php if($segment1=='redprolid' || $segment1=='contactanos'){ echo 'active'; } ?>"><i></i><span>Red PROLID</span></a>
            <ul class="list-unstyled dropdown-menu">
              <li><a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo" class="dtl <?php if($segment1=='desarrolla-tu-liderazgo'){ echo 'active'; } ?>"><i></i><span>Desarrolla tu liderazgo</span></a>
            <ul class="list-unstyled dropdown-menu">
              <li class="light"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/">¿Adónde v@mos?</a></li>
              <li class="light"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/carrera-de-vallas/">Carrera de vallas</a></li>
              <li class="light"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/">Nivelando la cancha</a></li>
              <li class="light"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/">Listas para la política</a></li>
              <li class="light"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/">Agenda de género</a></li>
              <li class="light">
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas-2">Pistas →</a>
                <ul class="list-unstyled sub-menu">
                  <li class="light"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/la-pinta-no-es-lo-de-menos/">La pinta no es lo de menos</a></li>
                  <li class="light"><a href="<?php echo home_url('/'); ?>a-tu-estilo/">A tu estilo</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/'); ?>enterate" class="enterate 
	            <?php if( $segment1=='enterate' || $segment1=='noticias' || $segment1=='eventos' || $segment1=='campeonas' || $segment1=='video' ) 
		            { 	
			            echo 'active';
			          } 
				      ?>
				      <?php if ( (in_category('ultimas-noticias')) OR (in_category('noticias')) OR (in_category('eventos')) OR (in_category('eventos-destacados')) OR (in_category('boletin')) OR (in_category('campeonas')) OR (in_category('videos-anteriores')) ) 
					      {		            
		            		echo 'active'; 
		          	}
		          ?>		
				      "><i></i><span>Entérate</span></a>
            <ul class="list-unstyled dropdown-menu">
              <!--<li><a href="<?php echo home_url('/'); ?>poll">Tu opinión importa</a></li>-->
              <li class="light"><a href="<?php echo home_url('/'); ?>publicaciones">Publicaciones</a></li>
              <li class="light"><a href="<?php echo home_url('/'); ?>noticias">Noticias</a></li>
              <li class="light"><a href="<?php echo home_url('/'); ?>eventos">Eventos</a></li>
              <li class="light"><a href="<?php echo home_url('/'); ?>boletin">Nuestro boletín</a></li>
              <li class="light"><a href="<?php echo home_url('/'); ?>campeonas">Campeonas</a></li>
              <li class="light nav-video">
              	<img src="<?php echo home_url('/'); ?>wp-content/themes/redprolid/assets/icons/video-nav-main-menu.png"> <a href="<?php echo home_url('/'); ?>video" class="videos">Videos</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/'); ?>concursos-proximamente" class="concursos <?php if($segment1=='concursos'){ echo 'active'; } ?>"><i></i><span>Concursos</span></a>
            <!--<ul class="list-unstyled dropdown-menu">
              <li class="light"><a href="<?php echo home_url('/'); ?>concursos-anteriores">Concursos anteriores</a></li>
            </ul>-->
          </li>
          <li class="last-piece">
            <a href="<?php echo home_url('/'); ?>charlacafe/" class="charla-cafe <?php if($segment1=='charlacafe'||$segment1=='webinar-principal'||$segment1=='webinarios-anteriores'){ echo 'active'; } ?>"><i></i><span>Charlacafé</span></a>
            <ul class="list-unstyled dropdown-menu">
              <li>
              	<a href="<?php echo home_url('/'); ?>foros-proximamente">Foros virtuales →</a>
                <!--<ul class="list-unstyled sub-menu">
                  <li  class="light" style="width:250px"><a href="#">¿Quieres ver los foros anteriores?</a></li>
                </ul>-->              	
              </li>
              <li>
              	<a href="<?php echo home_url('/'); ?>webinarios-proximamente">Webinarios →</a>
                <!--<ul class="list-unstyled sub-menu">
                  <li  class="light" style="width:250px"><a href="<?php echo home_url('/'); ?>webinarios-anteriores">¿Quieres ver los webinarios anteriores?</a></li>
                </ul>--> 
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="right" style="width: 32%; ">
        <!-- <form>
          <div class="input-group">
            <input type="search" class="form-control" placeholder="Buscar">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button"></button>
            </span>
          </div>
        </form> -->
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>