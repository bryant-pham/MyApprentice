		<div data-role="content">
			<ol data-role="listview" data-split-icon="gear">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $ins_id = (string) $row[ 'ins_id' ];
					  $link = "http://localhost/index.php/student/gethours/" . $ins_id;
					  echo "<a href=" . $link . ">"; 
					  echo "<h1>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p>"  . $row[ 'address' ] . "<p>";
					  echo "<p>"  . $row[ 'phone' ] . "<p>";
					  echo "<p>"  . $row[ 'email' ] . "<p>";
					  echo "</a>";
					?>
				</li>
				<?php endforeach; ?>
			</ol>
		</div>