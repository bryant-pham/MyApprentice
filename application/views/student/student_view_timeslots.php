		    <h3>View Timeslots</h3>
 		 </div>
		<div data-role="content">
			<?php if( !( empty( $query ) ) ) {?>
			<ul data-role="listview" data-divider-theme="a">
				<?php foreach( $query as $date => $data ): ?>
				<li data-role="list-divider"><?php echo $date ?></li>
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
			<?php } else echo "<h1 align='center'>No Timeslots Available</h1>" ?>
		</div>
