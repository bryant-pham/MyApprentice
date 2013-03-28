<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>

		<meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <link rel="apple-touch-icon" href="images/appicon.jpg" />

	</head>

	<body>
		<div data-theme="a" data-role="header">
			<div style=" text-align:center">
				<img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
			</div>
			<a data-role="button" href="http://localhost/index.php/student" class="ui-btn-left">
              	Home
          	</a>
			<h3>
				<?php echo $heading; ?>
			</h3>
		</div>