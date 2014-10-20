<?php
/*
Template Name: Poll page
*/
get_header(); ?>

<div class="mh-700">
  <section id="toc-index">
    <div class="container">
      <div class="row with-hr">
        <div class="col-sm-6">
          <h3>Encuestas anteriores</h3>
        </div>
        <div class="col-sm-6 text-right pt-28">
          <a href="#">Tu opinión cuenta >></a>
        </div>
      </div>
      <ul class="grid-list grid-list-3">
        <li>
          <div class="bg-white box-shadow p-7">
            <div class="bg-secondary p-14 text-white">
              <p>¿Qué es lo que más descuidas de tu vida personal cuando estás trabajando?</p>
            </div>
            <div class="p-14">
              <ul class="table-list with-hr">
                <li>
                  <span>Apariencia</span>
                  <span class="bold">7%</span>
                </li>
              </ul>
              <p class="text-gray">Agosto 2014</p> 
            </div>
          </div>
        </li>
    	<?php while ( have_posts() ) : the_post(); ?>
        <li>
			<?php the_content(); ?>
        </li>
		<?php endwhile; ?>
      </ul>
      <div class="text-center">
        <ul class="pager">
          <li><a href="#">Previos</a></li>
          <li><a href="#">Siguiente</a></li>
        </ul>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>    