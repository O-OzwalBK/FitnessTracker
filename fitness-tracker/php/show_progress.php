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
$total_exercises_sunday = "select id from routine where days like '%sunday%' ";
$result_sunday = mysqli_query($conn, $total_exercises_sunday) or die("Query failed!");
$total_sunday = mysqli_num_rows($result_sunday);

$total_exercises_monday = "select id from routine where days like '%monday%' ";
$result_monday = mysqli_query($conn, $total_exercises_monday) or die("Query failed!");
$total_monday = mysqli_num_rows($result_monday);

$total_exercises_tuesday = "select id from routine where days like '%tuesday%' ";
$result_tuesday = mysqli_query($conn, $total_exercises_tuesday) or die("Query failed!");
$total_tuesday = mysqli_num_rows($result_tuesday);

$total_exercises_wednesday = "select id from routine where days like '%wednesday%' ";
$result_wednesday = mysqli_query($conn, $total_exercises_wednesday) or die("Query failed!");
$total_wednesday = mysqli_num_rows($result_wednesday);

$total_exercises_thursday = "select id from routine where days like '%thursday%' ";
$result_thursday = mysqli_query($conn, $total_exercises_thursday) or die("Query failed!");
$total_thursday = mysqli_num_rows($result_thursday);

$total_exercises_friday = "select id from routine where days like '%friday%' ";
$result_friday = mysqli_query($conn, $total_exercises_friday) or die("Query failed!");
$total_friday = mysqli_num_rows($result_friday);

$total_exercises_saturday = "select id from routine where days like '%saturday%' ";
$result_saturday = mysqli_query($conn, $total_exercises_saturday) or die("Query failed!");
$total_saturday = mysqli_num_rows($result_saturday);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress</title>

    <style>
        .container {
            width: 100%;
            height: 300px;
            display: flex;
        }

        .container>div {
            margin: 10px;
        }

        .container>div>div {
            width: 150px;
            height: 150px;
            border: 3px solid red;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .weekly {
            width: 100%;
            display: flex;
            justify-content: center;

        }

        .weekly div {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 3px solid red;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>


    <h3>Day Wise Progress</h3>
    <div class="container">
        <div class="sunday">
            <div>
                <?php print($total_sunday); ?>
            </div>
        </div>
        <div class="monday">
            <div>
                <?php print($total_monday); ?>

            </div>
        </div>
        <div class="tuesday">
            <div>
                <?php print($total_tuesday); ?>

            </div>
        </div>
        <div class="wednesday">
            <div>
                <?php print($total_wednesday); ?>

            </div>
        </div>
        <div class="thursday">
            <div>
                <?php print($total_thursday); ?>

            </div>
        </div>
        <div class="friday">
            <div>
                <?php print($total_friday); ?>

            </div>
        </div>
        <div class="saturday">
            <div>
                <?php print($total_saturday); ?>

            </div>
        </div>

    </div>

    <h3>Weekly Progress</h3>

    <div class="weekly">
        <div>
            <?php
            print($total_sunday + $total_monday + $total_tuesday + $total_wednesday + $total_thursday + $total_friday + $total_saturday)
            ?>
        </div>
    </div>
    <div class="home">
        <button onclick="return_to_home()">Home</button>
    </div>
    <script>
        function return_to_home() {
            location.href = `https://localhost/fitness-tracker/index.php`;
        }
    </script>
</body>

</html>