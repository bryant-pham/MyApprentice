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
		<div data-theme="a" data-role="header">
			<div style=" text-align:center">
				<a href=<?php echo site_url() . "/" . $this->session->userdata('user_type')?>>
					<img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
				</a>			
			</div>
			<h3>Unbook Confirm</h3>
		</div>
		<div data-role="content" align="center">
			Successfully Unbooked!
		</div>
	</body>
</html>