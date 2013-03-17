	<div data-role="content">
		<ol data-role="listview">
			<?php foreach( $query as $row ):?>
			<li><?php 
					$delete_link = "http://localhost/index.php/instructor/deleteTimeslot/" . $row[ 'hr_id' ];
					echo "<h1>" . $row[ 'schedule_date' ] . "</h1>";
					echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					echo "<p>Hour ID: "  . $row[ 'hr_id' ] . "<p>";
				?>
				<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $delete_link; ?>>Delete</a>
			</li>
			<?php endforeach; ?>
		</ol>
	</div>