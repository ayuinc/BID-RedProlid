'use-strict'
$(document).ready ->
	# BROWSER DETECTION

	pgwBrowser = $.pgwBrowser()

	console.log pgwBrowser

	isIE = if pgwBrowser['browser']['group'] is 'Explorer' then true else false

	if isIE
		$('.site-wrapper').addClass 'ie'

	return