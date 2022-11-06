<?php

session_start();
include "../login/connection.php";
if (!isset($_SESSION['email'])) {
    header("location: https://localhost/fitness-tracker/login/login-user.php");
} else {
    $login_email = $_SESSION['email'];
}

if (isset($email)) {
    print("Connected.");
}

// $day = $_GET['day'];
// email = '$login_email';
$retrieve_data = "select id from routine where days like '%monday%' ";

$result = mysqli_query($conn, $retrieve_data) or die("Query failed!");

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
        <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td>
                    <?php print("hi"); ?>
                </td>
            </tr>
        <?php } ?>
    </div>
</body>

</html>