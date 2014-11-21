<?php
/**
 * The Template for displaying all single posts
 *
 */

get_header(); ?>
<!--HEADER-->
<?php get_template_part( 'include', 'header' ); ?>
<!--NAV-->
<?php get_template_part( 'include', 'nav' ); ?>
<?php //query_posts( 'category_name=puntos-de-vista' ); ?> 
<div class="mh-700">
  <section id="puntos-de-vista">
    <div class="container relative with-shadow mb-28">
      <div class="absolute dtl-custom-heading">
        <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-icon.png" alt=""></div>
        <div class="clearfix">
          <div class="col-sm-6">
            <h1 style="color: #aeab8b;">Puntos de vista</h1>
          </div>
          <div class="col-sm-6 pt-28">
            <nav class="text-right">
              <a href="#">Puntos de vista anteriores</a> | <a href="#" data-toggle="modal" data-target="#myModal">¿Te gustaría proponernos un tema?</a>
            </nav>
          </div>
        </div>
        <hr style="border-top: 3px dotted #aeab8b;">
      </div>
      <h4 class="pt-14-100 light">Te ofrecemos artículos escritos por mujeres líderes en la región latinoamericana: políticas, especialistas o profesionales relevantes que ponen sobre el papel su experiencia en pro de unas sociedades más equitativas.</h4>
    </div>
    <div class="container text-justify with-hr">
      <div class="row">
        <div class="col-sm-3">
          <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="" class="img-responsive">
        </div>
        <div class="col-sm-9">
          <h3><?php the_field('nombre_completo'); ?> <small>(Bolivia)</small></h3>
          <p><?php the_field('profesion'); ?> / <a href="http://twitter.com/<?php the_field('cuenta_de_twitter'); ?>">@<?php the_field('cuenta_de_twitter'); ?></a></p>
          <p class="lh-lg text-justify">
          	<?php the_field('descripcion_punto_de_vista'); ?>
          </p>
        </div>
      </div>
    </div>
    <div class="container text-justify with-hr">
  	  <h4><?php the_title(); ?></h4>
      <p><?php the_field('contenido_punto_de_vista'); ?></p>
      <div class="text-center">
        <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
      </div>          
    </div>
    <div class="container text-justify with-hr">
     	<?php //$comments_args = array(
			//         // change the title of send button 
			//         'label_submit'=>'Enviar',
			//         // change the title of the reply section
			//         'title_reply'=>'Escribe un comentario',
			//         // remove "Text or HTML to be displayed after the set of comment fields"
			//         'comment_notes_after' => '',
			//         // redefine your own textarea (the comment body)
			//         'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comentario', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
			// );
			
			//comment_form($comments_args); ?>
			
			<?php //$id_post_comentarios = get_the_ID(); ?> 
			
			<div class="commentlist">
				<?php
					//Gather comments for a specific page/post 
					//$comments = get_comments(array(
						//'post_id' => $id_post_comentarios,
						//'status' => 'approve' //Change this to the type of comments to be displayed
					//));
			
					//Display the list of comments
					//wp_list_comments(array(
						//'per_page' => 10, //Allow comment pagination
						//'reverse_top_level' => false //Show the latest comments at the top of the list
					//), $comments);
				?>
			</div>
      <?php comments_template(); ?>
		</div>	
    </div>
    <div class="container with-shadow mh-350">
    </div>
    <div class="container with-hr">
      <h4>Artículos comentados</h4>
      <ul class="grid-list grid-list-2 pb-ch-7">
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur!</a>/ Loreto Sating</li>
      </ul>
    </div>
  </section>
</div>
<?php get_footer(); ?>