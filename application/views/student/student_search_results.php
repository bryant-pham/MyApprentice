		    <h3>Instructor Results</h3>
 		 </div>
		<div data-role="content">
			<ul data-role="listview" data-split-icon="gear">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $ins_id = (string) $row[ 'ins_id' ];
					  $link = site_url() . "/student/apply/" . $ins_id;
					  echo "<h1>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p>"  . $row[ 'address' ] . "<p>";
					  echo "<p>"  . $row[ 'phone' ] . "<p>";
					  echo "<p>"  . $row[ 'email' ] . "<p>";
					?>
					<a data-role="button" href=<?php echo $link ?> data-rel="dialog">Apply</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>