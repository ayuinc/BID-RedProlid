$(document).ready(function(){
  // $('#yop-poll-name-1').addClass("hidden");
  $("div[id^='yop-poll-name']").addClass("hidden");
  // $(".yop-poll-question").addClass("text-white text-center p-14");
  $(".yop-poll-container").removeClass("box-shadow");
  $(".front-list").addClass("list-unstyled");
  $("button[id^='yop_poll_vote-button-3']").html("Vota")
  // var votaButton = $("button[id^='yop_poll_vote-button-3']");
  // votaButton.addClass("custom-vote");
  // $('div.yop-poll-answers ul li:first').addClass("mt-35");
  $('.yop-poll-answers ul li label').addClass('respuesta');
  $('[data-href]').click(function(e) {
    var lastPath, locationArr, mainPath, pathObj;
    locationArr = window.location.pathname.split('/');
    lastPath = locationArr[locationArr.length - 1];
    mainPath = locationArr[locationArr.length - 2];
    pathObj = {};
    pathObj[mainPath] = lastPath;
    window.history.pushState(pathObj, '', lastPath);
    document.location.replace($(this).data('href'));
  });
});

