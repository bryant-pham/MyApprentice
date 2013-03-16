	<div data-role="content">
		<ol data-role="listview">
			<?php foreach( $query as $row ):?>
			<li><?php 
					  $unbook_link = "http://localhost/index.php/shared/unbook/" . $row[ 'hr_id' ];
					  echo "<h1>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p>"  . $row[ 'schedule_date' ] . "<p>";
					  echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					  echo "<p>"  . $row[ 'email' ] . "<p>";
					  echo "<p>"  . $row[ 'phone' ] . "<p>";
				?>
				<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $unbook_link; ?>>Unbook</a>
			</li>
			<?php endforeach; ?>
		</ol>
	</div>