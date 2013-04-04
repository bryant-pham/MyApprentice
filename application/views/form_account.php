    <h3>Edit Account Info</h3>
  </div>
  <?php echo validation_errors(); ?>
  <?php echo form_open('shared/saveAccountInfo'); ?>
  <div data-role="content" data-theme="e">
    <div data-role="fieldcontain">
        <fieldset data-role="controlgroup">
            <label for="textinput9">
                Email
            </label>
            <input name="email" id="textinput9" type="text">
        </fieldset>
  	</div>
  	<div data-role="fieldcontain">
      <fieldset data-role="controlgroup">
          <label for="textinput10">
              Password
          </label>
          <input name="password" id="textinput10" type="password">
      </fieldset>
  	</div>
    <input type="submit" value="Save">
  </div>
  </form>
