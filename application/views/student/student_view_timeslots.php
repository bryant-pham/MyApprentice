		    <h3>View Timeslots</h3>
 		 </div>
		<div data-role="content">
			<?php if( !( empty( $query ) ) ) {?>
			<ul data-role="listview" data-divider-theme="d">
				<?php foreach( $query as $date => $data ): ?>
				<li data-role="list-divider"><div class="list-divider"><?php echo $date ?></div></li>
					<?php foreach( $data as $row ):?>
					<li><?php
						  $book_link = site_url() . "/shared/book/" . $this->session->userdata( 'user_id' ) . "/" .$row[ 'hr_id' ]; 
						  echo "<p class='timeslot-time'>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
						?>
						<a data-role="button" data-theme="e" data-rel="dialog" href=<?php echo $book_link; ?> class="timeslot-button">Book</a>
					</li>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</ul>
			<?php } else echo "<h1 align='center'>No Timeslots Available</h1>" ?>
		</div>
