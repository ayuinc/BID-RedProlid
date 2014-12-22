<section id="puntos-de-vista" class="mt-7">
  <div class="container relative mb-14">
    <div class="row">
      <div class="col-md-12">
        <?php the_breadcrumb(); ?>
      </div>
    </div>
    <div class="absolute dtl-custom-heading z-index-100">
      <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/pdv-main-icon.png" alt="" width="80"></div>
      <div class="clearfix">
        <div class="col-md-6">
          <h1 class="mt-14 ml--25 mb-0 brand-titular">Puntos de vista</h1>
        </div>
        <div class="col-md-6 pt-28">
          <nav class="text-right mb-0 mt-0">
            <a href="<?php echo home_url('/'); ?>puntos-de-vista-list" class="light">Puntos de vista anteriores</a> 
            <?php
            if ( is_user_logged_in() ) {
              echo '|<a href="#" data-toggle="modal" data-target="#pdv-modal">¿Te gustaría proponernos un tema?</a>';
            }
            ?>
          </nav>
        </div>
      </div>
    </div>
    <div clas="row">
	    <div class="col-md-10 col-md-offset-1 pl-0 pr-0">
	    	<h3 class="pt-14-100 light mt-14">Te ofrecemos artículos escritos por mujeres líderes en la región latinoamericana: políticas, especialistas o profesionales relevantes que ponen sobre el papel su experiencia en pro de unas sociedades más equitativas.</h3>
	    </div>
    </div>
  </div>
  <div class="container text-left mb-21">
    <div class="row">
      <div class="col-md-3 col-md-offset-1">
        <img src="<?php the_field('imagen_punto_de_vista'); ?>" alt="" class="img-responsive">
      </div>
      <div class="col-md-7">
        <h2 class="mt--5 mb-0 medium"><?php the_title(); ?></h2>
        <p><?php the_field('profesion'); ?></p>
        <p class="text-left">
        	<?php the_field('descripcion_larga_punto_de_vista'); ?>
        </p>
      </div>
    </div>
  </div>
  <div class="container text-left">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr pb-14 pl-0 pr-0">  
			  <h3 class="medium mb-0"><?php the_field('nombre_completo'); ?></h3>
		    <?php the_field('contenido_punto_de_vista'); ?>
		    <div class="text-center mt-14">
		      <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
		    </div>   
      </div>
    </div>       
  </div>
  <div class="container mb-21">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 with-hr pt-14 pb-14 pl-0 pr-0">	  
				<?php comments_template(); ?>
      </div>
    </div>
	</div>	
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-offset-1 pl-0 pr-0">		  
		    <h3 class="text-gray-darker">Artículos comentados</h3>
		    <ul class="ml--14 grid-list grid-list-2 pb-ch-7 light">
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
                <li><a href="<?php echo get_permalink( $comm_post_id ); ?>"><?php echo($comment->comment_content);?></a> / <?php echo($comment->comment_author);?></li>          
            <?php endif; ?>
          <?php endif; ?>
          
        <?php endforeach;?>
        </ul>
      </div>
    </div>
  </div>
</section>
