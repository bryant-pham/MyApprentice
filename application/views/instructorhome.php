<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">

        
	</head>

	<body>
		<div data-role="page" id="page1">
			<div data-theme="a" data-role="header">
		        <h3>
		            Instructor Main
		        </h3>
  		  	</div>
            <div data-role="content">
                <a id="edit_profile" data-role="button" data-theme="b" href="http://localhost/index.php/instructor/index/editprofile">
                    Edit Profile
                </a>
                <a id="post_hours" data-role="button" data-theme="b" href="http://localhost/index.php/instructor/index/posthours">
                    Post Hours
                </a>
                <a id="view_hours" data-role="button" data-theme="b" href="http://localhost/index.php/instructor/viewHours">
                    View Your Available Times
                </a>
                <a id="view_bookings" data-role="button" data-theme="b" href="http://localhost/index.php/instructor/viewBooks">
                    View Appointments
                </a>

            </div>
        </div>
	</body>
</html>