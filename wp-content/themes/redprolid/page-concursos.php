<?php
/*
Template Name: Concursos
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div class="">
	<section class="mt-7"> 
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <?php the_breadcrumb(); ?>
	      </div>
	    </div>
	    <div class="clearfix sub-header">
        <div class="col-md-1">
		      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle.png" alt="" width="100%"></div>
		    </div>
        <div class="col-md-5">
          <h1 class="brand-titular">Concursos</h1>
        </div>
        <div class="col-md-6">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>">¿Quieres proponer un concurso?</a> <span class="text-primary">|</span> <a href="#">Concursos anteriores</a>
          </nav>
        </div>
	    </div>
	    <div class="row">
	    	<div class="col-sm-8">
					<h3 class="light">¿Quieres ganar premios que Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum distinctio iste voluptatibus aliquam facere debitis illum, ab earum culpa id laboriosam mollitia repellendus fugiat. Dignissimos provident accusamus et. Sequi, deleniti?</h3>
			    <hr>
			    <h3>Nombre del concurso</h3>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae saepe animi unde, magnam mollitia. Perspiciatis perferendis rerum, ab ad labore, natus quis ducimus, corporis dolore quam nostrum vitae repellat aliquid.</p>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae saepe animi unde, magnam mollitia. Perspiciatis perferendis rerum, ab ad labore, natus quis ducimus, corporis dolore quam nostrum vitae repellat aliquid.</p>
			    <div class="row">
			    	<div class="col-xs-8 pull-right bg-gray p-7 flex-space-between">
			    		<div class="left">
			    			<span>Invita a tus amigos a participar en el concurso</span>
			    		</div>
			    		<div class="right">
			    			<ul class="list-unstyled social-links">
		              <li><a href="https://www.facebook.com/redprolid" target="_blank"><i class="flaticon-facebook6"></i></a></li>
		              <li><a href="https://twitter.com/RedPROLID" target="_blank"><i class="flaticon-social19"></i></a></li>
		              <li><a href="https://plus.google.com/u/0/110729207092973287817/about" target="_blank"><i class="flaticon-google16"></i></a></li>
		              <li><a href="https://www.youtube.com/channel/UCpntjKraZb6A3qpClZTA5aQ" target="_blank"><i class="flaticon-logo4"></i></a></li>
		            </ul>
			    		</div>
			    	</div>
			    </div>
	    	</div>
	    	<div class="col-sm-4">
	    		<div class="bg-panel minh-560"></div>
	    	</div>
	    </div>
	  </div> 
	</section>
</div>

<?php get_footer(); ?>    