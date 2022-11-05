
<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("location: https://localhost/fitness-tracker/login/login-user.php");
}

include "../login/connection.php";

$name = $_POST['workoutName'];
$type = $_POST['workout-type'];
$days = $_POST['selectdays'];
$all_days = "";
foreach ($days as $i) {
    $all_days = $all_days . $i . " ";
}
// print($all_days);


// print_r($days);
$description = $_POST['workout-description'];

$login_email = $_SESSION['email'];


$sql = "insert into routine(name, type,description, email, days) values('$name', '$type','$description', '$login_email', '$all_days')";
mysqli_query($conn, $sql) or die("Query Failed !");
// $id = mysqli_insert_id($conn);
// // print($id);

// foreach ($days as $i) {

//     $sql_id = "insert into days(email, exercise_id, days) values('$login_email', '$id', '$i')";
//     mysqli_query($conn, $sql_id);
// }


header("location:../index.php");


?>