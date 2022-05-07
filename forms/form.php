<?php

// Define some variables
$name = $email = $msg = "";
$nameErr = $emailErr = $msgErr = "";

// Security function
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Check required fields & run data through function
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_post["name"])) {
    $nameErr = "Please enter your name";
  } else {
    $name = test_input($_POST["name"]);
    // Check for letters and whitespace only
    if (!preg_match("/^[a-zA-Z]*$/", $name)) {
      $nameErr = "Only letters and white space";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Please enter your email";
  } else {
    $email = test_input($_POST["email"]);
    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email";
    }
  }
  if (empty($_POST["msg"])) {
    $msgErr = "Plese send us a message";
  } else {
    $msg = test_input($_POST["msg"]);
  }
}
?>
