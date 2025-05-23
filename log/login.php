<?php

session_start();
$email = $_REQUEST['email'] ?? '';
$pass = $_REQUEST['pass'] ?? '';

include '../config/connection.php';

$stmt = $conn->prepare("SELECT id, email, password FROM persons WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    // Verify the password
    if ($pass === $user['password']) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: ../index.php");
        exit;
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "No user found with that email.";
}

$stmt->close();
$conn->close();




?>