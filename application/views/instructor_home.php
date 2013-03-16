<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">

        <link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" />
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.calbox.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.datebox.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	</head>

	<body>
		<div data-role="page" id="page1" style="background: url('http://assets.codiqa.com/QDVFGnpQgaozktXIusfj_c6.jpg') no-repeat">
			<div data-theme="a" data-role="header">
                <div style=" text-align:center">
                    <img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
                </div>
		        <h3>
		            Instructor Main
		        </h3>
  		  	</div>
            <div data-role="content">
                <a id="edit_profile" data-role="button" data-theme="e" href="http://localhost/index.php/instructor/index/instructor_edit_profile">
                    Edit Profile
                </a>
                <a id="post_hours" data-role="button" data-theme="e" href="http://localhost/index.php/instructor/index/post_hours">
                    Post Hours
                </a>
                <a id="view_hours" data-role="button" data-theme="e" href="http://localhost/index.php/instructor/viewHours">
                    View Your Available Times
                </a>
                <a id="view_bookings" data-role="button" data-theme="e" href="http://localhost/index.php/instructor/viewBooks">
                    View Appointments
                </a>

            </div>
        </div>
	</body>
</html>