<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>

    <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    

  </head>
<div data-role="page" data-theme="e" id="page1" >
      <div data-theme="a" data-role="header">
          <div style=" text-align:center">
              <img style="width: 70px; height: 70px" src="http://assets.codiqa.com/cpeP4jWRgGSUWEmKlXaQ_logo3.jpg">
          </div>
          <h5>
              Login/Register
          </h5>
      </div>
      
      <div data-role="content" style="padding: 15%">
        <?php echo form_open('user/login'); ?>
          <div data-role="fieldcontain">
              <fieldset data-role="controlgroup">
                  <label for="textinput1">
                      Email
                  </label>
                  <input name="email" id="textinput1" type="text">
              </fieldset>
          </div>
          <div data-role="fieldcontain">
              <fieldset data-role="controlgroup">
                  <label for="textinput2">
                      Password
                  </label>
                  <input name="password" id="textinput2" type="password">
              </fieldset>
          </div>
          <input type="submit" value="Sign in">
        </form>
          <div>
              <a href="#page2" data-transition="fade">
                  Forgot your password?
              </a>
          </div>
          <div>
              <a href=<?php echo site_url() . "/user/index/form_registration"?> data-transition="fade">
                  Not a Member? Register here!
              </a>
          </div>
      </div>
  </div>
</body>
</html>