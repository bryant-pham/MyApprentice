<!DOCTYPE HTML>
<html>
	<head>
		<title>My Apprentice</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="HandheldFriendly" content="true"/>

		<link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" />
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.calbox.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.datebox.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
        <link rel="stylesheet" href="http://myapprenticeapp.com/overwrite.css" />

		<link rel="apple-touch-icon" href="http://myapprenticeapp.com/img/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="http://myapprenticeapp.com/img/apple-touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="http://myapprenticeapp.com/img/apple-touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="http://myapprenticeapp.com/img/apple-touch-icon-ipad2.png" />
   		<link rel="apple-touch-startup-image" href="http://myapprenticeapp.com/img/Default.png" />
	</head>

	<body>
		<div data-theme="a" data-role="header">
			<a data-role="button" href="#" data-rel="back" class="ui-btn-left" data-icon="back">
              	Back
          	</a>
			<a data-role="button" href=<?php echo site_url() . "/user/logout"?> class="ui-btn-right">
              	Logout
          	</a>