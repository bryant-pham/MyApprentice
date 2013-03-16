
		<div data-role="content">
			<ol data-role="listview">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $link = "http://localhost/index.php/student/book/" . $row[ 'hr_id' ]; 
					  echo "<a href=" . $link . ">";
					  echo "<h1>" . $row[ 'schedule_date' ] . "</h1>";
					  echo "<p>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					  echo "<p>Hour ID: "  . $row[ 'hr_id' ] . "<p>";
					  echo "</a>";
					?>
				</li>
				<?php endforeach; ?>
			</ol>
		</div>
