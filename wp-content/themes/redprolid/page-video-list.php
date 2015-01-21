<?php
/*
Template Name: Video list
*/
get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<div>
  <section id="puntos-de-vista-anteriores">
    <div class="container">
	    <div class="row mt-7">
	      <div class="col-md-12">
	        <?php the_breadcrumb(); ?>
	      </div>
	    </div>	      
    </div>
  </section>
  
  <section class="mb-21">
    <div class="container">
	    <div class="row">
		    <div class="col-md-12 clearfix">
			    <div class="row titulos-anteriores">
				    <div class="col-md-11">
							<h1>Videos Anteriores</h1>
							<a href="<?php echo content_url('/'); ?>eventos">Videos >></a>
				    </div>
				    <div class="col-md-1 pl-0 pr-0">
					    <div>
					    	<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/video-icon-square.png" alt="" width="100%">
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
  </section>

  <section class="pv-21">
  	<div class="container">
  		<div class="row">
  			<form action="">
  				<div class="col-sm-4 form-group">
  					<select name="" id="" class="form-control select-override">
  						<option value="Del más antiguo al más nuevo">Del más antiguo al más nuevo</option>
  					</select>
  				</div>
  			</form>
  		</div>
  	</div>
  	<hr>
  </section>
  
	<section>
	  <div class="container">
	    <div class="panel panel-custom">         
	      <div class="panel-body pt-14">	
		      <div class="row">
		      	<div class="col-md-12">
			      	<h2 class="mb-21">Del más antiguo al más nuevo</h2>
		      	</div>
		      </div>      
					<div class="row">
          	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          	<?php query_posts( 'cat=260&posts_per_page=10&paged=' . $paged ); ?>
						<?php while ( have_posts() ) : the_post(); ?>    
						<div class="col-md-3">
							<iframe width="100%" height="150" src="//www.youtube.com/embed/<?php the_field('id_video'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
							<h3 class="medium mt-7 mb-0"><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a></h3>
							<p class="mb-0"><?php the_field('descripcion_video'); ?></p>
							<?php $tempDate = get_the_date(); ?>
							<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
						</div>																			
            <?php endwhile; ?>
          </div>
          <div class="row">
            <div class="col-md-12"> 
	            <!--Pagination-->
	            <div class="text-center">
	              <ul class="pager">
	                <li><?php next_posts_link( 'Anteriores' ); ?></li>
	                <li><?php previous_posts_link( 'Posteriores' ); ?></li>
	              </ul>
	            </div> 
	            <!--End.Pagination-->	  
            </div>          
					</div>
	      </div>
	    </div>
	  </div>
	</section>
</div>
<?php get_footer(); ?>