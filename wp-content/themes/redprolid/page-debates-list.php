<?php
/*
Template Name: Debates list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<section id="puntos-de-vista-anteriores">
  <div class="container">
    <?php the_breadcrumb(); ?>
    <?php $categoria = $_GET['categoria']; ?>
    <div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1>Debates anteriores</h1>
          <nav class="mt-21">
            <a href="/desarrolla-tu-liderazgo/<?php echo $categoria; ?> ">Atrás >></a>
          </nav>
        </div>
      </div>
      <div class="sub-header-icon">
	      <?php if ($categoria=='a-donde-vamos') { ?> 
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-adonde-vamos-icon.png" width="94px" height="auto" alt="">
        <?php } ?>
	      <?php if ($categoria=='carrera-de-vallas') { ?> 
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-carrera-vallas-icon.png" width="94px" height="auto" alt="">
        <?php } ?>  
	      <?php if ($categoria=='nivelando-la-cancha') { ?> 
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-nivelando-cancha-icon.png" width="94px" height="auto" alt="">
        <?php } ?>        
	      <?php if ($categoria=='listas-para-la-politica') { ?> 
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-listas-politica-icon.png" width="94px" height="auto" alt="">
        <?php } ?>     
	      <?php if ($categoria=='agenda-de-genero') { ?> 
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-agenda-genero-icon.png" width="94px" height="auto" alt="">
        <?php } ?> 
	      <?php if ($categoria=='pistas-2') { ?> 
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas-icon.png" width="94px" height="auto" alt="">
        <?php } ?> 
	      <?php if ($categoria=='la-pinta-no-es-lo-de-menos') { ?> 
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-la-pinta-icon.png" width="94px" height="auto" alt="">
        <?php } ?>                                         
      </div>
    </div>	      
    <div class="ph-70">
      <div class="row">
        <div class="col-sm-12">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          <?php query_posts( 'category_name='.$categoria.'&posts_per_page=10&offset=1&paged=' . $paged ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3 class="medium"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <?php $fuente_debates = get_field('fuente-debates'); ?>
              <?php if ($fuente_debates!='') { ?>
              	<p>FUENTE: <?php echo $fuente_debates; ?></p>
              <?php } ?>
              <?php $blog_debates = get_field('blog-debates'); ?>
              <?php if ($blog_debates!='') { ?>
              	<span>Blog: <?php echo $blog_debates; ?></span>
							<?php } ?>
            </div>
            <div class="content">
              <?php the_field('contenido-debates'); ?>
            </div>
            <hr>
          <?php endwhile; ?>
          <div class="text-center">
            <ul class="pager">
              <li><?php next_posts_link( 'Siguientes' ); ?></li>
              <li><?php previous_posts_link( 'Posteriores' ); ?></li>
            </ul>
          </div>          
        </div>
      </div>          
    </div>
  </div>
</section>
<section>  
  <div class="container p-21">
  </div>
</section>
<?php get_footer(); ?>
