<?php
include 'db.php';

$msg="";

if(isset($_POST['register']))
{
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
   $password = $_POST['password'];

    $insert=mysqli_query($conn,
    "INSERT INTO users(email,password,name)
    VALUES('$email','$password','$name')");

    if($insert)
    {
        echo "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";
        exit();
    }
    else
    {
        $msg="Registration Failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:linear-gradient(to right,#e8f5e9,#f4fff4);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    width:900px;
    background:white;
    border-radius:20px;
    overflow:hidden;
    display:flex;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
}

.left{
    width:45%;
    background:#dff5df;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    padding:20px;
}

.left img{
    width:280px;
}

.left h2{
    color:#146b1e;
    margin-top:20px;
}

.right{
    width:55%;
    padding:50px;
}

.title{
    text-align:center;
    color:#146b1e;
    margin-bottom:10px;
}

.line{
    width:80px;
    height:4px;
    background:#146b1e;
    margin:auto;
    border-radius:10px;
    margin-bottom:25px;
}

.input-box{
    margin-bottom:18px;
}

.input-box label{
    display:block;
    margin-bottom:6px;
    font-weight:bold;
}

.input-box input{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
}

.input-box input:focus{
    border-color:#146b1e;
    outline:none;
}

.btn{
    width:100%;
    padding:13px;
    background:#146b1e;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
}

.btn:hover{
    background:#0f5417;
}

.message{
    text-align:center;
    color:red;
    margin-bottom:15px;
    font-weight:bold;
}

.login{
    text-align:center;
    margin-top:20px;
}

.login a{
    color:#146b1e;
    text-decoration:none;
    font-weight:bold;
}

</style>

</head>
<body>

<div class="container">

    <div class="left">
        <img src="images/register-herbal.png" alt="Register">
        <h2>Herbal Recommendation System</h2>
    </div>

    <div class="right">

        <h1 class="title">Create Account</h1>
        <div class="line"></div>

        <?php
        if($msg!="")
        {
            echo "<div class='message'>$msg</div>";
        }
        ?>

        <form method="POST">

            <div class="input-box">
                <label>Full Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" name="register" class="btn">
                Register
            </button>

        </form>

        <div class="login">
            Already have an account?
            <a href="login.php">Login</a>
        </div>

    </div>

</div>

</body>
</html>