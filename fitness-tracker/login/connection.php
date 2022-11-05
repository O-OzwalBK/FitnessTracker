<?php

$servername = "localhost";
$email = "root";
$password = "";
$database = "fitgeeks";

// Create a connection
$conn = mysqli_connect(
    $servername,
    $email,
    $password,
    $database
);

// Check that our Database is
// connected properly or not.

if ($conn) {
    echo "";
} else {
    die("Error" . mysqli_connect_error());
}
