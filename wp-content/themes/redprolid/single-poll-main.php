<section class="bg-panel"> 
  <div class="container">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12 col-xs-12 with-hr pv-0 mv-0">
        <nav class="text-right text-center-xs">
          <a href="<?php echo home_url('/'); ?>tu-opinio-cuenta">Tu opinión cuenta</a>
        </nav>          
      </div>
    </div>      
    <div class="ph-70">
    	<div class="bg-white border-radius p-21">
  			<?php query_posts( 'category_name=tu-opinion-cuenta&posts_per_page=1' ); ?>	
				<?php while ( have_posts() ) : the_post(); ?>  
	    		<div class="ph-70">
	            <?php the_content(); ?>
	    			<!-- <h1>Qué es lo que más descuidas de tu vida personal cuando estás trabajando?</h1> -->
	    		</div>
	    		<hr>
	    		<span class="text-gray">Agosto 1 / 2014</span>
        <?php endwhile; ?>
    	</div>
    </div>
  </div> 
</section>
