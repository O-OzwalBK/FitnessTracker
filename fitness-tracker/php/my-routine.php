<?php

session_start();

include "../login/connection.php";
if (!isset($_SESSION['email'])) {
    header("location: https://localhost/fitness-tracker/login/login-user.php");
}
$login_email = $_SESSION['email'];
// print($login_email);

$sql = "select * from routine where email = '$login_email'";
$result = mysqli_query($conn, $sql) or die("Query Failed");

// $sql_days = "select * from days where email = '$login_email'";
// $result = mysqli_query($conn, $sql_days);

$sn = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Routine</title>

    <style>
        table {
            width: 50%;
            border: 1px solid;
            background-color: grey;
        }

        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        th {
            text-align: left;
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .buttons {
            display: flex;
            flex-direction: column;
        }

        .buttons button {
            width: 150px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="addworkout">
        <button onclick="return_to_routine()">Routine</button>
        <button onclick="return_to_progress()">Progress</button>
    </div>
    <div class="buttons">
        <button onclick="my_exercise('sunday')">Sunday </button>
        <button onclick="my_exercise('monday')">Monday</button>
        <button onclick="my_exercise('tuesday')">Tuesday</button>
        <button onclick="my_exercise('wednesday')">Wednesday</button>
        <button onclick="my_exercise('thursday')">Thursday</button>
        <button onclick="my_exercise('friday')">Friday</button>
        <button onclick="my_exercise('saturday')">Saturday</button>
    </div>

    <div class="container">
        <table>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Type</th>
                <th>Days</th>
            </tr>
            <?php

            while ($rows = mysqli_fetch_assoc($result)) {

            ?>
                <tr>
                    <td><?php print($sn) ?></td>
                    <td><?php print($rows['name']) ?></td>
                    <td><?php print($rows['type']) ?></td>
                    <td><?php print($rows['days']) ?></td>
                    <td><button onclick="complete(<?php print($rows['id']) ?>)">Complete</button></td>
                    <td><button onclick="not_complete(<?php print($rows['id']) ?>)">Not Complete</button></td>
                </tr>

            <?php $sn++;
            } ?>
        </table>
    </div>

    <script>
        function my_exercise(day) {
            location.href = `https://localhost/fitness-tracker/php/routine_day_wise.php?day=${day}`;
        }

        function complete(id) {
            location.href = `https://localhost/fitness-tracker/php/complete.php?id=${id}`;
        }

        function not_complete(id) {
            location.href = `https://localhost/fitness-tracker/php/not-complete.php?id=${id}`;
        }

        function return_to_routine() {
            location.href = `https://localhost/fitness-tracker/php/application.php`;
        }

        function return_to_progress() {
            location.href = `https://localhost/fitness-tracker/php/show_progress.php`;
        }
    </script>
</body>

</html>