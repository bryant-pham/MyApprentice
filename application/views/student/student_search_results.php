		    <h3>Instructor Results</h3>
 		 </div>
		<div data-role="content">
			<?php if( !( empty( $query ) ) ) {?>
			<ul data-role="listview" data-split-icon="gear">
				<?php foreach( $query as $row ):?>
				<li><?php
					  $ins_id = (string) $row[ 'ins_id' ];
					  $link = site_url() . "/student/apply/" . $ins_id;
					  echo "<h1 class='name2'>" . $row[ 'f_name' ] . ' ' . $row[ 'l_name' ] . "</h1>";
					  echo "<p class='email2'>"  . $row[ 'email' ] . "<p>";
					  echo "<p class='phone2'>"  . "<a href='tel:+" . $row[ 'phone' ] . "'>" . $row[ 'phone' ] . "</a>" . "<p>";
					?>
					<div class="apply-button">
						<a data-role="button" href=<?php echo $link ?> data-theme="e" data-rel="dialog">Apply</a>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php } else echo "<h1 align='center'>No Instructors Found</h1>" ?>
		</div>