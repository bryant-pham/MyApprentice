	    <h3>Scheduled Appointments</h3>
  	</div>
	<div data-role="content">
		<ol data-role="listview">
			<?php foreach( $query as $row ):?>
			<li><?php 
					  $unbook_link = site_url() . "/shared/unbook/" . $row[ 'hr_id' ];
					  $reschedule_link = "http://localhost/index.php/shared/getTimeslots/" . $row[ 'ins_id' ] . "/TRUE";
					  echo "<h1>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p>"  . $row[ 'schedule_date' ] . "<p>";
					  echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					  echo "<p>"  . $row[ 'email' ] . "<p>";
					  echo "<p>"  . $row[ 'phone' ] . "<p>";
					  echo "<p>"  . $row[ 'hr_id' ] . "<p>";
				?>
				<div data-role="controlgroup" data-type="horizontal">
					<form action=<?php echo $reschedule_link; ?> method="POST">
						<input type="hidden" name="old_hr_id" value=<?php echo $row['hr_id'] ?>>
						<input type="hidden" name="stu_id" value=<?php echo $row['stu_id'] ?>>
						<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $unbook_link; ?>>Unbook</a>
						<input type="submit" value="Reschedule" data-theme="e">
					</form>				
				</div>
			</li>
			<?php endforeach; ?>
		</ol>
	</div>