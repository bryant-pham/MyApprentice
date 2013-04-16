<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>

	  	<meta charset="utf-8">
	 	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	 	<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

	</head>

	<body>
		<div data-role="content" align="center">
			<strong>Successfully Booked<strong>
			<a data-role="button" href=<?php echo site_url() . '/' . $this->session->userdata('user_type')?> data-theme="e">OK</a>
		</div>
	</body>
</html>