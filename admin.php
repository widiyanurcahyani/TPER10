<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['level'] != 0) {
    header("Location: ../index.php");
    exit;
}
echo "<h1>Admin Dashboard</h1>";
echo "<p>Selamat datang, " . $_SESSION['user']['username'] . "</p>";
echo "<a href='../logout.php'>Logout</a>";
?>
