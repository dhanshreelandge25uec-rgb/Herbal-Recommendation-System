<?php
session_start();
include 'db.php';

$msg = "";

if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $query = mysqli_query($conn,
    "SELECT * FROM users
    WHERE email='$email'
    AND password='$password'");

    if(mysqli_num_rows($query) == 1)
    {
        $data = mysqli_fetch_assoc($query);

        $_SESSION['user'] = $data['name'];

        header("Location: user_dashboard.php");
        exit();
    }
    else
    {
        $msg = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f4f4;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.login-container{
width:900px;
background:#fff;
display:flex;
border-radius:15px;
overflow:hidden;
box-shadow:0 0 20px rgba(0,0,0,0.1);
}

.left{
width:45%;
background:#f8fff8;
display:flex;
justify-content:center;
align-items:center;
padding:20px;
}

.left img{
width:280px;
}

.right{
width:55%;
padding:50px;
}

.right h2{
text-align:center;
color:#1f6d1f;
margin-bottom:10px;
}

.line{
width:80px;
height:3px;
background:#1f6d1f;
margin:auto;
margin-bottom:25px;
}

.form-group{
margin-bottom:18px;
}

label{
display:block;
margin-bottom:5px;
font-weight:bold;
}

input{
width:100%;
padding:12px;
border:1px solid #ddd;
border-radius:5px;
}

.btn{
width:100%;
padding:12px;
background:#1f6d1f;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

.btn:hover{
background:#145214;
}

.error{
color:red;
text-align:center;
margin-bottom:10px;
}

.register-link{
text-align:center;
margin-top:15px;
}

.register-link a{
color:#1f6d1f;
text-decoration:none;
font-weight:bold;
}

</style>

</head>

<body>

<div class="login-container">

<div class="left">
<img src="images/mortar_bowl.png" alt="Herbal">
</div>

<div class="right">

<h2>Welcome Back</h2>
<div class="line"></div>

<?php
if($msg != "")
{
    echo "<p class='error'>$msg</p>";
}
?>

<form method="POST">

<div class="form-group">
<label>Email</label>
<input type="email"
name="email"
placeholder="Enter your email"
required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password"
name="password"
placeholder="Enter your password"
required>
</div>

<button type="submit" name="login" class="btn">
Login
</button>

</form>

<div class="register-link">
Don't have an account?
<a href="register.php">Register</a>
</div>

</div>

</div>

</body>
</html>