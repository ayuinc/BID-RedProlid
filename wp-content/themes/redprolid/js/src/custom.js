$(document).ready(function(){
  // $('#yop-poll-name-1').addClass("hidden");
  $("div[id^='yop-poll-name']").addClass("hidden");
  $(".yop-poll-question").addClass("text-white text-center p-14");
  $(".yop-poll-container").removeClass("box-shadow");
  $(".front-list").addClass("list-unstyled");
  $("button[id^='yop_poll_vote-button-3']").html("Vota")
  var votaButton = $("button[id^='yop_poll_vote-button-3']");
  votaButton.addClass("custom-vote");
});