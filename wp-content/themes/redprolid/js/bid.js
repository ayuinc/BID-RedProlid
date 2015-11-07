$(document).ready(function ($) {
	$('.bbp-topic-order').each(function (value, index){ 
			$(value).html(index);
		});
});

$("a#anchor-header").click(function() {
    $('html, body').animate({
        scrollTop: $("#middle-content").offset().top
    }, 2000);
});