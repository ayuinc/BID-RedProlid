<section> 
  <div class="container relative">
    <?php the_breadcrumb(); ?>
    <div class="ph-70 pv-21">
      <div class="row pb-14">
        <div class="col-sm-4">  
        <?php $imagen = get_field('imagen_noticias'); ?>
        <?php if ($imagen!='') { ?>
          <img src="<?php the_field('imagen_noticias'); ?>" alt="<?php the_field('fuente_imagen_noticias'); ?>" class="img-responsive">
        <?php } else { ?>
          <img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/02/eventos_redprolid.png" alt="<?php the_field('fuente_imagen_noticias'); ?>" class="img-responsive">
        <?php } ?>           
          <small><?php the_field('fuente_imagen_noticias'); ?></small>
        </div>
        <div class="col-sm-7">  
          <h2 class="medium mb-0"><?php the_title(); ?></h2>
          <?php $publicacion = get_field('publicacion_noticias'); ?>
          <small>
            <?php echo get_the_date('j F, Y'); ?>, <?php if ($publicacion!='') { ?><a href="<?php the_field('link_publicacion_noticias'); ?>" target="_blank"><?php the_field('publicacion_noticias'); ?></a>
            
            <?php } ?>
          </small>        
          <h4 class="mt-14 light lh-lg"><?php the_field('descripcion_rapida_noticias'); ?></h4>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 with-hr">     
          <p><?php the_field('contenido_noticias'); ?></p>
          <p class="text-right"><a href="<?php the_field('link_publicacion_noticias'); ?>" class="btn btn-primary" target="_blank">Lee la noticia completa</a></p>
          <div class="text-right">
            <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-sumate-al-debate-footer-icon.png" alt="">
          </div>   
        </div>
        <div class="col-sm-12 with-hr pv-21">
          <div class="container-sm">
          <p>
            <?php $autor_noticias = get_field('autor_noticias'); ?>
            <?php $pais_noticias = get_field('pais_noticias'); ?>
            <?php if ($tema_noticias!='') { ?>                  
            <span class="medium">Tema:</span> <?php the_field('tema_noticias'); ?>
                <?php if ($tag_tipo_de_recurso_noticia!='') { ?>
                  <?php echo ', '.$tag_tipo_de_recurso_noticia; ?>
                <?php } ?>              
            <?php } ?>
            <?php if ($pais_noticias!='') { ?>            
            <span class="medium">País:</span> <?php the_field('pais_noticias'); ?><br>
            <?php } ?>
            <?php $tipo_recursos_noticias = get_field('tipo_recursos_noticias'); ?>
            <?php $tag_tema_noticia = get_field('tag_tema_noticia'); ?>
            <?php if ($tipo_recursos_noticias!='') { ?>           
            <span class="medium">Tipo de recurso:</span> <?php the_field('tipo_recursos_noticias'); ?>
                <?php if ($tag_tema_noticia!='') { ?>
                  <?php echo ', '.$tag_tema_noticia; ?>
                <?php } ?>  
                <br>          
            <?php } ?>
            <?php $tema_noticias = get_field('tema_noticias'); ?>
            <?php $tag_tipo_de_recurso_noticia = get_field('tag_tipo_de_recurso_noticia'); ?>
            <?php if ($autor_noticias!='') { ?>
            <strong>Subido por:</strong> <a href="mailto:<?php the_field('autor_email_noticias'); ?>"><?php the_field('autor_noticias'); ?></a><br>
            <?php } ?>            
          </p> 
          </div>
        </div>
      </div>       
      <div class="row">
        <div class="col-sm-12 pv-21">  
          <?php if ( is_user_logged_in() ) { ?>
            <?php comments_template();?>
          <?php } else { ?>
            <p>Para poder comentar es necesario <a href="/registrate/">iniciar tu sesión o registrarse</a> a Red PROLD.</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>      
</section>