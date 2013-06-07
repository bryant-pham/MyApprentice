		    <h3>Your Instructors</h3>
 		 </div>
		<div data-role="content">
			<?php if( !( empty( $query ) ) ) {?>
			<ul data-role="listview" data-split-icon="gear">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $ins_id = (string) $row[ 'ins_id' ];
					  $link = site_url() . "/shared/getTimeslots/" . $ins_id;
					  echo "<a href=" . $link . ">"; 
					  echo "<h1 class='book-name'>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p class='book-email'>"  . $row[ 'address' ] . "<p>";
					  echo "<p class='book-email'>"  . $row[ 'email' ] . "<p>";
					  echo "<p class='list-phone'>"  . "<a href='tel:+" . $row[ 'phone' ] . "'>" . $row[ 'phone' ] . "</a>" . "<p>";
					  echo "</a>";
					?>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php } else echo "<h1 align='center'>No Instructors</h1>" ?>
		</div>