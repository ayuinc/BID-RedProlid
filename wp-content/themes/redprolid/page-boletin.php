<?php
/*
Template Name: Boletin
*/

get_header(); ?>

<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>

<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>

<div>
	<section class="mt-7 mb-21"> 
	  <div class="container relative mb-14">
	    <div class="row">
	      <div class="col-md-12">
	        <?php the_breadcrumb(); ?>
	      </div>
	    </div>	
	  </div>      
	</section>

	<div class="boletin">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 mostrar-anteriores">
						<div class="row">
							<div class="col-md-3">
								<h2 class="medium mt-28 mb-0 h3">Boletín enero 2015</h2>
								<p class="mt-0"><a href="">Boletínes anteriores >></a></p>
							</div>
							<div class="col-md-6">
								<p class="text-center mt-21 mb-21"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_anterior_interna_V6-02.png"></p>
							</div>					
							<div class="col-md-3">
								<img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/boletin_suscribete.png" class="absolute">
							</div>					
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 pt-21 pb-21">
						<div class="row">
							<div class="col-md-12">
								<h4 class="text-center light mt-21 mb-14">Si te suscribes a nuestro boletin electrónico, te vamos a mantener al corriente de todas nuestras actividades en la red. Para que estés enterada a la primera.</h4>
								<h1 class="text-center mb-35">Último boletín</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<h3 class="medium mb-0">Titulo aqui</h3>
								<p>kdsfj kajsfaksdjfas dfkjalhfs lkj kja dsklf alkjsh alkjsdh alksj alsdkjh asdkjlh </p>
							</div>
							<div class="col-md-7 pr-0">
								<iframe width="100%" height="315" src="//www.youtube.com/embed/HHcHYisZFLU?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
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
	                <?php query_posts( 'category_name=campeonas&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>                   
		                <div class="col-md-5">
	                    <img  src="<?php the_field('imagen_campeonas'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
	                  </div>
		                <div class="col-md-7">
	                    <h3 class="pt-0 medium mb-0"><?php the_title(); ?></h3>
	                    <h5 class="medium mt-0"><?php the_field('posicion_campeona'); ?></h5>
	                    <p><?php the_field('descripcion_campeona'); ?></p>
	                    <?php $tempDate = get_the_date(); ?>
											<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
	                    <p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Entrevista completa >></a></p>
	                  </div> 
	                <?php endwhile; ?>
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
	                <?php query_posts( 'category_name=agenda-de-genero&posts_per_page=1' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>                   
		                <div class="col-md-12">
	                    <h3 class="pt-0 medium mb-0"><?php the_title(); ?></h3>
	                    <p><?php the_field('contenido-debates'); ?></p>
	                    <?php $tempDate = get_the_date(); ?>
											<small><?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?></small>
	                    <p class="text-right"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve comentario >></a></p>
	                  </div> 
	                <?php endwhile; ?>	
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
	                <?php query_posts( 'category_name=noticias&posts_per_page=2' ); ?>	
									<?php while ( have_posts() ) : the_post(); ?>                   
		                <div class="col-md-6">
		                    <a href="<?php echo get_permalink( get_the_ID() ); ?>"><h3 class="medium mt-7 mb-0 pb-0"><?php the_title(); ?></h3></a>
		                    <?php $publicacion = the_field('publicacion_noticias'); ?>
		                    <small>
		                    	<?php $tempDate = get_the_date(); ?>
		                    	<?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?>
		                    	<?php if ($publicacion!='') { ?> 
														/ <a href="<?php the_field('link_publicacion_noticias'); ?>"><?php the_field('publicacion_noticias'); ?></a>
													<?php } ?>
												</small>
		                  	<?php if( get_field('imagen_noticias') ) { ?>
		                      <p class="mt-7"><img src="<?php the_field('imagen_noticias'); ?>" alt="" class="img-responsive"></p>
												<?php } else {?>
		                    	<p class="mt-7"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive"></p>
												<?php } ?>
												<p class="mt-14"><?php the_field('descripcion_rapida_noticias');?></p>
		                    <small class="vermas"><a href="<?php echo get_permalink( get_the_ID() ); ?>">Noticia completa >></a></small>											
	                  </div> 
	                <?php endwhile; ?>	
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
							                	<small>| <?php echo($comment->comment_author);?></small></li>          
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
		                <?php query_posts( 'category_name=noticias&posts_per_page=2' ); ?>	
										<?php while ( have_posts() ) : the_post(); ?>                   
			                <div class="col-md-12 mb-7">
			                    <a href="<?php echo get_permalink( get_the_ID() ); ?>"><h3 class="medium mt-7 mb-0 pb-0"><?php the_title(); ?></h3></a>
			                    <?php $publicacion = the_field('publicacion_noticias'); ?>
			                    <small>
			                    	<?php $tempDate = get_the_date(); ?>
			                    	<?php echo date_i18n('j', strtotime( $tempDate)); ?> de <?php echo date_i18n('F', strtotime( $tempDate)); ?> de <?php echo date_i18n('Y', strtotime( $tempDate)); ?>
			                    	<?php if ($publicacion!='') { ?> 
															/ <a href="<?php the_field('link_publicacion_noticias'); ?>"><?php the_field('publicacion_noticias'); ?></a>
														<?php } ?>
													</small>
			                  	<?php if( get_field('imagen_noticias') ) { ?>
			                      <p class="mt-7"><img src="<?php the_field('imagen_noticias'); ?>" alt="" class="img-responsive"></p>
													<?php } else {?>
			                    	<p class="mt-7"><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive"></p>
													<?php } ?>
													<p class="mt-14"><?php the_field('descripcion_rapida_noticias');?></p>	
			                    <p class="text-right"><small><a href="<?php echo get_permalink( get_the_ID() ); ?>">Noticia completa >></a></small></p>								
			                    <hr class="hr-gray-light">
		                  </div> 
		                <?php endwhile; ?>	
									</div>
									<div class="eventos">
			              <div class="panel panel-custom">
			                <div class="panel-body pt-0">
			                  <?php query_posts( 'category_name=eventos&posts_per_page=1' ); ?>	
												<?php while ( have_posts() ) : the_post(); ?>  
			                  <?php $tempDate = get_field('fecha_evento'); ?>
			                    <div class="events-calendar-placeholder mb-14">
			                      <div class="day"><?php echo date_i18n('D', strtotime( $tempDate)); ?></div>
			                      <div class="day-num"><?php echo date_i18n('d', strtotime( $tempDate)); ?></div>
			                      <div class="month"><?php echo date_i18n('M', strtotime( $tempDate)); ?></div>
			                    </div>
			                    <h5 class="medium"><?php the_title(); ?></h5>
			                    <p class="text-right"><small><a href="<?php echo get_permalink( get_the_ID() ); ?>">Ve más >></a></small></p>
			                  <?php endwhile; ?>
			                </div>
			              </div>								
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
	</div>
	
</div>

<?php get_footer(); ?>    