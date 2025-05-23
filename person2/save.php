<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-17 18:45:35
 * @ Description:
 */

session_start();

include '../config/connection.php';

include '../config/utility.php';
$base_url = getBaseUrl();
$upload_path =  "../uploads";

// Receiving image
$cover = $_FILES['profile_image']['name'];
$profile_image = "";

// Checking with image upload or not
if (isset($cover) && $cover != "") {
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

$created_by = $_SESSION['user_id'];

$edu_finished_high_school = isset($_REQUEST['edu_finished_high_school']) ? 1 : 0;
$edu_got_degree = isset($_REQUEST['edu_got_degree']) ? 1 : 0;
$edu_got_master = isset($_REQUEST['edu_got_master']) ? 1 : 0;

$sql = "INSERT INTO Persons (title, first_name, last_name, dob, email, profile_image, phone, martial_status, gender, address, postal_code, country, status, remark, created_by, edu_finished_high_school, edu_got_degree, edu_got_master)
VALUES ( $title, '$first_name' , '$last_name' ,'$dob', '$email', '$profile_image', '$phone', $martial_status, $gender, '$address', '$postal_code', '$country', $status, '$remark', $created_by, $edu_finished_high_school, $edu_got_degree, $edu_got_master)";

if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
}
else{
    
    // echo "1 record added";
    header('Location: listing.php'); 
}
mysqli_close($conn);
?>