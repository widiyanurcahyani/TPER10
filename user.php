<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['level'] != 1) {
    header("Location: ../index.php");
    exit;
}
echo "<h1>User Dashboard</h1>";
echo "<p>Selamat datang, " . $_SESSION['user']['username'] . "</p>";
echo "<a href='../logout.php'>Logout</a>";
?>
