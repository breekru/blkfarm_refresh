<?php
// Init + Start session
error_reporting(E_ALL & ~E_NOTICE);
session_start();

// Redirect users to the main page if already signed in
if (is_array($_SESSION['user'])) {
  header("Location: loggedin.php");
  die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Administrative login
    </title>
    <script src="1b-login.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
<!--Nav Bar Starts-->
  <header>
    <div class="container">

      <img src ="img/blkfarm-logo-wide-transparent2.png" alt="logo" class="logo">

      <nav>
        <ul>
          <li><a href="http://blkfarms.com/index.html">Home</a></li>
          <li><a href="http://blkfarms.com/about.html">About</a></li>
          <li><a href="http://blkfarms.com/blog.html">Blog</a></li>
          <li><a href="http://blkfarms.com/contact.html">Contact</a></li>
          <li><a href="http://blkfarms.com/login/1a-login.php">Admin Login</a></li>
        </ul>
      </nav>
    </div>
  </header>
<!--Nav Bar End-->

    <form id="login-form" onsubmit="return login();">
      <h1>
        PLEASE SIGN IN
      </h1>
      <label for="login_email">Email</label>
      <input type="email" id="login-email" required autofocus/>
      <label for="login_password">Password</label>
      <input type="password" id="login-password" required/>
      <input type="submit" value="Sign In"/>
    </form>
  </body>
</html>