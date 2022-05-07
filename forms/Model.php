<?php

class Model extends Database {

  // Escape inputs for security
  $name = mysqli_real_escape_string($conn, $_REQUEST["name"]);
  $email = mysqli_real_escape_string($conn, $_REQUEST["email"]);
  $msg = mysqli_real_escape_string($conn, $_REQUEST["msg"]);

  
  // Insert form data into database table
  $sql = "INSERT INTO users (name, email, msg) VALUES (name, email, msg)";

  // Check if insert was successful
  if (mysqli_query($conn, $sql)) {
    echo "Record added.";
  } else {
    echo "Error: could not add record.";
  }

  // Disconnect
  mysqli_close($conn);
}