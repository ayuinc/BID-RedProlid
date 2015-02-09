<?php
/*
Template Name: Webinar resumen
*/
get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section>
        <div class="container relative bg-panel normalize-text">
          <div class="row pv-35">
            <div class="col-sm-7">
              <h1>Resumen del webinario</h1>
            </div>
            <div class="col-sm-5 pt-7">
              <a href="#" class="see-more">Descargar archivo en PDF</a> | <a href="#">Webinarios anteriores</a>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <img src="../assets/img/img.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-8">
              <h3 class="mb-0">Conocer la Red PROLID</h3>
              <strong>La red para mujeres líderes del sector público.</strong>
              <div class="pv-21">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio autem fugit nemo delectus eum porro, tempora pariatur commodi nobis animi accusantium nulla sequi molestiae in neque perferendis perspiciatis ab rem.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem reprehenderit illum vero, alias ipsa? Ut accusamus vitae, maiores cumque nihil et sunt repellendus, veniam quam totam! Totam dolorum a, doloribus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit enim assumenda nisi, veniam est, veritatis. Fugiat quae similique illo a libero eum delectus dolorum ratione excepturi ut, pariatur eos quo.</p>
              </div>
              <div class="text-right">
                <a href="#" class="btn btn-primary">Ver todo el documento</a>
              </div>
            </div>
          </div>
          <hr style="border-top: 3px dotted #aeab8b;">
        </div>
        <div class="container-sm pv-35">
          <h3>Comentarios</h3>
        </div>
      </section>
    </div>    

<?php get_footer(); ?>
