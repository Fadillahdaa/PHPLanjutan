<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login2.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $username; ?>!</h2>
    <p>Anda telah berhasil login.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
