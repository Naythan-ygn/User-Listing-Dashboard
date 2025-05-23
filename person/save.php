<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-15 01:25:57
 * @ Description:
 */

include '../config/connection.php';

$first_name = $_POST['first_name'];
$last_name = $_REQUEST['last_name'];
$dob = $_REQUEST['dob'];

// $sql = "INSERT INTO Persons (first_name, last_name, dob)
// VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[dob]')";
// Or VALUES ('John', 'Doe', '13-12-2000');";

$sql = "INSERT INTO Persons (first_name, last_name, dob)
VALUES ('$first_name' , '$last_name' ,'$dob')";

if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
}
else{
    // echo "1 record added";
    header('Location: listing.php'); 
}
mysqli_close($conn);
?>