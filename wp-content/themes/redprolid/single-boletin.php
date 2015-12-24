	<section class="mt-7 mb-21"> 
	  <div class="container relative mb-14">
      <?php the_breadcrumb(); ?>
      <div class="ph-70-sm ph-14-xs">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 mostrar-anteriores">
						<div class="row">
							<div class="col-md-3">
								<h2 class="medium mt-28 mb-0 h3">Boletín</h2><span class="small">Diciembre 2015</span>	
								<!--<p class="mt-7"><a href="<?php echo home_url('/'); ?>boletin/boletines-anteriores">Boletínes anteriores >></a></p>-->
							</div>
							<div class="col-md-6">
								<p class="text-center mt-21 mb-21"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_anterior_interna_V6-02.png"></p>
							</div>
							<a href="http://redprolid.org/tu-perfil/">					
							<div class="col-md-3 relative">
								<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_suscribete.png" class="absolute" style="top: 13px">
							</div>	
							</a>				
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 pt-21 pb-21">
						<div class="row">
							<div class="col-md-10 col-md-offset-1 pv-35 text-justify">
								<?php the_field('full_contenido'); ?>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="row">
					<div class="col-md-10 col-md-offset-1 pt-21 pb-21">
						<div class="row">
							<div class="col-md-12">
								<h4 class="text-center light mt-21 mb-14">Si te suscribes a nuestro boletin electrónico, te vamos a mantener al corriente de todas nuestras actividades en la red. Para que estés enterada a la primera.</h4>
								<h1 class="text-center mt-28 mb-42">Último boletín</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<h3 class="medium mb-0"><?php the_field('titular-boletin'); ?></h3>
								<p><?php the_field('descripcion-titular-boletin'); ?></p>
							</div>
							<div class="col-md-7 pr-0">
								<iframe width="100%" height="315" src="//www.youtube.com/embed/<?php the_field('video-titular-boletin'); ?>?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>-->
				<!--<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-8 pr-21">
								<div class="panel mb-35">
									<div class="row"> 
										<div class="col-md-12">
											<ul class="list-inline">
												<li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_anterior_interna_V6-03.png"></li>
												<li><h3 class="pt-7">Campeonas</h3></li>
											</ul>
										</div>
									</div>
									<div class="row">                 
		                <div class="col-md-5">
		                  <img  src="<?php the_field('imagen-campeonas-boletin'); ?>" alt="<?php the_field('campeonas-titular-boletin'); ?>" class="img-responsive">
		                </div>
		                <div class="col-md-7">
		                  <h3 class="pt-0 medium mb-0"><?php the_field('campeonas-titular-boletin'); ?></h3>
		                  <h5 class="medium mt-0"><?php the_field('intro-campeonas-boletin'); ?></h5>
		                  <p><?php the_field('desc-campeonas-boletin'); ?></p>
		                  <p class="text-right"><a href="<?php the_field('link-campeonas-boletin'); ?>">Entrevista completa >></a></p>
		                </div> 
									</div>								
								</div>
								<div class="panel mb-35">
									<div class="row"> 
										<div class="col-md-12">								
											<ul class="list-inline">
												<li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_anterior_interna_V6-04.png"></li>
												<li><h3 class="pt-7">Agenda de Género</h3></li>
											</ul>
										</div>
									</div>
									<div class="row"> 
		                <div class="col-md-12">
		                  <h3 class="pt-0 medium mb-0"><?php the_field('agenda-titular-boletin'); ?></h3>
		                  <p><?php the_field('agenda-desc-boletin'); ?></p>
		                  <p class="medium"><?php the_field('agenda-pregunta-boletin'); ?></p>
		                  <p class="text-right"><a href="<?php the_field('agenda-link'); ?>">Ve comentario >></a></p>
		                </div> 
									</div>							
								</div>	
								<div class="panel mb-35">
									<div class="row"> 
										<div class="col-md-12">								
											<ul class="list-inline">
												<li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_anterior_interna_V6-04.png"></li>
												<li><h3 class="pt-7">Las noticias mas importantes</h3></li>
											</ul>
										</div>
									</div>
									<div class="row"> 
		                <div class="col-md-6">
		                  <p class="mt-7"><img src="<?php the_field('imagen-noticia1-boletin'); ?>" alt="<?php the_field('titular-noticias1-boletin'); ?>" class="img-responsive"></p>
		                  <a href="<?php the_field('link-noticia1-boletin'); ?>"><h3 class="medium mt-7 mb-0 pb-0"><?php the_field('titular-noticias1-boletin'); ?></h3></a>
											<p class="mt-14"><?php the_field('desc-noticia1-boletin');?></p>
		                  <small class="vermas"><a href="<?php the_field('link-noticia1-boletin'); ?>">Noticia completa >></a></small>											
		                </div> 
		                <div class="col-md-6">
		                  <p class="mt-7"><img src="<?php the_field('imagen-noticia2-boletin'); ?>" alt="<?php the_field('titular-noticias2-boletin'); ?>" class="img-responsive"></p>
		                  <a href="<?php the_field('link-noticia2-boletin'); ?>"><h3 class="medium mt-7 mb-0 pb-0"><?php the_field('titular-noticia2-boletin'); ?></h3></a>
											<p class="mt-14"><?php the_field('desc-noticia2-boletin');?></p>
		                  <small class="vermas"><a href="<?php the_field('link-noticia2-boletin'); ?>">Noticia completa >></a></small>											
		                </div> 	                  
									</div>							
								</div>	

								<div class="panel mb-35">
									<div class="row"> 
										<div class="col-md-12">								
											<ul class="list-inline">
												<li><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_anterior_interna_V6-06.png"></li>
												<li><h3 class="pt-7">Entérate</h3></li>
											</ul>
										</div>
									</div>
									<div class="row"> 
										<div class="col-md-12">
											<h4 class="medium">Artículos comentados</h4>
									    <ul class="light">
							        <?php 
							        $args = array(
							          'number' => '3'
							        );
							        $prev_post_id = '';
							        $comments = get_comments();?>
							
							        <?php foreach ($comments as $comment) : ?>
							          <?php   
							            $comm_post_id = $comment->comment_post_ID; 
							            $cat = get_the_category( $comm_post_id );
							          ?>
							          <?php if ( $cat[0]->slug == "puntos-de-vista") : ?>
							            <?php if ($prev_post_id != $comm_post_id) : ?>
							              <?php $prev_post_id = $comm_post_id; ?>
							                <li>
							                	<a href="<?php echo get_permalink( $comm_post_id ); ?>"><?php echo($comment->comment_content);?></a>
							                	<small>| <?php echo($comment->comment_author);?></small>
							                </li>          
							            <?php endif; ?>
							          <?php endif; ?>
							          
							        <?php endforeach;?>
							        </ul>
										</div>
									</div>							
								</div>																							
							</div>
							<div class="col-md-4 mostrar-anteriores">
								<h3>Destacados</h3>
								<div class="row">
		              <div class="col-md-12 mb-7">
		                <p class="mt-7"><img src="<?php the_field('imagen-destacados1-boletin'); ?>" alt="<?php the_field('titular-destacados1-boletin'); ?>" class="img-responsive"></p>
		                <a href="<?php the_field('link-destacados1-boletin'); ?>"><h3 class="medium mt-7 mb-0 pb-0"><?php the_field('titular-destacados1-boletin'); ?></h3></a>
										<p class="mt-14"><?php the_field('desc-destacados1-boletin'); ?></p>	
		                <p class="text-right"><small><a href="<?php the_field('link-destacados1-boletin'); ?>">Noticia completa >></a></small></p>								
		                <hr class="hr-gray-light">
		              </div> 	
		              <div class="col-md-12 mb-7">
		                <p class="mt-7"><img src="<?php the_field('imagen-destacados2-boletin'); ?>" alt="<?php the_field('titular-destacados2'); ?>" class="img-responsive"></p>
		                <a href="<?php the_field('link-destacados2-boletin'); ?>"><h3 class="medium mt-7 mb-0 pb-0"><?php the_field('titular-destacados2'); ?></h3></a>
										<p class="mt-14"><?php the_field('desc-destacados2-boletin'); ?></p>	
		                <p class="text-right"><small><a href="<?php the_field('link-destacados2-boletin'); ?>">Noticia completa >></a></small></p>								
		                <hr class="hr-gray-light">
		              </div> 		                  
								</div>
								<div class="eventos">
		              <div class="panel panel-custom">
		                <div class="panel-body pt-0"> 
		                  <?php $tempDate = get_field('fecha_evento'); ?>
		                  <div class="events-calendar-placeholder mb-14">
		                    <div class="day"><?php echo date_i18n('D', strtotime( $tempDate)); ?></div>
		                    <div class="day-num"><?php echo date_i18n('d', strtotime( $tempDate)); ?></div>
		                    <div class="month"><?php echo date_i18n('M', strtotime( $tempDate)); ?></div>
		                  </div>
		                  <h5 class="medium"><?php the_field('titular-evento-boletin'); ?></h5>
		                  <p class="text-right"><small><a href="<?php the_field('link-evento-boletin'); ?>">Ve más >></a></small></p>
		                </div>
		              </div>								
								</div>
							</div>
						</div>
					</div>
				</div>-->
		    <div class="row">
		      <div class="col-sm-10 col-md-offset-1">  
						<?php	if ( is_user_logged_in() ) { ?>
							<?php comments_template();?>
						<?php } else { ?>
				<p>Para poder comentar es necesario que <a href="/registrate/">inicies tu sesión o te registres</a> en Red PROLID.</p>
						<?php }	?>
		      </div>
		    </div>
	  	</div>
	  </div>      
	</section>
