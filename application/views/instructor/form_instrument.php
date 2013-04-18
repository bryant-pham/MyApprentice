        <h3>Your Instruments</h3>
	</div>
	<div data-role="content" data-theme="e">
		<div data-role="fieldset">
		<h3>Currently Taught Instruments:</h3>
		<?php if( !( empty( $query ) ) ) {?>
			<div data-role="controlgroup">
				<ul>
				<?php foreach( $query as $row ): ?>
					<li><?php echo $row[ 'instrument' ] ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
		<?php } else echo "<h4>You have no listed instruments</h4>" ?>
		</div>
		<div data-role="controlgroup">
		<h3>Add Instruments:</h3>
		<?php echo form_open( 'instructor/addInstruments' ); ?>
		<fieldset data-role="controlgroup">
			<label for="instrument">Instrument 1:</label>
		    <select name="instrument1" id="select_instrument">
		    	<option value="" selected="selected"></option>
		        <option value="Drums">Drums</option>
		        <option value="Piano">Piano</option>
		        <option value="Guitar">Guitar</option>
		        <option value="Voice">Voice</option>
		        <option value="Violin">Violin</option>
		        <option value="Saxaphone">Saxaphone</option>
		    </select>
		</fieldset>
		<fieldset data-role="controlgroup">
			<label for="instrument">Instrument 2:</label>
		    <select name="instrument2" id="select_instrument">
		    	<option value="" selected="selected"></option>
		        <option value="Drums">Drums</option>
		        <option value="Piano">Piano</option>
		        <option value="Guitar">Guitar</option>
		        <option value="Voice">Voice</option>
		        <option value="Violin">Violin</option>
		        <option value="Saxaphone">Saxaphone</option>
		    </select>
		</fieldset>
		<fieldset data-role="controlgroup">
			<label for="instrument">Instrument 3:</label>
		    <select name="instrument3" id="select_instrument">
		    	<option value="" selected="selected"></option>
		        <option value="Drums">Drums</option>
		        <option value="Piano">Piano</option>
		        <option value="Guitar">Guitar</option>
		        <option value="Voice">Voice</option>
		        <option value="Violin">Violin</option>
		        <option value="Saxaphone">Saxaphone</option>
		    </select>
		</fieldset>
		    <input type="submit" value="Save">
	    </form>
		</div>
	</div>