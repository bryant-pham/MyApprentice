<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	</head>

	<body>
		<div data-role="page" id="page1">
			<div data-theme="a" data-role="header">
		        <h3>
		            Student Main
		        </h3>
  		  	</div>
            <div data-role="content">
                <a id="edit_profile" data-role="button" data-theme="b" href="http://localhost/index.php/instructor/index/editprofile">
                    Edit Profile
                </a>
                <a id="instructor_search" data-role="button" data-theme="b" href="http://localhost/index.php/student/index/instructorsearch">
                    Instructor Search
                </a>
                <a id="view_bookings" data-role="button" data-theme="b" href="http://localhost/index.php/student/viewBooks">
                    View Appointments
                </a>

            </div>
        </div>
	</body>
</html>