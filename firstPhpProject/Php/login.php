
<?php


if (isset($_POST['submit'])) {

    include_once './server.php';
    $FirstName = mysqli_real_escape_string($conncation, $_POST['firstName']);
    $LastName = mysqli_real_escape_string($conncation, $_POST['lastName']);
    $Email = mysqli_real_escape_string($conncation, $_POST['email']);

    if (empty($FirstName) || empty($LastName) || empty($Email)) {
        header('Location: ../index.php?signup=empty');
    } else {

        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            echo  "$FirstName";
            header("Location: ../index.php?signup=invalidEmail&FirstName=$FirstName&LastName=$LastName");
        } else {
            // post data from DB 
            $sql = "INSERT INTO Users (FirstName, LastName, Email) VALUES (?, ?, ?);";
            $stmt = mysqli_stmt_init($conncation);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL failed";
            } else {
                echo "SQL work";
                mysqli_stmt_bind_param($stmt, "sss", $FirstName, $LastName, $Email);
                mysqli_stmt_execute($stmt);
                echo "SQL work2";
                header('Location: ../index.php?signup=success');
            }
        }
    }
} else
    header('Location: ../index.php?signup=error');
