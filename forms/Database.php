<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "password00";
$dbname = "";

// Connection to the database
$conn = new mysqli($servername, $username, '', '');

// Check the connection mysqli_connect_error
if ($conn === false) {
  die ("There was an error connecting to the database.");
}