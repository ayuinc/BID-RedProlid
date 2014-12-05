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
      <section class="pb-0">
        <div class="container relative mh-140">
          <div class="absolute dtl-custom-heading" style="padding-top: 6px;">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/webinarios-icon.png" alt="" width="90" height="auto"></div>
            <div class="clearfix">
              <div class="col-sm-6">
                <h1 style="color: #aeab8b;" class="mb-0">Webinarios</h1>
              </div>
              <div class="col-sm-6 pt-28 pl-70">
                <nav class="text-right">
                  <div class="row">
                    <div class="col-sm-6 mt-21">
                      <a href="#" data-toggle="modal" data-target="#pdv-modal">¿Quieres proponernos un tema?</a>
                    </div>
                    <div class="col-sm-6 mt-21 text-left">
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

        <?php
        $customposts = get_posts('category_name=webinario&showposts=1' );
        foreach( $customposts as $post ) :  // start you custom loop
        setup_postdata($post); ?>

        <div class="container">
          <h1 class="mb-21"><?php the_title(); ?></h1>
          <p class="text-gray"><?php echo get_post_field('post_content', get_the_ID()); ?></p>
        </div>
        <div class="container-sm">
          <?php
            $url = get_field('video');
            parse_str( parse_url( $url, PHP_URL_QUERY ), $videocode );
          ?> 
          <div class="video-container videoWrapper">
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
          <div class="comments">
            <?php comments_template();?>
          </div> 
        </div>
        <?php endforeach; ?>
      </section>
    </div>

<?php get_footer(); ?>
