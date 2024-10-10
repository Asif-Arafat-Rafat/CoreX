<?php
include '../database/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $stmt = $pdo->prepare("INSERT INTO user (f_name, email, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$name, $email, $hashed_password])) {
        header('Location: ./done.php');

    } else {
        echo "Error during registration";
    }
}
?>
