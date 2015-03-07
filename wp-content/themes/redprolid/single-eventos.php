
<section> 
  <div class="container relative mb-14">
    <?php the_breadcrumb(); ?>
    <div class="clearfix sub-header">
      <div class="col-sm-12 col-xs-12 with-hr pv-0 mv-0">
        <nav class="text-right text-center-xs">
          <a href="<?php echo home_url('/'); ?>eventos-anteriores">Eventos anteriores</a> <span class="text-primary">|</span> <a href="<?php echo home_url('/'); ?>eventos">Eventos</a> <!--<span class="text-primary"> </span> <?php previous_post_link('%link', '| Ve eventos anteriores', TRUE); ?>  <?php next_post_link( '%link', '| Ve próximos eventos', TRUE ); ?>-->
        </nav>          
      </div>
    </div>
    <div class="ph-70">
			<h2 class="medium mb-14"><?php the_title(); ?></h2>
			<div class="pv-21 half-height">
				<div class="col-sm-3">
      		<?php $imagen_evento = get_field('imagen_evento'); ?>
        	<?php if ($imagen_evento!='') { ?>	
    				<img src="<?php the_field('imagen_evento'); ?>" width="100%">
    			<?php } else { ?>
    				<img src="/wp-content/uploads/2015/02/eventos_redprolid.png" width="100%">
    			<?php } ?>
					<small><?php the_field('credito_imagen_evento'); ?></small>
				</div>
				<div class="banner-content col-sm-9 mb-35">
					<div class="row">
						<div class="col-sm-7">
							<?php $organizan_evento = get_field('organizan_evento'); ?>
							<?php if ($organizan_evento!='') { ?>							
							<h5 class="medium mb-0">Organizan</h5>
			        <p><?php echo $organizan_evento; ?></p>
			        <?php } ?>
			        <?php $convocan = get_field('convocan'); ?>
							<?php if ($convocan!='') { ?>
			        <h5 class="medium mb-0">Convocan</h5>
			        <p><?php echo $convocan; ?></p>
			        <?php } ?>
			        <p><?php the_field('contenido_evento'); ?></p>
			        <?php $subir_pdfword_evento = get_field('subir_pdfword_evento'); ?>
			        <?php if ($subir_pdfword_evento!='') { ?>
			        <p><a href="<?php the_field('subir_pdfword_evento'); ?>">Archivo</a></p>
			        <?php } ?>
			        <?php $contacto_nombre_evento = get_field('contacto_nombre_evento'); ?>
			        <?php if ($contacto_nombre_evento!='') { ?>
			        <p>
				        Para mayores informes contactar a <?php the_field('contacto_nombre_evento'); ?> a través de su correo electrónico <a href="mailto:<?php the_field('contacto_email_evento'); ?>"><?php the_field('contacto_email_evento'); ?></a>
			        </p>
			        <?php } ?>
			        <hr>
			        <?php $tipo_de_recurso_evento = get_field('tipo_de_recurso_evento'); ?>
			        <?php $tag_tipo_de_recurso_evento = get_field('tag_tipo_de_recurso_evento'); ?>
							<?php if ($tipo_de_recurso_evento!='') { ?>			        
			        <h5 class="medium mb-0">Tipo de recurso</h5>
					    <p>
						    <?php the_field('tipo_de_recurso_evento') ?>
								<?php if ($tag_tipo_de_recurso_evento!='') { ?>
									<?php echo ', '.$tag_tipo_de_recurso_evento; ?>
								<?php } ?>	
							</p>					    
					    <?php } ?>
			        <?php $tema_evento = get_field('tema_evento'); ?>
			        <?php $tag_tema_evento = get_field('tag_tema_evento'); ?>
							<?php if ($tema_evento!='') { ?>						    
					    <h5 class="medium mb-0">Tema</h5>
					    <p>
						    <?php the_field('tema_evento') ?>
								<?php if ($tag_tema_evento!='') { ?>
									<?php echo ', '.$tag_tema_evento; ?>
								<?php } ?>
							</p>						    
					    <?php } ?>
						</div>
						<div class="col-sm-5">
							<h5 class="medium mb-0">Fecha inicio</h5>
				      <?php $tempDate = get_field('fecha_inicio_evento'); ?>
				      <p><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?><?php $lhora_evento = get_field('hora_evento'); ?><?php if ($hora_evento!='') { ?>, <?php the_field('hora_evento'); ?><?php } ?></p>
				      <?php $tempDateFin = get_field('fecha_fin_evento'); ?>
				      <?php if ($tempDateFin!='') { ?>
				      <h5 class="medium mb-0">Fecha fin</h5>
				      <p><?php echo date_i18n('j', strtotime( $tempDateFin)); ?> de <?php echo date_i18n('F', strtotime( $tempDateFin)); ?> de <?php echo date_i18n('Y', strtotime( $tempDateFin)); ?></p>
				      <?php } ?>
			        <?php $ciudad_evento = get_field('ciudad_evento'); ?>
							<?php if ($ciudad_evento!='') { ?>				      
				      <h5 class="medium mb-0">Ciudad</h5>
				      <p><?php echo $ciudad_evento; ?></p>
				      <?php } ?>
			        <?php $pais_evento = get_field('pais_evento'); ?>
							<?php if ($pais_evento!='') { ?>					      
				      <h5 class="medium mb-0">País</h5>
				      <p><?php the_field('pais_evento'); ?></p>
				      <?php } ?>
			        <?php $lugar_evento = get_field('lugar_evento'); ?>
							<?php if ($lugar_evento!='') { ?>				       
				      <h5 class="medium mb-0">Lugar</h5>
				      <p><?php echo $lugar_evento; ?></p>
				      <?php } ?>
				      <?php $hipervinculo = get_field('hipervinculo_evento');?>
					    <?php if ($hipervinculo!='') { ?>
					    <div>
						    <!--<a class="btn btn-primary"  id="trigger_evento">Ir al evento</a>-->
						    <a href="<?php the_field('hipervinculo_evento'); ?>" class="btn btn-primary" target="_blank">Ir al evento</a>
					    </div>				    
					    <?php } ?>				      
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="evento_muestra">
				<div class="col-sm-12">
					<div class="pv-35">
  		    	<iframe src="<?php the_field('hipervinculo_evento'); ?>" frameborder="0" width="100%" height="700"></iframe>
  		    </div>	
				</div>
			</div>			
		</div>      
  </div>      
</section>