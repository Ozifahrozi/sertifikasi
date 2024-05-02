<?php
session_start();

$valid_username = "admin";
$valid_password = "admin";

$username = $_POST['username'];
$password = $_POST['password'];


if ($username === $valid_username && $password === $valid_password) {
    header("Location: admin/index-admin.php");
    exit();
} else {
    $_SESSION['login_error'] = 'Username atau password salah.';
    header("Location: login.php");
    exit();
}
?>
