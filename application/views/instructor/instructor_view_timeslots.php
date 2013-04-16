	    <h3>Your Timeslots</h3>
  	</div>
	<div data-role="content">
		<ul data-role="listview">
			<?php foreach( $query as $date => $data ): ?>
			<li data-role="list-divider" data-theme="a"><?php echo $date ?></li>
				<?php foreach( $data as $row ):?>
				<li><?php 
					$delete_link = site_url() . "/instructor/deleteTimeslot/" . $row[ 'hr_id' ];
					echo "<h1>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<h1>";
					?>
					<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $delete_link; ?>>Delete</a>
				</li>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</ul>
	</div>