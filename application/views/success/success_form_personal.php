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
  	<div data-role="page" data-theme="e">
	  	<div data-theme="a" data-role="header" data-position="fixed">
	      	<div style=" text-align:center">
	          <img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
	      	</div>
			<a data-role="button" href=<?php echo site_url() . "/" . $this->session->userdata('user_type') ?> class="ui-btn-left">
              	Home
          	</a>
			<a data-role="button" href=<?php echo site_url() . "/user/logout" ?> class="ui-btn-right">
              	Logout
          	</a>
	      	<h3>
	          Info Update
	      	</h3>
		</div>
		<div data-role="content" align="center">
			Your personal information has been successfully updated!
		</div>
	</div>
</body>
</html>