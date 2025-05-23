<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-12 23:51:47
 * @ Description:
 */

include '../config/connection.php';
$user_id = $_REQUEST['id'];

// sql to delete a record
$sql = "DELETE FROM Persons WHERE id=" . $user_id;

if (mysqli_query($conn, $sql)) {
    // echo "Record deleted successfully";
    header('Location: listing.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
