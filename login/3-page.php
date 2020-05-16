<?php
// Init + Start session
error_reporting(E_ALL & ~E_NOTICE);
session_start();

// Redirect users to the login page if not signed in
if (!is_array($_SESSION['user'])) {
  header("Location: 1a-login.php");
  die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Login Example
    </title>
    <script src="1b-login.js"></script>
  </head>
  <body>
    <p>
      Successfully Signed In!
    </p>
    <input type="button" value="Logout" onclick="logout()"/>
  </body>
</html>