<?php
require_once('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();
    
    // Verify password
    if (password_verify($password, $hashed_password)) {
        // Login successful, set session variables and redirect to home page
        session_start();
        $_SESSION["user_id"] = $id;
        header("Location: index.php");
        exit();
    } else {
        // Invalid credentials, redirect to login page with an error message
        header("Location: login.php?error=InvalidCredentials");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
