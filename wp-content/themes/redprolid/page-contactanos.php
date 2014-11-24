<?php
/*
Template Name: Contactanos
*/

get_header(); ?>

    <!--HEADER-->
    <?php get_template_part( 'include', 'header' ); ?>
    
    <!--NAV-->
    <?php get_template_part( 'include', 'nav' ); ?>
    
    
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>    
    <div class="mh-700">
      <section id="contacto">
        <div class="container relative with-shadow">
          <div class="absolute dtl-custom-heading">
            <div><img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/toc-main-icon.png" alt=""></div>
            <h1 style="color: #aeab8b;">Contacto</h1>
            <hr style="border-top: 3px dotted #aeab8b;">
          </div>
          <div class="row pt-14-100">
            <div class="col-sm-6">
              <p class="lead"><?php the_field('texto_introductorio_contactanos'); ?></p>
              <p class="lead bold">¡Nos comprometemos a contestarte!</p>
            </div>
            <div class="col-sm-6">
              <!-- <form>
                <div class="form-group row">
                  <div class="col-sm-3 text-right">
                    <label class="h4 light">Nombre</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3 text-right">
                    <label class="h4 light">Email</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3 text-right">
                    <label class="h4 light">Mensaje</label>
                  </div>
                  <div class="col-sm-9">
                    <textarea type="text" class="form-control" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group text-right">
                  <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </div>                
              </form> -->
              <?php
              // Formbuilder manual form display. Replace the # in the following line with the ID number of the form to be displayed.
              if(function_exists('formbuilder_process_form')) echo formbuilder_process_form(1);
              // End of FormBuilder manual form display.
              ?>
            </div>
          </div>
        </div>
      </section>
    </div>
		<?php endwhile; ?>
	<?php endif; ?>     

<?php get_footer(); ?>
