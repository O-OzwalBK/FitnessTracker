<?php

session_start();

include "../login/connection.php";
if (!isset($_SESSION['email'])) {
    header("location: https://localhost/fitness-tracker/login/login-user.php");
}
$login_email = $_SESSION['email'];
// print($login_email);
$day = $_GET['day'];

$sql = "select * from routine where days like '%$day%' and email = '$login_email'";

$result = mysqli_query($conn, $sql) or die("Query Failed");

if (mysqli_num_rows($result) == 0) {
    die("No any routine for $day");
}

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

    <div class="buttons">
        <button onclick="my_exercise('sunday')">Sunday </button>
        <button onclick="my_exercise('monday')">Monday</button>
        <button onclick="my_exercise('tuesday')">Tuesday</button>
        <button onclick="my_exercise('wednesday')">Wednesday</button>
        <button onclick="my_exercise('thursday')">Thursday</button>
        <button onclick="my_exercise('friday')">Friday</button>
        <button onclick="my_exercise('saturday')">Saturday</button>
        <button class="show-all" onclick="show_all()">Show all</button>
    </div>


    <div class="container">
        <table>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Type</th>
                <?php

                while ($rows = mysqli_fetch_assoc($result)) {


                ?>
            <tr>
                <td><?php print($sn) ?></td>
                <td><?php print($rows['name']) ?></td>
                <td><?php print($rows['type']) ?></td>

            </tr>

        <?php $sn++;
                } ?>
        </table>
    </div>
    <script>
        function my_exercise(day) {
            location.href = `https://localhost/fitness-tracker/php/routine_day_wise.php?day=${day}`;
        }

        function show_all() {
            location.href = `https://localhost/fitness-tracker/php/my-routine.php`;
        }
    </script>

</body>

</html>