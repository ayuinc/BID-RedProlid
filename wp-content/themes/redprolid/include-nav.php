<div id="nav-main-menu">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 pr-0">
        <ul class="list-unstyled m-0">
          <li><a href="<?php echo home_url(); ?>" class="home"><i></i></a></li>
          <li>
            <a href="<?php echo home_url('/'); ?>redprolid/" class="red-prolid"><i></i><span>Red PROLID</span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo" class="dtl"><i></i><span>Desarrolla tu liderazgo</span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/">¿A dónde v@mos?</a></li>
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/carrera-de-vallas/">Carrera de vallas</a></li>
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/">Nivelando la cancha</a></li>
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/">Listas para la política</a></li>
              <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/">Agenda de género</a></li>
              <li>
                <a href="#">Pistas →</a>
                <ul class="list-unstyled">
                  <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas/">"La pinta no es lo de menos"</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="enterate"><i></i><span>Entérate</span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo home_url('/'); ?>poll-page-main">Tu opinión importa</a></li>
              <li><a href="#">Noticias</a></li>
              <li><a href="#">Eventos</a></li>
              <li><a href="#">Nuestro boletín</a></li>
              <li><a href="#">Campeonas</a></li>
              <li><a href="#" class="videos"><span></span>Videos</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="concursos"><i></i><span>Concursos</span></a>
            <ul class="list-unstyled">
              <li><a href="#">Concursos anteriores</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="charla-cafe"><i></i><span>Charlacafé</span></a>
            <ul class="list-unstyled">
              <li><a href="#">Foros virtuales</a></li>
              <li><a href="<?php echo home_url('/'); ?>webinar-principal">Webinarios</a></li>
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