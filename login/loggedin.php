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
	<title>You have been logged in</title>
	
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
          <li><a href="http://blkfarm.kindredsistersok.com/index.html">Home</a></li>
          <li><a href="http://blkfarm.kindredsistersok.com/about.html">About</a></li>
          <li><a href="http://blkfarm.kindredsistersok.com/blog.html">Blog</a></li>
          <li><a href="http://blkfarm.kindredsistersok.com/contact.html">Contact</a></li>
          <li><a href="http://blkfarm.kindredsistersok.com/login/1a-login.php">Admin Login</a></li>
        </ul>
      </nav>
    </div>
  </header>
<!--Nav Bar End-->
  <header class="secure">
    <div class="container">

     <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Sheep</a></li>
          <li><a href="#">Rabbits</a></li>
          <li><a href="#">Chickens</a></li>
          <li><a href="#">Turkeys</a></li>
          <li><a href="#">Hogs</a></li>
          <li><a href="http://blkfarm.kindredsistersok.com/index.html" onclick="return logout();">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
	<h1>you have been logged in</h1>


<input type="button" value="Logout" onclick="logout()"/>
</body>
</html>


