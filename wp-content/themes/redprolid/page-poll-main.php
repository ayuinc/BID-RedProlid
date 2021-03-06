<?php
/*
Template Name: Poll page main
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
  <section id="toc-main">
    <div class="container">
      <?php the_breadcrumb(); ?>
      <div class="clearfix sub-header">
        <div class="col-lg-1 col-sm-12 text-center-sm col-xs-3">
          <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/toc-main-icon.png" alt="" width="100%"></div>
        </div>
        <div class="col-lg-5 col-sm-12 text-center-sm col-xs-12">
          <h1>Tu opinión cuenta</h1>
        </div>
        <div class="col-lg-6 col-sm-12 text-center-sm col-xs-12"></div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <h4 class="light">
            Anímate a participar en nuestras encuestas, porque tu opinión nos interesa a todas. Cada mes te proponemos un sondeo sencillo sobre temas relevantes de nuestra red o temas que estén siendo objeto de debate en ese momento en la región.
          </h4>
        </div>
        <div class="col-sm-4">
          <div class="bg-panel border-radius p-21">
            <h5 class="light">¿Quieres ver las encuestas anteriores?</h5>
            <div class="text-right">
              <a href="<?php echo content_url('/'); ?>resultados" class="btn btn-primary">Ver todas</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pv-42">
        <div class="col-sm-6 with-hr">
          <h3>¿Qué es lo que más descuidas de tu vida personal cuando estás trabajando?</h3>
          <h4>Razones</h4>
          <ul class="list-unstyled">
            <li>- (Sí) Sed accumsan neque purus, ac tincidunt sapien selerisque.</li>
            <li>- (No) Sed accumsan neque purus, ac tincidunt sapien selerisque.</li>
          </ul>
          <p class="text-gray">Agosto 2014</p>
          <!-- <?php the_content(); ?> -->
        </div>
        <div class="col-sm-6">
          <h3>Nos interesa lo que piensas</h3>
          <p>¿Qué temas te parecen relevantes para incluir en nuestras encuestas?</p>
          <div class="row">
            <div class="col-xs-6">
              <label>Tu propuesta</label>
            </div>
            <div class="col-xs-6 text-right">
              <nav><a href="#">Regístrate</a> / <a href="#">Inicia sesión</a></nav>
            </div>
          </div>
          <form>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Envía tu propuesta</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>