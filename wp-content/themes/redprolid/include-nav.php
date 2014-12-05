<div id="nav-main-menu" style="z-index:999">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 pr-0">
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
            <a href="<?php echo home_url('/'); ?>redprolid/" class="red-prolid <?php if($segment1='redprolid' || $segment1='contactanos'){ echo 'active'; } ?>"><i></i><span>Red PROLID</span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo" class="dtl <?php if($segment1='desarrolla-tu-liderazgo'){ echo 'active'; } ?>"><i></i><span>Desarrolla tu liderazgo</span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/">¿Adónde v@mos?</a></li>
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/carrera-de-vallas/">Carrera de vallas</a></li>
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/">Nivelando la cancha</a></li>
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/">Listas para la política</a></li>
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/">Agenda de género</a></li>
              <li>
                <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas">Pistas →</a>
                <ul class="list-unstyled">
                  <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/la-pinta-no-es-lo-de-menos/">La pinta no es lo de menos</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/'); ?>enterate" class="enterate <?php if($segment1='enterate'||$segment1='noticias'||$segment1='eventos'||$segment1='campeonas'||$segment1='videos'){ echo 'active'; } ?>"><i></i><span>Entérate</span></a>
            <ul class="list-unstyled">
              <!--<li><a href="<?php echo home_url('/'); ?>poll">Tu opinión importa</a></li>-->
              <li><a href="<?php echo home_url('/'); ?>noticias">Noticias</a></li>
              <li><a href="<?php echo home_url('/'); ?>eventos">Eventos</a></li>
              <li><a href="#">Nuestro boletín</a></li>
              <li><a href="<?php echo home_url('/'); ?>campeonas">Campeonas</a></li>
              <li><a href="#" class="videos"><span style="width: 16px; height: 16px; background: url(<?php echo home_url('/'); ?>wp-content/themes/redprolid/assets/icons/video-nav-main-menu.png) no-repeat center center;"></span> Videos</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/'); ?>concursos" class="concursos <?php if($segment1='concursos'){ echo 'active'; } ?>"><i></i><span>Concursos</span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo home_url('/'); ?>concursos">Concursos anteriores</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/'); ?>charlacafe/" class="charla-cafe <?php if($segment1='charlacafe'||$segment1='webinar-principal'||$segment1='webinarios-anteriores'){ echo 'active'; } ?>"><i></i><span>Charlacafé</span></a>
            <ul class="list-unstyled">
              <li>
              	<a href="#">Foros virtuales →</a>
                <ul class="list-unstyled">
                  <li><a href="#">Archivo</a></li>
                </ul>              	
              </li>
              <li>
              	<a href="<?php echo home_url('/'); ?>webinar-principal">Webinarios →</a>
                <ul class="list-unstyled">
                  <li><a href="<?php echo home_url('/'); ?>webinarios-anteriores">Archivo</a></li>
                </ul> 
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="col-sm-4 pl-0">
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