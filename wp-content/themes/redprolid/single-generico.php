<section> 
  <div class="container relative">
    <?php the_breadcrumb(); ?>
    <div class="ph-70-sm ph-14-xs pv-21">
      <div class="row pt-35-sm pb-14">
        <div class="col-sm-12 text-center-sm col-lg-12"> 
          <h2 class="medium mb-0"><?php the_title(); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 with-hr">     
          <p><?php the_field('contenido'); ?></p> 
        </div>
      </div>   
      <div class="row">
        <div class="col-sm-12 pv-21">  
          <?php if ( is_user_logged_in() ) { ?>
            <?php comments_template();?>
          <?php } else { ?>
            <p>Para poder comentar es necesario que <a href="/registrate/">inicies tu sesión o te registres</a> en Red PROLID.</p>
          <?php } ?>
        </div>
      </div>          
    </div>
  </div>      
</section>