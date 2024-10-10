<?php
include '../database/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $stmt = $pdo->prepare("SELECT * FROM user WHERE f_name = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Start a session and set user data
        session_start();
        $_SESSION['user'] = $user['id'];
        $_SESSION['name']= $user['f_name'];
        header("Location: ../../index.php");
    } else {
        echo "Invalid login credentials";
    }
}
?>
