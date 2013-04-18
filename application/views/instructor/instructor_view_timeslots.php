	    <h3>Your Timeslots</h3>
  	</div>
	<div data-role="content">
		<?php if( !( empty( $query ) ) ) {?>
		<ul data-role="listview" data-divider-theme="d">
			<?php foreach( $query as $date => $data ): ?>
			<li data-role="list-divider"><div class="list-divider"><?php echo $date ?></div></li>
				<?php foreach( $data as $row ):?>
				<li><?php 
					$delete_link = site_url() . "/instructor/deleteTimeslot/" . $row[ 'hr_id' ];
					echo "<p class='timeslot-time'>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					?>
					<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $delete_link; ?> class="timeslot-button">Delete</a>
				</li>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</ul>
		<?php } else echo "<h1 align='center'>No Timeslots Available</h1>" ?>
	</div>