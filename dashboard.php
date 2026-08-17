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
    <div class="card">
        <h2>Dashboard</h2>

        <p>Selamat datang</p>

        <p><?= htmlspecialchars($user['email']) ?></p>

        <a href="logout.php" class="button">
            Logout
        </a>
    </div>
</body>

<style>

body{
    font-family:Arial;
    background:#111827;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card{
    background:white;
    width:350px;
    padding:30px;
    border-radius:12px;
    box-shadow:0 0 15px rgba(0,0,0,.2);
}

input{
    width:100%;
    padding:12px;
    margin:8px 0;
    border:1px solid #ccc;
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    background:#3b82f6;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#2563eb;
}

</style>
</html>