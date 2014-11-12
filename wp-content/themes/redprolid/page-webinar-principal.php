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
                  <a href="#" class="see-more">Charlacafé</a> 
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
          <h1 class="mb-21">Young women in parliament</h1>
          <p>Join us on October 14th 2014 for a webinar with the youngest women parliamentarians in the US and Tonga. Lemasingo Tanya Nai (26) - the youngest candidate contesting in the upcoming parliamentary elections in Tonga and Nily Rozic who upon her election in 2012 became the youngest woman to serve in the US legislature will share their experiences and thoughts on some of these issues:</p>
          <ul class="pv-ch-7">
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</li>
          </ul>
        </div>
        <div class="container-sm">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/img.png" alt="" class="img-responsive">
          <ul class="list-unstyled pv-35">
            <li><strong>Resource type:</strong><span>Webinars</span></li>
            <li><strong>Region:</strong><span></span></li>
            <li><strong>Theme: </strong><span></span></li>
            <li><strong>Publisher</strong><span></span></li>
            <li><strong>Publication year:</strong><span></span></li>
          </ul>
          <hr style="border-top: 3px dotted #aeab8b;">
          <h3>Comentarios</h3>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
