		    <h3>Student Requests</h3>
 		 </div>
		<div data-role="content">
			<ul data-role="listview" data-split-icon="gear">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $link   = site_url() . "/instructor/approve/" . $row[ 'stu_id' ];
					  echo "<h1>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p>"  . $row[ 'address' ] . "<p>";
					  echo "<p>"  . $row[ 'phone' ] . "<p>";
					  echo "<p>"  . $row[ 'email' ] . "<p>";
					?>
					<a data-role="button" href=<?php echo $link ?> data-rel="dialog">Approve</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>