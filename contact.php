<?php
include 'db.php';

$msg = "";



if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);

    $insert = mysqli_query($conn,
    "INSERT INTO contact(name,email,subject,message)
    VALUES('$name','$email','$subject','$message')");

    if($insert)
    {
        $msg = "✅ Message Sent Successfully!";
    }
    else
    {
        $msg = "❌ Something went wrong!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - Aurevita</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4fff4;
}

/* Header */
header{
    background:#0b7a1b;
    padding:20px 8%;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:white;
    font-size:30px;
    font-weight:bold;
}

nav a{
    color:white;
    text-decoration:none;
    margin-left:20px;
    font-size:17px;
}

nav a:hover{
    color:#d4ffd4;
}

/* Contact Section */
.contact-section{
    min-height:85vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:40px;
}

.container{
    width:1000px;
    background:white;
    display:flex;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

/* Left Side */
.left{
    width:40%;
    background:#0b7a1b;
    color:white;
    padding:40px;
}

.left h2{
    margin-bottom:20px;
    font-size:28px;
}

.left p{
    margin:15px 0;
    line-height:1.8;
}

/* Right Side */
.right{
    width:60%;
    padding:40px;
}

.right h2{
    color:#0b7a1b;
    margin-bottom:25px;
}

.input-box{
    margin-bottom:18px;
}

.input-box input,
.input-box textarea{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
}

.input-box textarea{
    height:130px;
    resize:none;
}

button{
    background:#0b7a1b;
    color:white;
    border:none;
    padding:12px 25px;
    border-radius:8px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    background:#095f15;
}

.success{
    background:#d4edda;
    color:#155724;
    padding:12px;
    border-radius:5px;
    margin-bottom:15px;
}

footer{
    background:#0b7a1b;
    color:white;
    text-align:center;
    padding:15px;
}

@media(max-width:768px){

.container{
    flex-direction:column;
}

.left,
.right{
    width:100%;
}

header{
    flex-direction:column;
}

nav{
    margin-top:10px;
}
}

</style>

</head>
<body>

<header>
    <div class="logo">🌿 Aurevita</div>

    <nav>
        <a href="Home.php">Home</a>
        <a href="products.php">Products</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section class="contact-section">

<div class="container">

    <div class="left">
        <h2>Contact Information</h2>

        <p>📍 Pune, Maharashtra, India</p>
        <p>📞 +91 9309492298</p>
        <p>✉ support@aurevita.com</p>

        <p>
            We'd love to hear from you. Send us your
            questions, feedback, or suggestions anytime.
        </p>
    </div>

    <div class="right">

        <h2>Send Us A Message</h2>

        <?php
        if($msg!="")
        {
            echo "<div class='success'>$msg</div>";
        }
        ?>

        <form method="POST">

            <div class="input-box">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Your Email" required>
            </div>

            <div class="input-box">
                <input type="text" name="subject" placeholder="Subject" required>
            </div>

            <div class="input-box">
                <textarea name="message" placeholder="Your Message" required></textarea>
            </div>

            <button type="submit" name="submit">
                Send Message
            </button>

        </form>

    </div>

</div>

</section>

<footer>
    © 2026 Aurevita | All Rights Reserved
</footer>

</body>
</html>