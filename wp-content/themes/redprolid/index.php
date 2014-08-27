<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="logo">
              <a href="#"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-header.png" class="img-responsive"></a>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <div class="user-sign-up text-center">
              <h3>¿Quieres ser parte <br>de la Red PROLID?</h3>
              <a href="#" class="btn btn-primary">Únete</a>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <div class="user-sign-in-form">
              <form>
                <h4>Mi información</h4>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Usuario o correo electrónico">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="form-group row">
                  <div class="col-xs-7">
                    <a href="#" class="">Olvidé mi contraseña</a>
                  </div>
                  <div class="col-xs-5 text-right">
                    <button type="submit" class="btn btn-primary btn-sm">Ingresa</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id="nav-main-menu">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 pr-0">
            <ul class="list-unstyled m-0">
              <li><a href="#" class="home"><i></i></a></li>
              <li>
                <a href="#" class="red-prolid"><i></i><span>Red PROLID</span></a>
                <ul class="list-unstyled">
                  <li><a href="#">Contáctanos</a></li>
                </ul>
              </li>
              <li>
                <a href="views/dtl.html" class="dtl"><i></i><span>Desarrolla tu liderazgo</span></a>
                <ul class="list-unstyled">
                  <li><a href="#">¿A dónde v@mos?</a></li>
                  <li><a href="#">Carrera de vallas</a></li>
                  <li><a href="#">Nivelando la cancha</a></li>
                  <li><a href="#">Listas para la política</a></li>
                  <li><a href="#">Agenda de género</a></li>
                  <li>
                    <a href="#">Pistas &gt;</a>
                    <ul class="list-unstyled">
                      <li><a href="#">"La pinta no es lo de menos"</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" class="enterate"><i></i><span>Entérate</span></a>
                <ul class="list-unstyled">
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
                  <li><a href="#">Webinarios</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 pl-0">
            <form>
              <div class="input-group">
                <input type="search" class="form-control" placeholder="Buscar">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button"></button>
                </span>
              </div><!-- /input-group -->
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="mh-700">
      <section id="hero-unit">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="slider-container text-center">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/home-slider.png" class="img-responsive">
              </div>
              <h3 class="text-center"><strong><span class="text-secondary">La Red PROLID</span> es una plataforma para conectar, promover intercambios y aprendizajes</strong><br> <span class="light">entre mujeres que ocupan o aspiran a ocupar posiciones de liderazgo en el sector público en Latinoamérica</span></h3>
            </div>
          </div>
        </div>
      </section>
      <section id="dtl-home">
        <div class="container">
          <div class="panel panel-custom panel-highlight-silver">
            <div class="panel-heading">
              <ul class="list-unstyled">
                <li class="title">Desarrolla tu liderazgo</li>
                <li class="rule"></li>
                <li class="icon" style="background-image: url(assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
              </ul>
            </div>
            <div class="panel-body panel-body-shadow">
              <div class="col-sm-4 pt-35">
                <p class="light lh-lg">Imagina tu trayectoria profesional y/o política como una carrera deportiva. Necesitas tener claro el rumbo que has de tomar, y para ello te servirán de ayuda las redes sociales y las tecnologias de la información y la comunicación...</p>
                <a href="#" class="btn btn-primary">Más aquí</a>
              </div>
              <div class="col-sm-8">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/home-dtl-path.png" alt="" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-custom panel-highlight">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Concursos</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -42px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-12">
                    <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/home-slider.png" alt="" class="img-responsive">
                    <h5>Concurso</h5>
                    <small class="help-block">Febrero 30 / 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="text-right"><a href="#" class="btn btn-primary">Más información</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Noticias</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -84px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-12">
                    <ul class="list-unstyled list-group list-group-custom">
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                    </ul>
                    <div class="text-right"><a href="#" class="btn btn-primary">Ver más</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Eventos</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -126px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-12">
                    <div class="events-calendar-placeholder">
                      <div class="day">MIÉR</div>
                      <div class="day-num">3</div>
                      <div class="month">septiembre</div>
                    </div>
                    <h5 class="text-center">Empoderamiento de la mujer</h5>
                    <p class="text-center">Lorem ipsum dolor sit amet...</p>
                    <div class="text-right"><a href="#" class="btn btn-primary">Ver más</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Tu opinión cuenta</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -168px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-12">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Puntos de vista</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -210px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-5">
                    <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img-placeholder.png" alt="" class="img-responsive">
                  </div>
                  <div class="col-sm-7">
                    <h4>Erika Brockman</h4>
                    <p class="light lh-lg">Exparlamentaria boliviana (1997 - 2005) y especialista en temas de democracia y género, comenta sobre las leyes de paridad para mujeres que ocupan posiciones en el sector público de Bolivia.</p>
                    <div class="text-right"><a href="#" class="btn btn-primary">Lee más</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-custom panel-highlight">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Campeonas</li>
                    <li class="rule"></li>
                    <li class="icon" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid.png); background-repeat: no-repeat; background-position: 0px -252px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-5">
                    <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img-placeholder.png" alt="" class="img-responsive">
                  </div>
                  <div class="col-sm-7">
                    <h4>Carolina Trivelli</h4>
                    <h5>Ex-ministra de Desarrollo e Inclusión Social del Perú (2011-2013)</h5>
                    <p class="light-italic lh-lg">“...el desafío es lograr competir y avanzar manteniéndonos en una operación profesional totalmente femenina...”</p>
                    <div class="text-right"><a href="#" class="btn btn-primary">Entrevista completa</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-custom">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Comentarios recientes</li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-12">
                    <ul class="list-unstyled list-group list-group-custom">
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                      <li>
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                        <small class="date">Febrero 30 / 2014</small> <a href="#" class="text-primary">Lee más &gt;&gt;</a>
                      </li>
                    </ul>
                    <div class="text-right"><a href="#" class="btn btn-primary">Ver más</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="panel panel-custom panel-highlight">
                <div class="panel-heading">
                  <ul class="list-unstyled">
                    <li class="title">Lo último en las redes</li>
                    <li class="rule"></li>
                    <li class="icon icon-lg" style="background-image: url(<?php echo content_url('/'); ?>themes/redprolid/assets/icons/sprites-home-grid-social.png); background-repeat: no-repeat; background-position: 0px 0px;"></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>