<section>
  <div class="container">
		<?php the_breadcrumb(); ?>
    <!--<div class="clearfix bg-panel sub-header">
      <div class="col-sm-7">
	      <div>
	        <h1>Desarrolla tu liderazgo</h1>
	        <nav class="mt-21">
	          <a href="<?php echo content_url('/'); ?>concursos">Concursos >></a>
	        </nav>
	      </div>
      </div>
      <div class="sub-header-icon">
        <img src="<?php //echo content_url('/'); ?>themes/redprolid/assets/icons/concursos-icon-circle-alpha.png" width="94px" height="auto" alt="">
      </div>
    </div>-->
    <div class="ph-70-sm ph-14-xs">
      <div class="row pt-35">
        <div class="col-sm-12 pt-35-sm col-xs-12">
				    <div class="title">
					    <h2 class="medium"><?php the_title(); ?></h2>
					    <p>FUENTES: <a href="<?php the_field('url');?>" target="_blank"><?php the_field('blog-debates');?><?php $debate_tipo_de_url=get_field('debate_tipo_de_url'); ?><?php if ($debate_tipo_de_url=='video') { ?><img src="http://redprolid.org/wp-content/themes/redprolid/assets/img/enterate-grid-4-01.png" alt="" style="margin:0 5px; width:20px"><?php } ?></a> <?php the_field('autor');?></p>
				    </div> 
            <div class="content">
              <?php the_field('contenido-debates'); ?>
            </div>         
        </div>
        <div class="comments mt-35">
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