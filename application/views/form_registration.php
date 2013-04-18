<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="HandheldFriendly" content="true"/>
  <title>MyApp-rentice</title>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
  <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
  <link rel="stylesheet" href=<?php echo base_url() . "/overwrite.css"?> />

  <link rel="apple-touch-icon" href="http://myapprenticeapp.com/img/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="http://myapprenticeapp.com/img/apple-touch-icon-ipad.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="http://myapprenticeapp.com/img/apple-touch-icon-iphone.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="http://myapprenticeapp.com/img/apple-touch-icon-ipad2.png" />
  <link rel="apple-touch-startup-image" href="http://myapprenticeapp.com/img/Default.png" />
</head>
<body>
  <div data-role="page" data-theme="e">
      <div data-theme="a" data-role="header" data-position="fixed">
          <div style=" text-align:center">
              <img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
          </div>
          <h3>
              Register
          </h3>
      </div>
      <div data-role="content" style="padding: 30px">
        <?php echo validation_errors(); ?>
        <?php echo form_open('user/register'); ?>
          <div data-role="fieldcontain">
              <fieldset data-role="controlgroup" data-mini="true">
                  <label for="textinput4">
                      Email
                  </label>
                  <input name="email" id="textinput4" placeholder="" value="<?php echo set_value('email'); ?>" type="text">
              </fieldset>
          </div>
          <div data-role="fieldcontain">
              <fieldset data-role="controlgroup" data-mini="true">
                  <label for="textinput5">
                      Password
                  </label>
                  <input name="password" id="textinput5" placeholder="" value="<?php echo set_value('password'); ?>" type="password">
              </fieldset>
          </div>
          <div data-role="fieldcontain">
              <fieldset data-role="controlgroup" data-mini="true">
                  <label for="textinput6">
                      Retype password
                  </label>
                  <input name="passwordconf" id="textinput6" placeholder="" value="<?php echo set_value('passconf'); ?>" type="password">
              </fieldset>
          </div>
          <div data-role="fieldcontain">
              <label for="selectmenu1">
                  Register as<br>
              </label>
              <select name="user_type">
                  <option value="instructor">
                      Instructor
                  </option>
                  <option value="student">
                      Student
                  </option>
              </select>
          </div>
          <input type="submit" value="Submit">
        </form>
      </div>
  </div>
</body>
</html>