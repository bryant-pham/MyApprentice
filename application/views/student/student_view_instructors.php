		    <h3>Your Instructors</h3>
 		 </div>
		<div data-role="content">
			<ul data-role="listview" data-split-icon="gear">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $ins_id = (string) $row[ 'ins_id' ];
					  $link = site_url() . "/shared/getTimeslots/" . $ins_id;
					  echo "<a href=" . $link . ">"; 
					  echo "<h1>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p>"  . $row[ 'address' ] . "<p>";
					  echo "<p>"  . "<a href='tel:+" . $row[ 'phone' ] . "'>" . $row[ 'phone' ] . "</a>" . "<p>";
					  echo "<p>"  . $row[ 'email' ] . "<p>";
					  echo "</a>";
					?>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>