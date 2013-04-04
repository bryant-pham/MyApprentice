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
		    <h3>My Apprentice</h3>
  		</div>
		<div data-role="content" data-theme="e">
			<?php echo form_open('general/instructorSearch'); ?>
				<fieldset data-role="controlgroup">
					<div align="center">
						<h3>Start by entering an instrument</h3>
					</div>
					<input type="text" name="instrument" placeholder="Enter type of instrument">
				</fieldset>
				<input type="submit" value="Search">
			</form>
			<fieldset data-role="controlgroup">
					<a data-role="button" href="<?php echo site_url() . '/user'?>">OR Log in/Register here</a>
				</fieldset>
		</div>
	</body>
</html>
		