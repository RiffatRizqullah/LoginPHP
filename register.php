<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>

<style>

body{
    background:#111827;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:Arial;
}

.card{
    width:350px;
    background:white;
    padding:30px;
    border-radius:10px;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ddd;
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    background:#22c55e;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

a{
    display:block;
    margin-top:15px;
    text-align:center;
}

</style>

</head>
<body>

<div class="card">

<h2>Register</h2>

<form action="api/register.php" method="POST">

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

<button>
Create Account
</button>

</form>

<a href="index.php">
Sudah punya akun? Login
</a>

</div>

</body>
</html>