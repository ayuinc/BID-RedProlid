// Generated by CoffeeScript 1.8.0
(function() {
  'use-strict';
  $(document).ready(function() {
    var $menuTrigger, $mobileNavDisplayTriggers, $mobileNavRefGlobal, $siteWrapper;
    $siteWrapper = $('.site-wrapper');
    $menuTrigger = $('.menu-trigger');
    $mobileNavDisplayTriggers = $('.mobile-nav-display-triggers');
    $menuTrigger.click(function(e) {
      e.preventDefault();
      $siteWrapper.toggleClass('menu-on');
    });
    transformicons.add('.tcon');
    $mobileNavRefGlobal = '';
    $mobileNavDisplayTriggers.on('click', '[href^=#]', function(e) {
      var $navRef, $navRefClass;
      $navRef = $(this).attr('href');
      $mobileNavRefGlobal = $navRef.slice(1);
      if ($navRef.length > 0) {
        e.preventDefault();
        $navRefClass = $navRef.slice(1);
        $siteWrapper.addClass('display ' + $navRefClass);
      }
    });
    $('.mobile-nav-display .back').click(function(e) {
      e.preventDefault();
      $siteWrapper.removeClass('display');
      $siteWrapper.removeClass($mobileNavRefGlobal);
    });
  });

}).call(this);
