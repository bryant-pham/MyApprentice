		    <h3>View Timeslots</h3>
  		</div>
		<div data-role="content">
			<ol data-role="listview">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $link = site_url() . "/shared/reschedule/" . $stu_id . "/" . $old_hr_id . "/" . $row[ 'hr_id' ]; 
					  echo "<h1>" . $row[ 'schedule_date' ] . "</h1>";
					  echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					  echo "<p>Hour ID: " . $row[ 'hr_id' ] . "<p>";
					  echo "</a>";
					?>
					<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $link; ?>>Reschedule to this Timeslot</a>
				</li>
				<?php endforeach; ?>
			</ol>
		</div>