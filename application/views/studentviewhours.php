<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
	</head>	
	<body>
		<div data-role="page" id="view_hours">
			<div data-theme="a" data-role="header">
				<div style=" text-align:center">
					<img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
				</div>
				<h3>View Instructor Availability</h3>
			</div>
			<div data-role="content">
				<ol data-role="listview">
					<?php foreach( $query as $row ):?>
					<li><?php
						  $link = "http://localhost/index.php/student/book/" . $row[ 'hr_id' ]; 
						  echo "<a href=" . $link . ">";
						  echo "<h1>" . $row[ 'schedule_date' ] . "</h1>";
						  echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
						  echo "<p>Hour ID: "  . $row[ 'hr_id' ] . "<p>";
						  echo "</a>";
						?>
					</li>
					<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</body>
</html>
