<?php

session_start();
include "../login/connection.php";
if (!isset($_SESSION['email'])) {
    header("location: https://localhost/fitness-tracker/login/login-user.php");
} else {
    $login_email = $_SESSION['email'];
}

// $day = $_GET['day'];
// email = '$login_email';

// <?php while ($rows = mysqli_fetch_assoc($result)) {

// $result = mysqli_query($conn, $retrieve_data) or die("Query failed!");
$sql = "INSERT INTO `workout` (`workout_id`, `workout_name`) VALUES (NULL, 'calisthenics',);";
mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>

    </div>
</body>

</html>