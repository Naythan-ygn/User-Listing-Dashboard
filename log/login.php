<?php

// session_start();

// $email = trim($_REQUEST['email'] ?? '');
// $pass = $_REQUEST['pass'] ?? '';

// if ($pass !== $user['password']) {
//     header("Location: form.php?error=Invalid email or password");
//     exit;
// }
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     header("Location: form.php?error=Invalid email format");
//     exit;
// }
// if (empty($email) || empty($password)) {
//     header("Location: form.php?error=All fields are required");
//     exit;
// }

// include '../config/connection.php';

// $stmt = $conn->prepare("SELECT id, email, password FROM persons WHERE email = ?");
// $stmt->bind_param("s", $email);
// $stmt->execute();
// $result = $stmt->get_result();

// if ($user = $result->fetch_assoc()) {
//     // Verify the password
//     if ($pass === $user['password']) {
//         $_SESSION['logged_in'] = true;
//         $_SESSION['user_id'] = $user['id'];
//         $_SESSION['email'] = $user['email'];
//         header("Location: ../index.php");
//         exit;
//     } else {
//         header("Location: form.php?error=Incorrect password");
//         exit;
//     }
// } else {
//     header("Location: form.php?error=No user found with this email");
//     exit;
// }


// $stmt->close();
// $conn->close();

session_start();

$email = trim($_REQUEST['email'] ?? '');
$pass = $_REQUEST['pass'] ?? '';

// === Server-side validation ===
if (empty($email) || empty($pass)) {
    header("Location: form.php?error=All fields are required");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: form.php?error=Invalid email format");
    exit;
}

include '../config/connection.php';

// === Query the database ===
$stmt = $conn->prepare("SELECT id, email, password FROM persons WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    // === Secure password verification ===
    if ($pass === $user['password']) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: ../index.php");
        exit;
    } else {
        header("Location: form.php?error=Incorrect password");
        exit;
    }
} else {
    header("Location: form.php?error=No user found with this email");
    exit;
}

$stmt->close();
$conn->close();


?>