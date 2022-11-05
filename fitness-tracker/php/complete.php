

<?php

session_start();
include "../login/connection.php";
$email = $_SESSION['email'];

$id = $_GET['id'];
// print($id);
$sql = "insert into complete(exercise_id, email) values('$id', '$email')";
$result = mysqli_query($conn, $sql) or die("Query Failed");
header("location: https://localhost/fitness-tracker/php/my-routine.php");



?>