'use-strict'
$(document).ready ->
	# BROWSER DETECTION

	pgwBrowser = $.pgwBrowser()

	console.log pgwBrowser

	isIE = if pgwBrowser['browser']['name'] is 'Internet Explorer' or 'IEMobile' then true else false

	if isIE
		$('.site-wrapper').addClass 'ie'

	return