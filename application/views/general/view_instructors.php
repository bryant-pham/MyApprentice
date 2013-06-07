<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
 	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
 	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
  	<title>MyApp-rentice</title>

  	<link rel="stylesheet" href=<?php echo base_url() . "/overwrite.css"?> />

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script> 
</head>
<body>
  	<div data-role="page">
	  	<div data-theme="a" data-role="header" data-position="fixed">
	      	<div style=" text-align:center">
	          <img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
	      	</div>
			<a data-role="button" href="#" data-rel="back" class="ui-btn-left">
              	Back
          	</a>		    
		    <h3>Instructor Results</h3>
 		 </div>
		<div data-role="content">
			<?php if( !( empty( $query ) ) ) {?>
			<ul data-role="listview" data-split-icon="gear">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $link = site_url() . "/general/index/login_prompt";
					  echo "<a href=" . $link . ">"; 
					  echo "<h1 class='book-name'>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p class='book-email'>"  . $row[ 'email' ] . "<p>";
					  echo "<p class='list-phone'>"  . "<a href='tel:+" . $row[ 'phone' ] . "'>" . $row[ 'phone' ] . "</a>" . "<p>";
					  echo "</a>";
					?>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php } else echo "<h1 align='center'>No Instructors Found</h1>" ?>
		</div>
	</body>
</html>