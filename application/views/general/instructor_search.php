<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
 	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
 	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="HandheldFriendly" content="true"/>

  	<title>My Apprentice</title>

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
	<link rel="stylesheet" href="http://myapprenticeapp.com/overwrite.css" />

	<link rel="apple-touch-icon" href="http://myapprenticeapp.com/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="http://myapprenticeapp.com/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="http://myapprenticeapp.com/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="http://myapprenticeapp.com/img/apple-touch-icon-ipad2.png" />
   	<link rel="apple-touch-startup-image" href="http://myapprenticeapp.com/img/Default.png" />
</head>
<body>
  	<div data-role="page" data-theme="e">
	  	<div data-theme="a" data-role="header" data-position="fixed">
	      	<div style=" text-align:center">
	          <img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
	      	</div>
		    <h3>My Apprentice</h3>
  		</div>
		<div data-role="content" data-theme="e">
			<form action="<?php echo site_url() . '/general/instructorSearch'?>" method="POST" data-ajax="false">
				<fieldset data-role="controlgroup">
					<h3 align="center">Find your music teacher</h3>
					<label for="zip_code">Zip Code:</label>
					<input type="text" name="zip_code">
					<label for="instrument">Instrument:</label>
				    <select name="instrument" id="select_instrument">
				        <option value="Drums">Drums</option>
				        <option value="Piano">Piano</option>
				        <option value="Guitar">Guitar</option>
				        <option value="Voice">Voice</option>
				        <option value="Violin">Violin</option>
				        <option value="Saxaphone">Saxaphone</option>
				    </select>
				    <label for="location">Location:</label>
				    <select name="location" id="select_location">
				        <option value="in_studio">In-Studio</option>
				        <option value="in_home">In-Home</option>
				    </select>
				</fieldset>
				<input type="submit" value="Search">
			</form>
			<fieldset data-role="controlgroup">
					<a data-role="button" href="<?php echo site_url() . '/user'?>">OR Log in/Register here</a>
			</fieldset>
		</div>
	</body>
</html>
