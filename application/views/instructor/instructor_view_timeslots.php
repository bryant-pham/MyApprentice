	    <h3>Your Timeslots</h3>
  	</div>
	<div data-role="content">
		<ul data-role="listview">
			<?php foreach( $query as $row ):?>
			<li><?php 
					$delete_link = site_url() . "/instructor/deleteTimeslot/" . $row[ 'hr_id' ];
					echo "<h1>" . $row[ 'schedule_date' ] . "</h1>";
					echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					echo "<p>Hour ID: "  . $row[ 'hr_id' ] . "<p>";
				?>
				<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $delete_link; ?>>Delete</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>