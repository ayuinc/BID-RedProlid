<?php
/*
Template Name: DTL
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section id="dtl" class="pt-0">
        <div class="container relative dtl-content">
          <div class="absolute dtl-custom-heading">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-dtl-icon.png" alt=""></div>
            <h1 style="color: #808080;">Desarrolla tu liderazgo</h1>
            <hr style="border-top: 3px dotted #808080;">
          </div>
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-dtl.jpg" alt="" class="pull-left mr-21" width="630px" height="auto">
          <p class="text-right pt-14-100">Imagina tu trayectoria profesional y/o política como una carrera deportiva. Necesitas tener claro el rumbo que has de tomar, y para ello te servirán de ayuda las redes sociales y las TIC. Encontrarás numerosos obstáculos, todos los que la sociedad impone a la realización efectiva de la paridad y que se combaten con políticas de igualdad de género. La cancha no es igual  para todas y todos; la mujer líder se encuentra con problemas como el acoso político, sexual y laboral, además de la discriminación salarial y la incomprensión ante cuestiones como la maternidad o la conciliación de tiempos.</p>
          <p class="text-right">En el caso de que estés lista para la política u ocupes un cargo de elección, vas a necesitar herramientas especializadas que te sirvan para propiciar en las campañas —dentro y fuera de tu partido—, o en tu nuevo cargo, una sensibilidad y una mirada en pro de la equidad. En ese trayecto, contar con una agenda de género y una comunidad de intereses con otras y otros participantes —con quienes podrás compartir experiencias y aprendizajes— será siempre muy útil para alcanzar tus objetivos. Te proponemos seguir unas pistas para tratar de imprimir un ejercicio de liderazgo «en femenino», sin olvidarnos de que, en esta particular carrera, la pinta no es lo de menos, del mismo modo que la deportista más puntera no descuida su indumentaria al llegar a la meta.</p> 
        </div>
      </section>
      <section>
        <div class="container dtl-path">
          <div class="row">
            <div class="col-xs-2"><a href="dtl-adonde-vamos.html"></a></div>
            <div class="col-xs-2"><a href="#"></a></div>
            <div class="col-xs-2"><a href="#"></a></div>
            <div class="col-xs-2"><a href="#"></a></div>
            <div class="col-xs-2"><a href="#"></a></div>
            <div class="col-xs-2"><a href="#"></a></div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
