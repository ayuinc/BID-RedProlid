<section> 
  <div class="container mb-14">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12 col-xs-12 with-hr pv-0 mv-0">
        <nav class="text-right text-center-xs">
          <a href="<?php echo home_url('/'); ?>eventos-anteriores">A tu estilo &gt;&gt;</a>
        </nav>          
      </div>
    </div>
    <div class="clearfix ph-70">
    	<div class="col-sm-6">
    		<small class="text-gray">Tiendas</small>
    		<h1>Naf Naf</h1>
    		<ul class="list-unstyled pv-21">
    			<li>Calle 77 A #12-26</li>
    			<li>Bogotá - Colombia</li>
    			<li>Sitio web: <a href="#">nafnaf.com</a></li>
    			<li class="text-primary">Fuente: Trip Advisor</li>
    		</ul>
    		<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive">
    	</div>
    	<div class="col-sm-6">
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed distinctio sapiente qui, hic quidem maxime libero debitis eius. Dolorum dolor quae porro, enim, quis maxime repellat incidunt sed illum ab.</p>
    	</div>
    </div>
    <hr>
    <div class="ph-70">
	    <?php	if ( is_user_logged_in() ) { ?>
				<?php comments_template();?>
			<?php } else { ?>
				<p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
			<?php }	?>
    </div>
	</div>
</section>