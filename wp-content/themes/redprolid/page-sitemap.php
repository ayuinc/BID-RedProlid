<?php
/*
Template Name: Sitemap
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    
	<section class="mt-7"> 
    <div class="container">
      <?php the_breadcrumb(); ?> 
      <div class="clearfix sub-header">
        <div class="col-sm-5 col-xs-9">
          <h1 class="ml-0 pl-0">Mapa del sitio</h1>
        </div>
      </div>	
    </div>
	</section>    
  <section id="dtl" class="pt-0">
    <div class="container relative dtl-content">
	    <div class="row">
		    <div class="col-sm-4">
			    <h3 class="medium"><a href="<?php echo home_url('/'); ?>redprolid/">Red PROLID</a></h3>
			    <ul>
				    <li><a href="<?php echo home_url('/'); ?>tu-opinion-cuenta/">Tu opinion cuenta</a></li>
				    <li><a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a></li> 
			    </ul>
		    </div>
		    <div class="col-sm-4">
			    <h3 class="medium"><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/">Desarrolla tu liderazgo</a></h3>
			    <ul>
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/">¿Adónde v@mos?</a></li>
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/carrera-de-vallas/">Carrera de vallas</a></li> 
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/">Nivelando la cancha</a></li> 
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/">Listas para la política</a></li> 
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/">Agenda de género</a></li>
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas-2/">Pistas</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/la-pinta-no-es-lo-de-menos/">La pinta no es lo de menos</a></li>
					    	<li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-tu-estilo/">A tu estilo</a></li> 
				    	</ul>
				    </li>
			    </ul>			    
		    </div>
		    <div class="col-sm-4">
			    <h3 class="medium"><a href="<?php echo home_url('/'); ?>enterate/">Entérate</a></h3>
			    <ul>
				    <li><a href="<?php echo home_url('/'); ?>publicaciones/">Publicaciones</a></li>
				    <li><a href="<?php echo home_url('/'); ?>noticias/">Noticias</a></li> 
				    <li><a href="<?php echo home_url('/'); ?>eventos/">Eventos</a></li> 
				    <li><a href="<?php echo home_url('/'); ?>boletines-proximamente/">Nuestro boletín</a></li> 
				    <li><a href="<?php echo home_url('/'); ?>campeonas/">Campeonas</a></li>
				    <li><a href="<?php echo home_url('/'); ?>puntos-de-vista/">Puntos de vista</a></li>
				    <li><a href="<?php echo home_url('/'); ?>video/">Video</a></li>
			    </ul>				    
		    </div>	
		    <div class="col-sm-4">
			    <h3 class="medium"><a href="<?php echo home_url('/'); ?>concursos-proximamente/">Concursos</a></h3>		    
		    </div>	
		    <div class="col-sm-4">
			    <h3 class="medium"><a href="<?php echo home_url('/'); ?>charlacafe/">Charlacafé</a></h3>
			    <ul>
				    <li><a href="<?php echo home_url('/'); ?>foros-proximamente/">Foros virtuales</a></li>
				    <li><a href="<?php echo home_url('/'); ?>webinarios-proximamente/">Webinarios</a></li> 
			    </ul>					    
		    </div>			    		    	    		    
	    </div>
			<?php //if ( have_posts() ) : ?>
				<?php //while ( have_posts() ) : the_post(); ?>
          <!--<p class="text-right pt-14-100"><?php //the_content(); ?></p>--> 
				<?php //endwhile; ?>
			<?php //endif; ?>                 
    </div>
  </section>      


<?php get_footer(); ?>
