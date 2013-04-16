		    <h3>View Timeslots</h3>
 		 </div>
		<div data-role="content">
			<ul data-role="listview">
				<?php foreach( $query as $date => $data ): ?>
				<li data-role="list-divider" data-theme="a"><?php echo $date ?></li>
					<?php foreach( $data as $row ):?>
					<li><?php
						  $book_link = site_url() . "/shared/book/" . $this->session->userdata( 'user_id' ) . "/" .$row[ 'hr_id' ]; 
						  echo "<h1>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<h1>";
						  echo "</a>";
						?>
						<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $book_link; ?>>Book</a>
					</li>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</ul>
		</div>
