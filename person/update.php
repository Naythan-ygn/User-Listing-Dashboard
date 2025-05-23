<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-12 23:52:34
 * @ Description:
 */

include '../config/connection.php';

$id = $_REQUEST['id'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$dob = $_REQUEST['dob'];
$sql = "UPDATE Persons SET first_name = '". $first_name."', last_name='". $last_name."', dob = '". $dob."' WHERE id=" .$id;

if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
    header('Location: listing.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>