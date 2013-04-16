	    <h3>Appointments</h3>
  	</div>
	<div data-role="content">
		<ul data-role="listview" data-divider-theme="a">
			<?php foreach( $query as $date => $data ): ?>
			<li data-role="list-divider"><?php echo $date ?></li>
				<?php foreach( $data as $row ):?>
				<li><?php 
					  $unbook_link = site_url() . "/shared/unbook/" . $row[ 'hr_id' ];
					  $reschedule_link = site_url() . "/shared/getTimeslots/" . $row[ 'ins_id' ] . "/TRUE";
					  echo "<h1>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					  echo "<p>"  . $row[ 'email' ] . "<p>";
					  echo "<p>"  . "<a href='tel:+" . $row[ 'phone' ] . "'>" . $row[ 'phone' ] . "</a>" . "<p>";
					?>
					<form action=<?php echo $reschedule_link; ?> method="POST">
						<input type="hidden" name="old_hr_id" value=<?php echo $row['hr_id'] ?>>
						<input type="hidden" name="stu_id" value=<?php echo $row['stu_id'] ?>>
						<div data-role="controlgroup" data-type="horizontal">
							<a data-role="button" data-theme="e" data-rel="dialog" href="<?php echo $unbook_link; ?>">Unbook</a>
							<input type="submit" value="Reschedule" data-theme="e">
						</div>
					</form>				
				</li>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</ul>
	</div>