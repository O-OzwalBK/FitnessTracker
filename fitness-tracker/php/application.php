<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("location: https://localhost/fitness-tracker/login/login-user.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css" />
</head>

<body>
    <div class="formContainer">
        <div class="heading">
            <h1>Create Routine</h1>
        </div>
        <form action="routine.php
        " method="post" id="workout-form">

            Enter name for workout
            <br />
            <input type="text" id="workoutName" name="workoutName" required />

            <br />
            <label for="workout-type">Type of workout</label>
            <br />
            <div class="custom-select" style="width: 200px">
                <select name="workout-type" id="workout-type" required>
                    <option value="" disabled selected>--Select workout type--</option>
                    <option value="calisthenics">Calisthenics</option>
                    <option value="weight-lifting">Weight lifting</option>
                    <option value="crossfit">Crossfit</option>
                    <option value="power-lifting">Power lifting</option>
                </select>
            </div>
            <br />
            <div class="activedays">
                <label for="selectdays">Select active days</label>
                <br>
                <div class="days">
                    <div> <input type="checkbox" name="selectdays[]" value="sunday">
                        <label for="">Sunday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="selectdays[]" value="monday">
                        <label for="">Monday</label>
                    </div>
                    <div>

                        <input type="checkbox" name="selectdays[]" value="tuesday">
                        <label for="">Tuesday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="selectdays[]" value="wednesday">
                        <label for="">Wednesday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="selectdays[]" value="thursday">
                        <label for="">Thursday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="selectdays[]" value="friday">
                        <label for="">Friday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="selectdays[]" value="saturday">
                        <label for="">Saturday</label>
                    </div>
                </div>
            </div>

            <br>
            <label for="description">Optional workout description</label>
            <br />
            <!-- <input type="text" name="description" /> -->
            <textarea name="workout-description" id="description" form="workout-form" cols="40" rows="5" maxlength="1000" placeholder="Workout description to help you remember your workout plan"></textarea>

            <div>
                <br>
                <button type="submit">Save</button>
            </div>

        </form>

        <!-- <div class="bottom-btns">
            <button href="" class="profile-btn">Profile</button>
            <button href="" class="add-btn">Add</button>
            <button href="php\my-routine.php" class="summary-btn">Summary</button>
        </div> -->

    </div>

    <script>
        function goto_myroutine() {
            location.href = `https://localhost/fitness-tracker/php/my-routine.php`;
        }
    </script>
</body>

</html>