<?php include_once '../firstPhpProject/Php/server.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/myStyle.css">
</head>

<body>

    <form action="../firstPhpProject/Php/login.php" method="POST">
        <?php
        if (isset($_GET['FirstName'])) {
            $FirstName = $_GET['FirstName'];
            echo "<input type='text' name='firstName' placeholder='First Name' value='$FirstName'>";
        } else
            echo "<input type='text' name='firstName' placeholder='First Name'>";

        echo "<br>";

        if (isset($_GET['LastName'])) {
            $LastName = $_GET['LastName'];
            echo "<input type='text' name='lastName' placeholder='Last Name' value='$LastName'>";
        } else
            echo "<input type='text' name='lastName' placeholder='Last Name'>";
        ?>

        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>

    <?php

    if (!isset($_GET['signup']))
        exit();
    else {
        $signupCheck = $_GET['signup'];

        if ($signupCheck === 'empty')
            echo "empty";
        else if ($signupCheck === 'invalidEmail')
            echo "invalidEmail";
    }

    ?>
    <?php include '../firstPhpProject/Php/myPhp.php'; ?>

</body>

</html>