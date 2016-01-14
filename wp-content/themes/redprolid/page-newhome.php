<?php
/*
Template Name: Prototipo QuienesSomos
*/
get_template_part( 'include', 'headerprototipo' ); ?>

<?php  get_footer(); ?>
<script type="text/javascript">
	$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

	});
</script>

