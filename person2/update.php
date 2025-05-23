<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-17 19:36:49
 * @ Description:
 */

session_start();
include '../config/connection.php';
$upload_path =  "../uploads";

// Receiving image
$cover = $_FILES['profile_image']['name'];
$profile_image = "";

$change_iamge = isset($_REQUEST['change_iamge']) ? 1 : 0;

// Checking with image upload or not
if (isset($cover) && $cover != "" && $change_iamge == 1) {
    $tmp = $_FILES['profile_image']['tmp_name'];
    $ext = pathinfo($cover, PATHINFO_EXTENSION);
    $profile_image = uniqid() . "." . $ext;

    if ($cover) {
        move_uploaded_file($tmp, $upload_path . "/$profile_image");
    } else {
        echo "error at image move";
        exit();
    }
}

$id = $_REQUEST['id'];
$title = $_REQUEST['title'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$dob = $_REQUEST['dob'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$martial_status = $_REQUEST['martial_status'];
$gender = $_REQUEST['gender'];

$address = $_REQUEST['address'];
$postal_code = $_REQUEST['postal_code'];
$country = $_REQUEST['country'];
$status = $_REQUEST['status'];
$remark = $_REQUEST['remark'];
$updated_by = $_SESSION['user_id'];

$edu_finished_high_school = isset($_REQUEST['edu_finished_high_school']) ? 1 : 0;
$edu_got_degree = isset($_REQUEST['edu_got_degree']) ? 1 : 0;
$edu_got_master = isset($_REQUEST['edu_got_master']) ? 1 : 0;

$sql = "";

$sql = "UPDATE Persons SET 
    title = '" . $title . "', 
    first_name = '". $first_name."', 
    last_name='". $last_name. "',";
    
if ($change_iamge == 1) {
    $sql .=  " profile_image = '" . $profile_image . "',";
}

 $sql .=   "dob = '". $dob. "',
    email = '" . $email . "',
    phone = '" . $phone . "',
    martial_status = '" . $martial_status . "',
    gender = '" . $gender . "',
    address = '" . $address . "',
    postal_code = '" . $postal_code . "',
    country = '" . $country . "',
    status = '" . $status . "',
    remark = '" . $remark . "',
    updated_by = '" . $updated_by . "',
    edu_finished_high_school = '" . $edu_finished_high_school . "',
    edu_got_degree = '" . $edu_got_degree . "',
    edu_got_master = '" . $edu_got_master .
    "' WHERE id=" .$id;

if (mysqli_query($conn, $sql)) {
    header('Location: listing.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>