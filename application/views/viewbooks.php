	<div>
		<ol data-role="listview">
			<?php foreach( $query as $row ):?>
			<li><?php 
					  echo "<h1>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p>"  . $row[ 'schedule_date' ] . "<p>";
					  echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					  echo "<p>"  . $row[ 'email' ] . "<p>";
					  echo "<p>"  . $row[ 'phone' ] . "<p>";
				?>
			</li>
			<?php endforeach; ?>
		</ol>
	</div>