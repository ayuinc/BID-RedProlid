$(document).ready(function(){
	$('.toggle-adv-search').click(function(e){
		e.preventDefault();
		$('.adv-search').toggleClass('hidden');
	});
});