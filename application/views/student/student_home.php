<!DOCTYPE HTML>
<html>
	<head>
        <title>My Apprentice</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src=<?php echo base_url() . "/assets/js/swipe.js" ?>></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
		<link rel="stylesheet" href=<?php echo base_url() . "/overwrite.css"?> />

        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="HandheldFriendly" content="true"/>

        <link rel="apple-touch-icon" href="http://myapprenticeapp.com/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="http://myapprenticeapp.com/img/apple-touch-icon-ipad.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="http://myapprenticeapp.com/img/apple-touch-icon-iphone.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="http://myapprenticeapp.com/img/apple-touch-icon-ipad2.png" />
        <link rel="apple-touch-startup-image" href="http://myapprenticeapp.com/img/Default.png" />
	</head>

	<body>
		<div data-theme="a" data-role="header">
            <a data-role="button" href=<?php echo site_url() . "/user/logout"?> class="ui-btn-right">Logout</a>
            <a data-role="button" href="#side_panel" class="ui-btn-left">Menu</a>
	        <h3>Student Main</h3>
	  	</div>
        <div data-role="content">
            <h3 align="center">Today's Appointments:</h3>
            <?php if( !( empty( $query ) ) ) {?>
            <ul data-role="listview" data-divider-theme="d">
                <?php foreach( $query as $date => $data ): ?>
                    <?php foreach( $data as $row ):?>
                    <li class="book-list"><?php 
                          echo "<h1 class='book-name'>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
                          echo "<p class='book-time'>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
                          echo "<p class='book-email'>"  . $row[ 'email' ] . "<p>";
                          echo "<p class='book-phone'>"  . "<a href='tel:+" . $row[ 'phone' ] . "'>" . $row[ 'phone' ] . "</a>" . "<p>";
                        ?>             
                    </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
            <?php } else echo "<h3 align='center'>No Appointments</h3>" ?>
        </div>