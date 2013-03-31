        <h3>Edit Personal Info</h3>
	</div>
	<div data-role="content" data-theme="e">
      <?php echo validation_errors(); ?>
      <?php echo form_open( 'shared/savePersonalInfo' ); ?>
    	<div data-role="fieldcontain">
        	<fieldset data-role="controlgroup" data-mini="true">
            <label for="textinput8">
                First Name
            </label>
            <input name="f_name" id="textinput8" type="text" value="<?php echo set_value('f_name'); ?>">
        </fieldset>
    	</div>
    	<div data-role="fieldcontain">
        	<fieldset data-role="controlgroup">
            <label for="textinput21">
                Last Name
            </label>
            <input name="l_name" id="textinput21" type="text" value="<?php echo set_value('l_name'); ?>">
       	 </fieldset>
    	</div>
    	<div data-role="fieldcontain">
        	<fieldset data-role="controlgroup">
            <label for="textinput11">
                Address (Street City, State Zip)
            </label>
            <input name="address" id="textinput11" type="text" value="<?php echo set_value('address'); ?>">
        	</fieldset>
    	</div>
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
            <label for="textinput11">
                Telephone
            </label>
            <input name="phone" id="textinput11" type="text" value="<?php echo set_value('phone'); ?>">
            </fieldset>
        </div>
	   <input type="submit" value="Save">
    </form>
  </div>