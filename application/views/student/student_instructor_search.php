		    <h3>Instructor Search</h3>
  		</div>
		<div data-role="content" data-theme="e" style="#">
			<h2 align="center">Find your music teacher</h2>
			<form action="<?php echo site_url() . '/student/instructorSearch'?>" method="POST" data-ajax="false">
				<fieldset data-role="controlgroup">
					<label for="zip_code">Zip Code:</label>
					<input type="text" name="zip_code">
					<label for="instrument">Instrument:</label>
				    <select name="instrument" id="select_instrument">
				        <option value="drums">Drums</option>
				        <option value="piano">Piano</option>
				        <option value="guitar">Guitar</option>
				        <option value="voice">Voice</option>
				        <option value="harmonica">Harmonica</option>
				        <option value="saxaphone">Saxaphone</option>
				    </select>
				    <label for="location">Location:</label>
				    <select name="location" id="select_location">
				        <option value="in_studio">In-Studio</option>
				        <option value="in_home">In-Home</option>
				    </select>
				</fieldset>
				<input type="submit" value="Search">
			</form>
		</div>
		