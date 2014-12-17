<section id="puntos-de-vista" class="pt-0">
  <div class="container relative mb-28">
    <div class="row">
      <div class="col-md-12">
        <?php the_breadcrumb(); ?>
      </div>
    </div>
    <div class="absolute dtl-custom-heading z-index-100">
      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-icon.png" alt=""></div>
      <div class="clearfix">
        <div class="col-sm-6">
          <h1 style="color: #aeab8b;">Puntos de vista</h1>
        </div>
        <div class="col-sm-6 pt-28">
          <nav class="text-right">
            <a href="<?php echo home_url('/'); ?>puntos-de-vista-list">Puntos de vista anteriores</a> 
            <?php
            if ( is_user_logged_in() ) {
              echo '|<a href="#" data-toggle="modal" data-target="#pdv-modal">¿Te gustaría proponernos un tema?</a>';
            }
            ?>
          </nav>
        </div>
      </div>
      <hr style="border-top: 2px dotted #888888;">
    </div>
    <div clas="row">
	    <div class="col-sm-10 col-md-offset-1">
	    	<h4 class="pt-14-100 light">Te ofrecemos artículos escritos por mujeres líderes en la región latinoamericana: políticas, especialistas o profesionales relevantes que ponen sobre el papel su experiencia en pro de unas sociedades más equitativas.</h4>
	    </div>
    </div>
  </div>
  <div class="container text-left mb-35">
    <div class="row">
      <div class="col-sm-3 col-md-offset-1">
        <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-sm-6">
        <h1 class="mt--5"><?php the_title(); ?></h1>
        <p><?php the_field('profesion'); ?> <!--/ <a href="http://twitter.com/<?php //the_field('cuenta_de_twitter'); ?>">@<?php the_field('cuenta_de_twitter'); ?></a>--></p>
        <p class="text-justify">
        	<?php the_field('descripcion_larga_punto_de_vista'); ?>
        </p>
      </div>
    </div>
  </div>
  <div class="container text-left">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr pb-14">
        <hr style="border-top: 2px dotted #888888;">	  
			  <h4><?php the_field('nombre_completo'); ?></h4>
		    <p><?php the_field('contenido_punto_de_vista'); ?></p>
		    <div class="text-center mt-14">
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
		    </div>   
      </div>
    </div>       
  </div>
  <div class="container text-justify">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr pt-49 pb-49">	  
				<?php comments_template(); ?>
      </div>
    </div>
	</div>	
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 pt-35">		  
		    <h4>Artículos comentados</h4>
		    <ul class="ml--14 grid-list grid-list-2 pb-ch-7">
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
                <li><a href="<?php echo get_permalink( $comm_post_id ); ?>"><?php echo($comment->comment_content);?></a>/ <?php echo($comment->comment_author);?></li>          
            <?php endif; ?>
          <?php endif; ?>
          
        <?php endforeach;?>
        </ul>
      </div>
    </div>
  </div>
</section>
