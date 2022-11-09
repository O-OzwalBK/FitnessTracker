<?php
session_start();
require_once '../login/connection.php';
if (!isset($_SESSION['email'])) {
    header("location: https://localhost/fitness-tracker/login/login-user.php");
} else {
    $login_email = $_SESSION['email'];
}

// if (isset($_POST['email'])) {
//     $reps = $_POST['repetition'];
//     $weight = $_POST['weight_used'];
//     echo $reps . " " . $weight;
//     die();
//     // $day = $_GET['day'];
//     // email = '$login_email';

//     // <?php while ($rows = mysqli_fetch_assoc($result)) {
//     $query = "INSERT INTO `sets` (`reps`, `weight_used`,exercise_id) VALUES ($reps, $weight, 12)";
//     mysqli_query($conn, $query);
//     // $result = mysqli_query($conn, $retrieve_data) or die("Query failed!");
//     $sql = "INSERT INTO `workout` (`workout_id`, `workout_name`) VALUES (NULL, 'calisthenics',);";
//     mysqli_query($conn, $sql);
// }
if (isset($_POST['save_btn'])) {
    $reps = $_POST['repetition'];
    $weight = $_POST['weight_used'];

    // $day = $_GET['day'];
    // email = '$login_email';

    // <?php while ($rows = mysqli_fetch_assoc($result)) {
    $query = "INSERT INTO `sets` (`reps`, `weight_used`,exercise_id) VALUES ($reps, $weight, 12)";
    mysqli_query($conn, $query);
    // $result = mysqli_query($conn, $retrieve_data) or die("Query failed!");
    // $sql = "INSERT INTO `workout` (`workout_name`) VALUES ('calisthenics',);";
    // mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <style>
        input[type="number"]::placeholder {
            text-align: center;
        }

        label {
            display: block;
            position: relative;
        }

        label span {
            font-weight: bold;
            position: absolute;
            left: 3px;
        }

        label input,
        label textarea,
        label select {
            margin-left: 120px;
        }

        .entry-container {
            display: flexbox;
            flex-direction: column;
            justify-content: center;

        }

        li {
            list-style-type: none;
            padding: 10px;
            margin: 10px;
        }

        #exercise-heading {
            justify-content: center;
        }

        .container .btn-group,
        button {
            padding: 5px;
        }
    </style>

    <!-- navbar heading start -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Enter record</span>
            <div class="dropdown-center">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Exercises
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar heading end -->

    <!-- exercise name -->

    <nav class="navbar bg-light" id="exercise-heading">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Push up</span>
        </div>
    </nav>

    <!-- <div class="entry-container"> -->
    <!-- <label><span>Repetition</span> <input type="number" name="repetition[]" step="1" placeholder="reps" min="0" max="10000" /></label>
        <label><span>Weight used in kg</span> <input type="number" name="weight_used[]" step="0.01" min="0" max="10000" placeholder="weight" /></label> -->
    <form action="log_exercise.php" method="post">
        <div class="exercise-parameters">

            <?php
            // $reps = $_POST['repetition'];
            //$weight = $_POST['weight_used'];
            ?>
            <ul>
                <li>Repetition
                    <span>
                        <input type="number" name="repetition" step="1" placeholder="reps" min="0" max="10000">
                    </span>
                </li>
                <li>Weight Used (KG)
                    <input type="number" name="weight_used" step="0.01" min="0" max="10000" placeholder="weight">
                </li>
            </ul>
        </div>
        <div class="container" style="display: block; width:max-content; height:30vh">

        </div>
        <div class="container">
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary btn-lg">Prev</button>
                <button type="submit" name="save_btn" class="btn btn-outline-primary btn-lg">Save</button>
                <button type="button" class="btn btn-outline-primary btn-lg">Next</button>
            </div>
        </div>

        <!-- </div> -->

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>