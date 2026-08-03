<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>

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

</head>
<body>

<div class="card">

<h2>Login</h2>

<form action="api/login.php" method="POST">

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button type="submit">
Login
</button>

</form>


<a href="register.php">
Belum punya akun? Daftar
</a>

</div>

</body>
</html>