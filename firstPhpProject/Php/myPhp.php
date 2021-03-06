<?php

// if (isset($_GET['person'])) {

//     $name = $_GET['person'];
//     echo 'First php code ';
//     print  $name . ' Tiram';
//     echo str_word_count($name);
// }

// $list = array("My", "name", "is", "methos");
// print $list[3];


// get data from DB
// $selectAll = "SELECT * FROM Users;";
// $result = mysqli_query($conncation, $selectAll);
// $resultCheck = mysqli_num_rows($result);

// if ($resultCheck > 0) {
//     while($row = mysqli_fetch_assoc($result)){
//         echo $row['FirstName'].'</br>';
//     }
// }

// get data from DB
// $sql = "SELECT * FROM Users WHERE FirstName=?";
// $dataToLoad = 'Lichay';
// $stmt = mysqli_stmt_init($conncation);

// if (!mysqli_stmt_prepare($stmt, $sql)) {
//     echo "SQL failed";
// } else {
//     mysqli_stmt_bind_param($stmt, "s", $dataToLoad);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo $row['FirstName'] . '</br>';
//     }
// }

$data['idx']=234;
$data['id']='xx';
echo $data['id'];