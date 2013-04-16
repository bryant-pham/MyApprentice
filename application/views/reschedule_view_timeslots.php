		    <h3>View Timeslots</h3>
  		</div>
		<div data-role="content">
			<ul data-role="listview" data-divider-theme="a">
			<?php foreach( $query as $date => $data ): ?>
			<li data-role="list-divider"><?php echo $date ?></li>
				<?php foreach( $data as $row ):?>
				<li><?php
					  $link = site_url() . "/shared/reschedule/" . $stu_id . "/" . $old_hr_id . "/" . $row[ 'hr_id' ]; 
					  echo "<h1>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<h1>";
					  echo "</a>";
					?>
					<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $link; ?>>Reschedule to this Timeslot</a>
				</li>
				<?php endforeach; ?>
			<?php endforeach; ?>
			</ul>
		</div>