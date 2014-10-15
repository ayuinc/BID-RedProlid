<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">

    <title>Red Prolid | Banco Interamericano del Desarrollo BID</title>
    <!-- Project SEO -->
    <meta name="description" content="">
    <meta name="keywords" content="" /> 
    <meta name="author" content="Ayu Consulting S.A.C" />

    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Apple Mobile -->
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Apple icons -->
    <link rel="apple-touch-icon" sizes="156x156" href="">
    <link rel="apple-touch-icon" sizes="128x128" href="">
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="apple-touch-icon" href="">

    <!-- WebFonts -->
    <script async type="text/javascript" src="//use.typekit.net/nsv5vjx.js"></script>
    <script async type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- APP STYLES -->
    <link rel="stylesheet" href="<?php echo content_url('/'); ?>themes/redprolid/stylesheets/main.css">
    <!-- <link rel="stylesheet" href="stylesheets/main.min.css"> -->
    
    <style>
    	.yop-poll-name {
	    	display:none;
    	}
    	.yop-poll-container {
	    	width:100% !important;
    	}
    	.yop-poll-question {
	    	background-color: #e94472;
				color: #FFF;
				padding: 1rem;
    	}
			.yop_poll_vote_button {
	    	color: white;
	    	width:100px;
				background-color: #ed7133;
				border-color: #eb611c;
				display: inline-block;
				margin-bottom: 0;
				font-weight: normal;
				text-align: center;
				vertical-align: middle;
				cursor: pointer;
				background-image: none;
				border: 1px solid transparent;
				white-space: nowrap;
				padding: 6px 12px;
				font-size: 14px;
				line-height: 1.42857;
				border-radius: 3px;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;				
			}    	
			.yop_poll_result_link, .yop_poll_back_to_vote_link {
				color: #ed7133 !important;
				font-family: "futura-pt", Helvetica, Arial, sans-serif !important;
			}		
			/*MODAL*/
			.modal-header {
				background-color: #E7E5D6 !important;
			}
			/*FOOTER*/
			footer .list-unstyled li a {
				color:#CCC !important;
				font-weight: 100;
				padding-bottom:5px;
				border-bottom:2px solid #000;
			}
			footer nav a {
				color:#CCC !important;
				font-weight: 100;
				padding-right:5px;
				margin-right:10px;
				border-right:2px solid #000;
			}	
			footer nav a:last-child {
				border:none;
			}	
			footer .social-links li a {
				border-bottom:none;
				color:#CCC;				
			}
			footer .social-links li a:hover {
				text-decoration: none;
			}			
			footer .social-links li {
				padding-right:10px;
				margin-right:15px;
				border-right:2px solid #000;
			}		
			footer .social-links li:last-child {
				border:none;
			}		
			/*COMMENTS*/
			.commentlist {
				border-bottom:1px solid #e5e5e5;
				margin: 2rem 0;
				padding-bottom:1rem;
			}
			.comment-form-comment textarea {
				width:100% !important;
				border-color:#CCC !important;
				height:120px;
			}		
			.form-submit input {
	    	color: white;
	    	width:100px;
				background-color: #ed7133;
				border-color: #eb611c;
				display: inline-block;
				margin-bottom: 0;
				font-weight: normal;
				text-align: center;
				vertical-align: middle;
				cursor: pointer;
				background-image: none;
				border: 1px solid transparent;
				white-space: nowrap;
				padding: 6px 12px;
				font-size: 14px;
				line-height: 1.42857;
				border-radius: 3px;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;	
			}			
			.depth-1 {
				list-style: none;
			}
			.comment-author img {
				width:40px;
				height:40px;
				margin-right:1rem;
			}
			.comment-meta {
				text-align: right;
				font-size: 0.9rem;
			}
			.comment-meta a {
				color: #ccc !important;
				font-weight: 100;
			}
			.reply {
				text-align: right;
			}
    </style>
    
  </head>
  <body>