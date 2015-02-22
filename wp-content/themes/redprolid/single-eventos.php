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
			<div class="banner half-height">
				<?php if( get_field('imagen_evento') ) { ?>
				<div class="banner-pic col-sm-3" style="background-image: url(<?php the_field('imagen_evento'); ?>)"></div>
				<small><?php the_field('credito_imagen_evento'); ?></small>
				<?php } else {?>
				<div class="banner-pic bg-panel col-sm-3"></div>
				<?php } ?>
				<div class="banner-content col-sm-9">
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
			        <p>
				        Para mayores informes contactar a <?php the_field('contacto_nombre_evento'); ?> a través de su correo electrónico <a href="mailto:<?php the_field('contacto_email_evento'); ?>"><?php the_field('contacto_email_evento'); ?></a>
			        </p>
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
							<h5 class="medium mb-0">Fecha</h5>
				      <?php $tempDate = get_field('fecha_evento'); ?>
				      <p><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?><?php $lhora_evento = get_field('hora_evento'); ?><?php if ($hora_evento!='') { ?>, <?php the_field('hora_evento'); ?><?php } ?></p>
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
						</div>
					</div>
				</div>
			</div>
		</div>      
  </div>      
</section>
