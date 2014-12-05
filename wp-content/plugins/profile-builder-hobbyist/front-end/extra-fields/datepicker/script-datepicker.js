jQuery(function(){
	//hover states on the static widgets
	jQuery('#dialog_link, ul#icons li').hover(
		function() { jQuery(this).addClass('ui-state-hover'); }, 
		function() { jQuery(this).removeClass('ui-state-hover'); }
	);	
});

/* initialize datepicker */
jQuery(function(){
	// Datepicker
    jQuery('.custom_field_datepicker').each( function(){
        var currentDatepicker = this;
        jQuery( currentDatepicker ).datepicker({
            inline: true,
            changeMonth: true,
            changeYear: true,
            dateFormat: jQuery( currentDatepicker ).data('dateformat')
        });
    });
});