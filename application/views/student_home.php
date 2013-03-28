<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        
        <link rel="apple-touch-icon" href="images/appicon.jpg" />
        <link rel="apple-touch-startup-image" href="images/startup.png">

	</head>

	<body>
		<div data-role="page" id="page1" style="background: url('http://assets.codiqa.com/QDVFGnpQgaozktXIusfj_c6.jpg') no-repeat">
			<div data-theme="a" data-role="header">
                <div style=" text-align:center">
                    <img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
                </div>
		        <h3>
		            Student Main
		        </h3>
  		  	</div>
            <div data-role="content">
                <a id="edit_profile" data-role="button" data-theme="e" href="http://localhost/index.php/student/index/student_edit_profile">
                    Edit Profile
                </a>
                <a id="instructor_search" data-role="button" data-theme="e" href="http://localhost/index.php/student/index/student_instructor_search">
                    Instructor Search
                </a>
                <a id="view_bookings" data-role="button" data-theme="e" href="http://localhost/index.php/student/viewBooks">
                    View Appointments
                </a>

            </div>
        </div>
	</body>
</html>