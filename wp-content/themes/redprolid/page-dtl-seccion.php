<?php
/*
Template Name: DTL-Seccion
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section id="dtl-adonde-vamos">
        <div class="container relative dtl-content">
         <!-- Start the Loop. -->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
		          <div class="absolute dtl-custom-heading">
		            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-adonde-vamos-icon.png" alt="<?php the_title(); ?>"></div>
		            <h1 style="color: #007c8d;"><?php the_title(); ?></h1>
		            <hr style="border-top: 3px dotted #007c8d;">
		          </div>
		          <img src="<?php the_field('imagen-dtl-seccion'); ?>" alt="<?php the_title(); ?>" class="pull-right mr-21 img-circle" width="560px" height="auto">
		          <p class="text-left pt-14-100"><?php the_field('contenido-dtl-seccion'); ?></p>
						<?php endwhile; ?>
					<?php endif; ?>        
        </div>
      </section>
      <section class="sumate-al-debate">
        <div class="container">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate.png" alt="" class="ribbon">
          <div class="row">
            <div class="col-sm-9 pt-35">
						<?php 
						    $uri = $_SERVER['REQUEST_URI'];
						    $elements = explode('/', $uri) ;
						    $segment1 = $elements[1] ; // For the first segment
						    $segment2 = $elements[2] ; //For the 2nd segment
						    $segment3 = $elements[3] ; //For the 3rd segment
						?>         
            <?php query_posts( 'category_name='.$segment3.'&posts_per_page=1' ); ?>	
							<?php while ( have_posts() ) : the_post(); ?>
	              <div class="title">
	                <h3><?php the_title(); ?></h3>
	                <p>FUENTE: <?php the_field('fuente-debates'); ?></p>
	                <span>Blog: <?php the_field('blog-debates'); ?></span>
	              </div>
	              <div class="content">
	                <?php the_field('contenido-debates'); ?>
	              </div>
	              <div class="footer">
	                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
	              </div>
							<?php endwhile; ?>    
          
							<?php $comments_args = array(
							        // change the title of send button 
							        'label_submit'=>'Enviar',
							        // change the title of the reply section
							        'title_reply'=>'Escribe un comentario',
							        // remove "Text or HTML to be displayed after the set of comment fields"
							        'comment_notes_after' => '',
							        // redefine your own textarea (the comment body)
							        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comentario', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
							);
							
							comment_form($comments_args); ?>
							
							<?php $id_post_comentarios = get_the_ID(); ?> 
							
							<div class="commentlist">
								<?php
									//Gather comments for a specific page/post 
									$comments = get_comments(array(
										'post_id' => $id_post_comentarios,
										'status' => 'approve' //Change this to the type of comments to be displayed
									));
							
									//Display the list of comments
									wp_list_comments(array(
										'per_page' => 10, //Allow comment pagination
										'reverse_top_level' => false //Show the latest comments at the top of the list
									), $comments);
								?>
							</div>
          
            </div>
            <div class="col-sm-3">
              <div class="debates-anteriores">
                <h4>¿Quieres ver los debates anteriores?</h4>
                <div class="text-right">
                  <a href="#" class="btn btn-primary">Ir a archivos</a>
                </div>
              </div>
              <h4>Lo último en las redes</h4>
              <div>
								<div class="fb-like-box" data-width="250" data-height="520" data-href="https://www.facebook.com/redprolid" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>              
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--NAVIMAGEN-->
    <?php get_template_part( 'include', 'navimage' ); ?>    
    </div>

<?php get_footer(); ?>    