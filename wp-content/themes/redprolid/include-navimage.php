    	<?php 
			    $uri = $_SERVER['REQUEST_URI'];
			    $elements = explode('/', $uri) ;
			    $segment1 = $elements[1] ; // For the first segment
			    $segment2 = $elements[2] ; //For the 2nd segment
			    $segment3 = $elements[3] ; //For the 3rd segment
			?>       
      <section id="dtl-grid">
        <div class="container">
          <ul class="list-unstyled">
	          <?php if ($segment2!='a-donde-vamos') { ?>
            <li>
              <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/a-donde-vamos/">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-adonde-vamos-gs.jpg" alt="" class="gs">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-adonde-vamos-col.jpg" alt="" class="color">
                <div class="title">                  
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-adonde-vamos-icon.png" alt="">                  
                  <h3>¿Adónde v@mos?</h3>
                  <hr>
                </div>
              </a>
            </li>
            <?php } ?>
            <?php if ($segment2!='carrera-de-vallas') { ?>
            <li>
              <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/carrera-de-vallas/">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-carrera-vallas-gs.jpg" alt="" class="gs">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-carrera-vallas-col.jpg" alt="" class="color">
                <div class="title">                  
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-carrera-vallas-icon.png" alt="">                  
                  <h3>Carrera de vallas</h3>
                  <hr>
                </div>
              </a>
            </li>
            <?php } ?>
            <?php if ($segment2!='nivelando-la-cancha') { ?>
            <li>
              <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/nivelando-la-cancha/">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-nivelando-cancha-gs.jpg" alt="" class="gs">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-nivelando-cancha-col.jpg" alt="" class="color">
                <div class="title">                  
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-nivelando-cancha-icon.png" alt="">                  
                  <h3>Nivelando la cancha</h3>
                  <hr>
                </div>
              </a>
            </li>
            <?php } ?>
            <?php if ($segment2!='listas-para-la-politica') { ?>
            <li>
              <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/listas-para-la-politica/">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-listas-politica-gs.jpg" alt="" class="gs">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-listas-politica-col.jpg" alt="" class="color">
                <div class="title">                  
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-listas-politica-icon.png" alt="">                  
                  <h3>Listas para la política</h3>
                  <hr>
                </div>
              </a>
            </li>
            <?php } ?>
            <?php if ($segment2!='agenda-de-genero') { ?>
            <li>
              <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/agenda-de-genero/">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-agenda-genero-gs.jpg" alt="" class="gs">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-agenda-genero-col.jpg" alt="" class="color">
                <div class="title">                  
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-agenda-genero-icon.png" alt="">                  
                  <h3>Agenda de género</h3>
                  <hr>
                </div>
              </a>
            </li>
            <?php } ?>
            <?php if ($segment2!='pistas-2') { ?>
            <li>
              <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/pistas-2/">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas-gs.jpg" alt="" class="gs">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas-col.jpg" alt="" class="color">
                <div class="title">                  
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-pistas-icon.png" alt="">                  
                  <h3>Pistas</h3>
                  <hr>
                </div>
              </a>
            </li>  
            <?php } ?> 
            <?php if ($segment2!='la-pinta-no-es-lo-de-menos') { ?>         
            <li>
              <a href="<?php echo home_url('/'); ?>desarrolla-tu-liderazgo/la-pinta-no-es-lo-de-menos/">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-la-pinta-gs.jpg" alt="" class="gs">
                <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-la-pinta-col.jpg" alt="" class="color">
                <div class="title">                  
                  <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/dtl-la-pinta-icon.png" alt="">                  
                  <h3>La pinta no es lo de menos</h3>
                  <hr>
                </div>
              </a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </section>  