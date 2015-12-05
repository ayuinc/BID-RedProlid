<html <?php language_attributes(); ?>>
  <head>

    <meta charset="utf-8">
    <!-- Project SEO -->
    <title><?php wp_title(''); ?></title>
    
    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo content_url('/'); ?>themes/redprolid/assets/img/favicon.ico.png">

    <!-- WebFonts -->
    <script src="//use.typekit.net/nsv5vjx.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?> <!-- AVISAMOS QUE TERMINA EL HEAD -->
    <!--[if IE 9]>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/html5shiv.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/respond.min.js"></script>
    <script src="<?php echo content_url('/'); ?>themes/redprolid/js/app/vendor/placeholders.min.js"></script>
    <![endif]-->
    <!--CRAZZYEGG-->
		<script type="text/javascript">
		setTimeout(function(){var a=document.createElement("script");
		var b=document.getElementsByTagName("script")[0];
		a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0039/9228.js?"+Math.floor(new Date().getTime()/3600000);
		a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
		</script>
  </head>
  <body>
   <header class="header-content bg-gray-lighter">
     <div class="container-md text-center">
      <div class="row">
        <div class="header-left left">
          <input type="checkbox" id="op"></input>
          <div class="lower mt-21 col-sm-4 col-xs-4 col-md-4 col-lg-4">
           <label for="op"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAQ0lEQVQ4T82SwREAIAjD6ITFEVzRBfFwhTyQf9MjVwU8wXzI9iEQZWbNAkh7Z9vBJpAPHNhe6AUSfhLnd4CnjB1QwAWERRF1hcszqQAAAABJRU5ErkJggg=="/> MENU</label>

          </div>
          <div class="overlay overlay-hugeinc bg-gray-lighter">
             <label class="cerrar text-gray" for="op">CERRAR <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzUlEQVQ4T42TYRXCMAyErw5wAhLAQSQwBSAFFICEOAAJ4AQJvNtL9kqbdOxnu/uSXi4FAETkCOAE4KCqH55ln4hsADwAXFX1Xkx8M8FrBKnEO/t/IoCibVUxhARiSt4EsKXnCJKJAeyLeZBCrDO+2dueK1NMv2bACoTXoZgXC2AAqQeyVPbDH8AKpBN3HVSA9s28CqcTPSESe8cdpDUxcpviNCf1GMNRWek0Jx6kdM5rOYmiHLqdJbZdplA8CNvkHnCdzx7PP9aZnly4zl8NTn4w5oPSqAAAAABJRU5ErkJggg=="/></label>
             <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-head.png" class="img-responsive mt-28 w-22">
             <nav>
              <ul class="text-gray">
               <li><a href="#">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Work</a></li>
               <li><a href="#">Clients</a></li>
               <li><a href="#">Contact</a></li>
              </ul>
             </nav>
          </div>
        </div>
        <div class="header-center center col-sm-4 col-xs-4 col-md-4 col-lg-4">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-head.png" class="img-responsive w-68">
        </div>
        <div class="header-right right col-sm-4 col-xs-4 col-md-4 col-lg-4"></div>
      </div>
     </div>
   </header>
