<?php
/*
Template Name: Webinar principal Page
*/
get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    <div class="mh-700">
      <section>
        <div class="container relative mh-140">
          <div class="absolute dtl-custom-heading">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/webinarios-icon.png" alt="" width="77" height="auto"></div>
            <div class="clearfix">
              <div class="col-sm-6">
                <h1 style="color: #aeab8b;">Webinarios</h1>
              </div>
              <div class="col-sm-6 pt-28">
                <nav class="text-right">
                  <div class="row">
                    <div class="col-sm-6">
                        <a href="#" class="">¿Quieres proponernos un tema?</a> 
                    </div>
                    <div class="col-sm-6">
                        <a href="<?php echo home_url('/'); ?>webinarios-anteriores" class="">Webinarios anteriores</a> 
                    </div>      
                  </div>
                </nav>
              </div>
            </div>
            <hr style="border-top: 3px dotted #aeab8b;">
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <h5>Próximo Webinario</h5>
        </div>
        <?php if (have_posts()) : ?>
        <?php $count = 0; ?>

        <?php query_posts( 'category_name=webinario' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php $count++; ?>

        <?php if ($count <= 1) : ?>
          <?php $id_post_comentarios = get_the_ID(); ?> 
        <div class="container">
          <h1 class="mb-21"><?php the_title(); ?></h1>
          <p><?php echo get_post_field('post_content', get_the_ID()); ?></p>
        </div>
        <div class="container-sm">
          <?php
            $url = get_field('video');
            parse_str( parse_url( $url, PHP_URL_QUERY ), $videocode );
          ?> 
          <div class="video-container">
            <iframe src="//www.youtube.com/embed/<?php echo $videocode['v']; ?>" frameborder="0" allowfullscreen></iframe>
          </div>
          <!-- <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive"> -->
          <ul class="list-unstyled pv-35">
            <li><strong>Resource type:</strong><span><?php the_field('source_type'); ?></span></li>
            <li><strong>Region:</strong><span><?php the_field('region'); ?></span></li>
            <li><strong>Theme: </strong><span><?php the_field('theme'); ?></span></li>
            <li><strong>Publisher:</strong><span><?php the_field('publisher'); ?></span></li>
            <li><strong>Publication year:</strong><span><?php the_field('publication_year'); ?></span></li>
          </ul>
          <hr style="border-top: 3px dotted #aeab8b;">
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
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </section>
    </div>

<?php get_footer(); ?>
