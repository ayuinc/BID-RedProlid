<?php
/*
Template Name: DTL-Seccion
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section id="dtl-adonde-vamos">
        <div class="container relative dtl-content">
          <div class="absolute dtl-custom-heading">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas-icon.png" alt=""></div>
            <h1 style="color: #007c8d;">Pistas</h1>
            <hr style="border-top: 3px dotted #007c8d;">
          </div>
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas.jpg" alt="" class="pull-right mr-21 img-circle" width="560px" height="auto">
          <p class="text-left pt-14-100">Nos desenvolvemos en un mundo masculino. Los hábitos, las reglas —ya sean explícitas o supuestas—, además de la costumbre, apuntan a una visión del concepto de líder como un término reservado a los hombres. Son propias del hombre —se afirma— la capacidad analítica, la visión estratégica y el poder de decisión.</p>
          <p>A pesar de esas barreras y estereotipos que enfrentamos como mujeres, hemos avanzado, particularmente en América Latina. Así, en la actualidad contamos con tres mujeres presidentas, numerosas ministras y ejecutivas que ocupan altos cargos en la administración pública, a lo que habría que añadir el creciente número de mujeres que desempeñan cargos de elección. Todo esto está consiguiendo darnos mucha mayor visibilidad y, sin duda, anima un mayor activismo político femenino. ¿Qué lecciones podemos sacar de estos avances? ¿Qué podemos aprender de sus protagonistas? ¿Cómo imprimir una «mirada femenina» a los distintos componentes que definen un liderazgo? Y por último, otra cuestión no menos importante: ¿cómo hacer para conjugar la dedicación, ya sea a nuestro cargo o a nuestro partido, con el manejo de la vida cotidiana?</p>
        </div>
      </section>
    </div>

<?php get_footer(); ?>    