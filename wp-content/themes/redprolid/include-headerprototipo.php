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
   <header class="header-content bg-gray-lighter minh-70">
     <div class="container-md text-center">
      <div class="row">
        <div class="header-left left">
          <input type="checkbox" id="op"></input>
          <div class="lower mt-21 col-sm-4 col-xs-4 col-md-4 col-lg-4">
           <label id="in" for="op"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAQ0lEQVQ4T82SwREAIAjD6ITFEVzRBfFwhTyQf9MjVwU8wXzI9iEQZWbNAkh7Z9vBJpAPHNhe6AUSfhLnd4CnjB1QwAWERRF1hcszqQAAAABJRU5ErkJggg=="/> MENU</label>

          </div>
          <div class="overlay overlay-hugeinc bg-gray-lighter">
             <label class="cerrar text-gray" id="out" for="op">CERRAR <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzUlEQVQ4T42TYRXCMAyErw5wAhLAQSQwBSAFFICEOAAJ4AQJvNtL9kqbdOxnu/uSXi4FAETkCOAE4KCqH55ln4hsADwAXFX1Xkx8M8FrBKnEO/t/IoCibVUxhARiSt4EsKXnCJKJAeyLeZBCrDO+2dueK1NMv2bACoTXoZgXC2AAqQeyVPbDH8AKpBN3HVSA9s28CqcTPSESe8cdpDUxcpviNCf1GMNRWek0Jx6kdM5rOYmiHLqdJbZdplA8CNvkHnCdzx7PP9aZnly4zl8NTn4w5oPSqAAAAABJRU5ErkJggg=="/></label>
             <nav>
              <ul class="text-primary">
               <li><a href="#">Acerca de Red Prolid</a></li>
               <li><a href="#">Desarrolla tu liderazgo</a></li>
               <li><a href="#">Entérate</a></li>
               <li><a href="#">Contáctanos</a></li>
              </ul>
              <div class="text-center">
                <hr class="text-primary">
              </div>
             </nav>
          </div>
        </div>
        <div class="header-center center col-sm-4 col-xs-4 col-md-4 col-lg-4">
          <img src="<?php echo content_url('/'); ?>themes/redprolid/assets/img/logo_redprolid-head.png" class="img-responsive w-68 hidden-xs hidden-sm logo-menu-redprolid">
        </div>
        <div class="header-right right text-right-xs col-sm-4 col-xs-8 col-md-4 col-lg-4">
          <!-- Facebook icon by Icons8 -->
          <img class="mt-21-sm mt-21-md mt-21-lg mt-14-xs icon icons8-Facebook icon-facebook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAABA0lEQVRIS+2W7W3CQBBEHx3QQUgF0AEphXQAFQAV0AIlpINAB5RAKiBUAHrIhw7Lwtha/AdWOtnSfYxndm7XPTqKXkc4vAbQBFgB/Zay/gMzYJ3vr5LOhcauJdAIOACfdUAnYAt8tQTaAGO4zX8VoyZAU2AIDIAlIEg4UDowERdoEQ2krL8Fwh/wU4xwRkqmMw2Tvs/yGSqdEs2Lw8t5DgFSMh3lM7lSUEOnhkmXMym7/7u4pCGMrBoO7fyRMfHVvHnJQ4ASi6fn6A10NUzbWheSI9uEhfVem9B1DkOX5WGbOGbzl7kqRtrXL072bdotrH3ur218TQ9+aP1r/Jw8JEXTRWfl31Ab6JvgggAAAABJRU5ErkJggg==" width="26" height="26">
          <!-- Twitter  icon by Icons8 -->
          <img class="mt-21-sm mt-21-md mt-21-lg mt-14-xs icon icons8-Twitter icon-twitter" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAABTklEQVRIS+2W0U0DMRAFJxUAFUAHoQQ6ACoAOkgHQAVAB1ABUAHQQTqAEqADNJKNfMne2ebjvmLpdNF5veP3vGtlwUxjMROHHejfTkfW7QPfDRmPgWvAt/EvwEP6fQK8lzkikAt8HidgJnoL5r/St1dgVQO5u70U6A6jYcLDkbms7qlUFSlaA8uURPlXQN6pn4+Az4q1rhk4EoFukvdlLoEuFHgAPE+APgCtHYwI5OGaNKtqqItBSDOotK4XYvwtoCtVRZF1PcDzVLVVkAGW92lP9hT7k4plqw/H7jory2Y8A2zg1mE7DPonL5wC1Up4E64aC6lshb+Yqdv7ErhPzduiKDybmqI8r20C7yqkUctaQNpwkUBT57R1C0Sb2rTOhNoloDZsTNWGZ9LSR8aoxorzKhFuFdrIufQt/yZAi3U1RV3zu/8MXXaVwbNZ9wvt1TYbd/v+AQAAAABJRU5ErkJggg==" width="26" height="26">
          <!-- LinkedIn icon by Icons8 -->
          <img class="mt-21-sm mt-21-md mt-21-lg mt-14-xs icon icons8-LinkedIn icon-linkedin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAABBUlEQVRIS+2W4RHBQBCFv1RCB6iAFnRABzpAB1SATuiACtCBDphncmaTuczJTuRP7Ewmc8nevbzd9+6S0VJkLeHQDaAhsAN098QZmAO6fyJWOiX0y4k1EPWBV2CUAnoCJ2BSY3GbegTGUOx/jJEFmgFLYA3svwR2Ad2AXk2GLiAx0iU2P2WUqpYaL9YPk+hiFCYFcYTxARgYC+j5NAdsFCjGVN5ReRsFuhs28p0EswUWTQOpdBKJoqq8BeukfFS1iHy1+gOVFWS3oE3edDVcjQ5ja+Byjkt1KcPG3n8NFORaOE9qIGq3sPJ/T42pTokqjZzviUsu/eTB51k8OacbPyfJMngSXv+3bBvzLBPkAAAAAElFTkSuQmCC" width="26" height="26">
        </div>
      </div>
     </div>
   </header>
