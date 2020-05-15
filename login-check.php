<?php
// VALIDATE USER AGAINST DATABASE
$pass = validateUser($_POST['email'], $_POST['password']);

// Assuming that validateUser() returns an array of user data on valid
// AND returns false on failure to validate

$pass = is_array($pass);
if ($pass) {
  // START SESSION ON SUCCESSFUL VALIDATION
  session_start();
  $_SESSION['user'] = $pass;
} 

// JSON RESPONSE
echo json_encode([
  "status" => $pass,
  "message" => $pass ? "OK" : "Invalid email/password"
]);
?>