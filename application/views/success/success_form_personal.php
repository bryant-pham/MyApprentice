<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
 	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
 	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
  	
  	<title>MyApp-rentice</title>

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script> 
</head>
<body>
  	<div data-role="dialog">
	  	<div data-theme="a" data-role="header" data-position="fixed">
	      	<div style=" text-align:center">
				<a href=<?php echo site_url() . "/" . $this->session->userdata('user_type')?>>
					<img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
				</a>	      	
			</div>
		</div>
		<div data-role="content" align="center">
			<strong>Your account has been successfully updated<strong>
			<a href=<?php echo site_url() . '/' . $this->session->userdata('user_type') ?> data-role="button" data-theme="e">OK</a>
		</div>
	</div>
</body>
</html>