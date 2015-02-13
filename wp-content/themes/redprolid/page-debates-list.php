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
  	<div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
        <div>
          <h1 style="color: #aeab8b;" class="">Debates anteriores</h1>
        </div>
      </div>
    </div>  
		<div class="ph-70">
      <div class="row">
      	<div class="col-sm-10 col-md-offset-1">
	      	<?php echo $categoria = $_GET['categoria']; ?>
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          <?php query_posts( 'category_name=dtl-debates&posts_per_page=10&paged=' . $paged ); ?>          
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="title">
              <h3><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
              <?php $fuente_debates = get_field('fuente-debates'); ?>
              <?php if ($fuente_debates!='') { ?>
              	<p>FUENTE: <?php echo $fuente_debates; ?></p>
              <?php } ?>
              <?php blog-debates = get_field('blog-debates'); ?>
              <?php if ($blog_debates!='') { ?>
              	<span>Blog: <?php echo $blog_debates; ?></span>
							<?php } ?>
            </div>
            <div class="content mb-70">
              <?php the_field('contenido-debates'); ?>
            </div>
          <?php endwhile; ?>
          <div class="text-center">
            <ul class="pager">
              <li><?php next_posts_link( 'Anteriores' ); ?></li>
              <li><?php previous_posts_link( 'Posteriores' ); ?></li>
            </ul>
          </div>
      	</div>
      </div>	        
    </div>
  </div>
</section>
<?php get_footer(); ?>