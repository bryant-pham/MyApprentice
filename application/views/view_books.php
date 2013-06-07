	    <h3>Appointments</h3>
  	</div>
	<div data-role="content" id="content">
		<?php if( !( empty( $query ) ) ) {?>
		<ul data-role="listview" data-divider-theme="d">
			<?php foreach( $query as $date => $data ): ?>
			<li data-role="list-divider"><div class="list-divider"><?php echo $date ?></div></li>
				<?php foreach( $data as $row ):?>
				<li class="book-list"><?php 
					  $unbook_link = site_url() . "/shared/unbook/" . $row[ 'hr_id' ];
					  $reschedule_link = site_url() . "/shared/getTimeslots/" . $row[ 'ins_id' ] . "/TRUE";
					  echo "<h1 class='book-name'>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p class='book-time'>"  . $row[ 'start_time' ] . " - " . $row[ 'end_time' ] . "<p>";
					  echo "<p class='book-email'>"  . $row[ 'email' ] . "<p>";
					  echo "<p class='book-phone'>"  . "<a href='tel:+" . $row[ 'phone' ] . "'>" . $row[ 'phone' ] . "</a>" . "<p>";
					?>
					<form action=<?php echo $reschedule_link; ?> method="POST">
						<input type="hidden" name="old_hr_id" value=<?php echo $row['hr_id'] ?>>
						<input type="hidden" name="stu_id" value=<?php echo $row['stu_id'] ?>>
						<div class="book-list-button-top" >
							<a data-role="button" data-theme="e" data-rel="dialog" href="<?php echo $unbook_link; ?>">Unbook</a>
						</div>
						<div class="book-list-button-bottom">
							<input type="submit" value="Reschedule" data-theme="e" >
						</div>
					</form>				
				</li>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</ul>
		<?php } else echo "<h1 align='center'>No Appointments</h1>" ?>
	</div>