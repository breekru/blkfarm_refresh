<?php
// Init + Start session
error_reporting(E_ALL & ~E_NOTICE);
session_start();

// Handle AJAX request
switch ($_POST['req']) {
  // Invalid request
  default:
    echo "ERR";
    break;

  // Sign In
  case "in":
    // Already signed in
    if (is_array($_SESSION['user'])) {
      die("OK");
    }

    // Email => Password
    // ADD MORE OF YOUR OWN HERE!
    $users = [
      "breekru@gmail.com" => "abc123",
      "blkfarm@gmail.com" => "test1234"
    ];

    // Check given email & password
    if (isset($users[$_POST['email']]) && $_POST['password'] == $users[$_POST['email']]) {
      $_SESSION['user'] = [
        "email" => $_POST['email']
      ];
      echo "OK";
    } else {
      echo "ERR";
    }
    break;

  // Sign out
  case "out":
    unset ($_SESSION['user']);
    echo "OK";
    break;
}
?>