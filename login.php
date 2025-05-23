<?php
session_start();
require_once 'classes/Auth.php';

$auth = new Auth();
$user = $auth->login($_POST['username'], $_POST['password']);

if ($user) {
    $_SESSION['user'] = $user;

    if ($user['level'] == 0) {
        header("Location: dashboard/admin.php");
    } else {
        header("Location: dashboard/user.php");
    }
} else {
    $_SESSION['error'] = "Username atau password salah.";
    header("Location: index.php");
}
