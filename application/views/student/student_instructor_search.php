		    <h3>Instructor Search</h3>
  		</div>
		<div data-role="content" data-theme="e" style="background: url('http://assets.codiqa.com/QDVFGnpQgaozktXIusfj_c6.jpg') no-repeat">
			<form action="<?php echo site_url() . '/student/instructorSearch'?>" method="POST" data-ajax="false">
				<fieldset data-role="controlgroup">
					<label for="instrument">Instrument:</label>
					<input type="text" name="instrument" placeholder="Enter type of instrument">
				</fieldset>
				<input type="submit" value="Search">
			</form>
		</div>
		