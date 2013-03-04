<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

        <!--DateBox stuff -->
        <link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" />
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.calbox.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.datebox.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	</head>

	<body>
		<div data-role="page" id="page1">
			<div data-theme="a" data-role="header">
		        <h3>
		            Instructor Main
		        </h3>
  		  	</div>
            <div data-role="content">
                <a id="edit_profile" data-role="button" data-theme="b" href="#editprofile">
                    Edit Profile
                </a>
                <a id="post_hours" data-role="button" data-theme="b" href="#posthours">
                    Post Hours
                </a>
                <a id="view_hours" data-role="button" data-theme="b" href="http://localhost/index.php/instructor/viewHours">
                    View Posted Hours
                </a>
                <a id="view_bookings" data-role="button" data-theme="b" href="http://localhost/index.php/instructor/viewBooks">
                    View Bookings
                </a>

            </div>
        </div>

        <!--Edit Profile-->
        <div data-role="page" id="editprofile">
            <div data-role="content">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput1">
                        </label>
                        <input name="" id="textinput1" placeholder="First Name" value="" type="text">
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput2">
                        </label>
                        <input name="" id="textinput2" placeholder="Last Name" value="" type="text">
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput3">
                        </label>
                        <input name="" id="textinput3" placeholder="Email" value="" type="text">
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput4">
                        </label>
                        <input name="" id="textinput4" placeholder="Phone" value="" type="text">
                    </fieldset>
                </div>
            </div>
        </div>

        <div data-role="page" data-theme="e" id="posthours" style="background: url('http://assets.codiqa.com/QDVFGnpQgaozktXIusfj_c6.jpg') no-repeat">
            <div data-theme="a" data-role="header">
                <div style=" text-align:center">
                    <img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
                </div>
                <h3>
                    Post Hours
                </h3>
            </div>
            <div data-role="content">
                <form action="http://localhost/index.php/instructor/postHours" method="POST">
                    <label for="mydate">Date</label>
                    <input name="date" id="date" type="date" data-role="datebox" data-options='{"mode": "calbox", "overrideDateFormat": "%Y-%m-%d"}'>      

                    <label for="time1">Time 1</label>
                    <input name="time1" id="time1" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <select name="duration1" id="duration1">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time2">Time 2</label>
                    <input name="time2" id="time2" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <select name="duration2" id="duration2">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time3">Time 3</label>
                    <input name="time3" id="time3" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <select name="duration3" id="duration3">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time4">Time 4</label>
                    <input name="time4" id="time4" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <select name="duration4" id="duration4">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time5">Time 5</label>
                    <input name="time5" id="time5" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <select name="duration5" id="duration5">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time6">Time 6</label>
                    <input name="time6" id="time6" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <select name="duration6" id="duration6">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <input type="submit" value="Save">
                </form>
            </div>
        </div>
	</body>
</html>