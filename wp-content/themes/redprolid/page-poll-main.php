<?php
/*
Template Name: Poll page main
*/
get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<div class="mh-700">
  <section id="toc-main">
    <div class="container relative with-shadow">
      <div class="absolute dtl-custom-heading">
        <div><img src="../assets/img/toc-main-icon.png" alt=""></div>
        <h1 style="color: #aeab8b;">Tu opinión cuenta</h1>
        <hr style="border-top: 3px dotted #aeab8b;">
      </div>
      <div class="row">
        <div class="col-sm-9 pt-14-100">
          <h4 class="light">
            Anímate a participar en nuestras encuestas, porque tu opinión nos interesa a todas. Cada mes te proponemos un sondeo sencillo sobre temas relevantes de nuestra red o temas que estén siendo objeto de debate en ese momento en la región.
          </h4>
        </div>
        <div class="col-sm-3 pt-70">
          <div class="panel panel-custom panel-highlight pt-21">
            <div class="panel-body pl-14 pr-14 mh-70">
              <h5 class="light">¿Quieres ver las encuestas anteriores?</h5>
              <div class="text-right">
                <a href="<?php echo content_url('/'); ?>poll" class="btn btn-primary">Ver todas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container with-shadow">
      <div class="row">
        <div class="col-sm-6 with-hr">
          <h3>¿Qué es lo que más descuidas de tu vida personal cuando estás trabajando?</h3>

          <h4>Razones</h4>
          <ul class="list-unstyled">
            <li>- (Sí) Sed accumsan neque purus, ac tincidunt sapien selerisque.</li>
            <li>- (No) Sed accumsan neque purus, ac tincidunt sapien selerisque.</li>
          </ul>
          <p class="text-gray">Agosto 2014</p>
        </div>
        <div class="col-sm-6">
          <h3>Nos interesa lo que piensas</h3>
          <p>¿Qué temas te parecen relevantes para incluir en nuestras encuestas?</p>
          <div class="row">
            <div class="col-xs-6">
              <label>Tu propuesta</label>
            </div>
            <div class="col-xs-6">
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
</div>
<?php get_footer(); ?>