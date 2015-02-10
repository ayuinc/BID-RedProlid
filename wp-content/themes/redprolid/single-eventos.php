<section> 
  <div class="container relative mb-14">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12 col-xs-12 with-hr pb-0 mb-21">
        <nav class="text-right text-center-xs">
          <a href="<?php echo home_url('/'); ?>eventos-anteriores">Ve todos los eventos</a> <span class="text-primary"> </span> <?php previous_post_link('%link', '| Ve eventos anteriores', TRUE); ?>  <?php next_post_link( '%link', '| Ve próximos eventos', TRUE ); ?>
        </nav>          
      </div>
    </div>
    <div class="ph-70">
			<h2 class="medium mb-14"><?php the_title(); ?></h2>
			<div class="banner half-height">
				<?php if( get_field('imagen_evento') ) { ?>
				<div class="banner-pic col-sm-3" style="background-image: url(<?php the_field('imagen_evento'); ?>)"></div>
				<?php } else {?>
				<div class="banner-pic bg-panel col-sm-3"></div>
				<?php } ?>
				<div class="banner-content col-sm-9">
					<div class="row">
						<div class="col-sm-7">
							<h5 class="medium mb-0">Organizan</h5>
			        <p><?php the_field('organizan_evento'); ?></p>
			        <h5 class="medium mb-0">Convocan</h5>
			        <p><?php the_field('convocan'); ?></p>
			        <p>Para mayores informes contactar a <a href="mailto:<?php the_field('contacto_email_evento'); ?>"><?php the_field('contacto_nombre_evento'); ?></a></p>
			        <hr>
			        <h5 class="medium mb-0">Tipo de recurso</h5>
					    <p><?php the_field('tipo_de_recurso_evento'); ?></p>
					    <h5 class="medium mb-0">Tema</h5>
					    <p><?php the_field('tema_evento'); ?></p>
					    <h5 class="medium mb-0">Año de publicación</h5>
							<p><?php the_field('año_publicacion_evento'); ?></p>
						</div>
						<div class="col-sm-5">
							<h5 class="medium mb-0">Fecha</h5>
				      <?php $tempDate = get_field('fecha_evento'); ?>
				      <p><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?>, <?php the_field('hora_evento'); ?></p>
				      <h5 class="medium mb-0">Ciudad</h5>
				      <p><?php the_field('ciudad_evento'); ?></p>
				      <h5 class="medium mb-0">Lugar</h5>
				      <p><?php the_field('lugar_evento'); ?></p>
						</div>
					</div>
				</div>
			</div>
<!-- 	    <div class="row">
		    <?php if( get_field('imagen_evento') ) { ?>
	      <div class="col-md-3">
	        <img src="<?php the_field('imagen_evento'); ?>" alt="" class="img-responsive">
	      </div>
	      <div class="col-md-6">
		    <?php } else {?>
		    <div class="col-md-7 col-md-offset-1">  
	      <?php } ?>
	        <h5 class="medium mb-0">Organizan</h5>
	        <p><?php the_field('organizan_evento'); ?></p>
	        <h5 class="medium mb-0">Convocan</h5>
	        <p><?php the_field('convocan'); ?></p>
	        <p>Para mayores informes contactar a <a href="mailto:<?php the_field('contacto_email_evento'); ?>"><?php the_field('contacto_nombre_evento'); ?></a></p>
	      </div>
	      <div class="col-md-3 event-separator pl-21">
		      <h5 class="medium mb-0">Fecha</h5>
		      <?php $tempDate = get_field('fecha_evento'); ?>
		      <p><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?>, <?php the_field('hora_evento'); ?></p>
		      <h5 class="medium mb-0">Ciudad</h5>
		      <p><?php the_field('ciudad_evento'); ?></p>
		      <h5 class="medium mb-0">Lugar</h5>
		      <p><?php the_field('lugar_evento'); ?></p>
	      </div>
	    </div> -->
		  <!-- <div class="row">
				<div class="col-sm-5 col-md-offset-3">  	  
			    <h5 class="medium mb-0">Tipo de recurso</h5>
			    <p><?php the_field('tipo_de_recurso_evento'); ?></p>
			    <h5 class="medium mb-0">Tema</h5>
			    <p><?php the_field('tema_evento'); ?></p>
			    <h5 class="medium mb-0">Año de publicación</h5>
					<p><?php the_field('año_publicacion_evento'); ?></p>
				</div>
		  </div> -->
		</div>      
  </div>      
</section>
