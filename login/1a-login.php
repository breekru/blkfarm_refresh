<?php
// Init + Start session
error_reporting(E_ALL & ~E_NOTICE);
session_start();

// Redirect users to the main page if already signed in
if (is_array($_SESSION['user'])) {
  header("Location: 3-page.php");
  die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Login Page Example
    </title>
    <script src="1b-login.js"></script>
    <link href="1c-login.css" rel="stylesheet">
  </head>
  <body>
    <form id="login-form" onsubmit="return login();">
      <h1>
        PLEASE SIGN IN
      </h1>
      <label for="login_email">Email</label>
      <input type="email" id="login-email" required value="john@doe.com"/>
      <label for="login_password">Password</label>
      <input type="password" id="login-password" required value="123456"/>
      <input type="submit" value="Sign In"/>
    </form>
  </body>
</html>