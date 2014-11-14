<?php
/*
Template Name: Webinar previous Page
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section>
        <div class="container relative bg-panel pv-14">
          <h1 class="mb-7-100">Webinarios anteriores</h1>
          <a href="#" class="see-more">Charlacafé</a>
          <div class="absolute" style="right: 70px; top: 0;">
            <img src="../assets/img/webinarios-icon.png" alt="">
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <form action="">
            <div class="form-group row">
              <div class="col-sm-4">
                <select name="" id="" class="form-control select-overide">
                  <option value="Ordenar por">Ordenar por</option>
                </select>
              </div>
            </div>
          </form>
          <div class="row pv-ch-14">
            <div class="col-sm-4 bg-panel">
              <img src="../assets/img/img.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-8">
              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores in eligendi maiores tempora repellat sapiente laborum facere harum magni optio qui veritatis ab ipsa perspiciatis pariatur ratione, reprehenderit officia fugiat.</p>
              <span class="help-block">177,050 visualizaciones</span>
              <div class="row mt-35">
                <div class="col-sm-6">
                  <span class="bold block">Fecha:</span>
                  <strong>1 de septiembre de 2014. 07:00:00 am.</strong>
                </div>
                <div class="col-sm-6 mt-21 text-right">
                  <a href="#">Ver webinario</a> | <a href="#">Resumen del webinario</a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <nav>
              <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
