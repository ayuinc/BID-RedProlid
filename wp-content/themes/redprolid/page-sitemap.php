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
  <section id="dtl" class="pv-35 pl-7">
    <div class="container relative dtl-content">
	    <div class="row">
		    <div class="col-sm-12">
			    <a href="<?php echo home_url('/'); ?>redprolid/"><h3 class="medium">Red PROLID</h3></a>
			    <ul>
				    <li><a href="<?php echo home_url('/'); ?>tu-opinion-cuenta/">Tu opinion cuenta</a></li>
				    <li><a href="<?php echo home_url('/'); ?>redprolid/contactanos/">Contáctanos</a></li> 
			    </ul>
			    <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/"><h3 class="medium">Desarrolla tu liderazgo</h3></a>
			    <ul>
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/">¿Adónde v@mos?</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>debates-anteriores/?categoria=a-donde-vamos">Debates anteriores</a></li>
				    	</ul>
				    </li>
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/carrera-de-vallas/">Carrera de vallas</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>debates-anteriores/?categoria=carrera-de-vallas">Debates anteriores</a></li>
				    	</ul>
				    </li> 
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/">Nivelando la cancha</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>debates-anteriores/?categoria=nivelando-la-cancha">Debates anteriores</a></li>
				    	</ul>
				    </li> 
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/">Listas para la política</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>debates-anteriores/?categoria=listas-para-la-politica">Debates anteriores</a></li>
				    	</ul>
				    </li> 
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/">Agenda de género</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>debates-anteriores/?categoria=agenda-de-genero">Debates anteriores</a></li>
				    	</ul>
				    </li> 
				    <li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas-2/">Pistas</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>debates-anteriores/?categoria=pistas-2">Debates anteriores</a></li>
					    	<li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/la-pinta-no-es-lo-de-menos/">La pinta no es lo de menos</a>
						    	<ul>
							    	<li><a href="<?php echo home_url('/'); ?>debates-anteriores/?categoria=la-pinta-no-es-lo-de-menos">Debates anteriores</a></li>
						    	</ul>
						    </li> 
					    	<li><a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-tu-estilo/">A tu estilo</a>>
						    	<ul>
							    	<li><a href="<?php echo home_url('/'); ?>debates-anteriores/?categoria=a-tu-estilo">Debates anteriores</a></li>
						    	</ul>
						    </li> 
				    	</ul>
				    </li>
			    </ul>			    
			    <a href="<?php echo home_url('/'); ?>enterate/"><h3 class="medium">Entérate</h3></a>
			    <ul>
				    <li><a href="<?php echo home_url('/'); ?>publicaciones/">Publicaciones</a></li>
				    <li><a href="<?php echo home_url('/'); ?>noticias/">Noticias</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>noticias/noticias-anteriores/">¿Quieres ver las noticias anteriores?</a></li>
				    	</ul>
				    </li> 
				    <li><a href="<?php echo home_url('/'); ?>eventos/">Eventos</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>eventos/eventos-anteriores/">Eventos anteriores</a></li>
				    	</ul>
				    </li>
				    <li><a href="<?php echo home_url('/'); ?>boletines-proximamente/">Nuestro boletín</a></li> 
				    <li><a href="<?php echo home_url('/'); ?>campeonas/">Campeonas</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>campeonas/campeonas-anteriores/">¿Quieres leer nuestras entrevistas anteriores?</a></li>
				    	</ul>
				    </li>
				    <li><a href="<?php echo home_url('/'); ?>puntos-de-vista/">Puntos de vista</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>puntos-de-vista-anteriores/">Puntos de vista anteriores</a></li>
				    	</ul>
				    </li>
				    <li><a href="<?php echo home_url('/'); ?>video/">Video</a>
				    	<ul>
					    	<li><a href="<?php echo home_url('/'); ?>video/videos-anteriores/">Videos anteriores</a></li>
				    	</ul>
				    </li>
			    </ul>				    	
			    <a href="<?php echo home_url('/'); ?>concursos-proximamente/"><h3 class="medium">Concursos</h3></a>		    
			    <a href="<?php echo home_url('/'); ?>charlacafe/"><h3 class="medium">Charlacafé</h3></a>
			    <ul>
				    <li><a href="<?php echo home_url('/'); ?>foros-proximamente/">Foros virtuales</a></li>
				    <li><a href="<?php echo home_url('/'); ?>webinarios-proximamente/">Webinarios</a></li> 
			    </ul>	
			    <a href="<?php echo home_url('/'); ?>registrate/"><h3 class="medium">¿Quieres ser parte de la Red PROLID?</h3></a>					    
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
