<?php

session_start();

if(!isset($_SESSION['access_token'])){
    header("Location:index.php");
    exit;
}

$user=$_SESSION['user'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>

<body>

<h1>Dashboard</h1>

<p>Selamat datang</p>

<p><?= htmlspecialchars($user['email']) ?></p>

<a href="logout.php">
Logout
</a>

</body>
</html>