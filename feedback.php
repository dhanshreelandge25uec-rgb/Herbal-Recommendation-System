<?php
include 'db.php';

$message="";

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $feedback=$_POST['message'];

    mysqli_query($conn,
    "INSERT INTO feedback(user_name,message)
    VALUES('$name','$feedback')");

    $message="Thank You! Your feedback has been submitted.";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Give Feedback</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f4f4;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
width:500px;
background:white;
border-radius:10px;
overflow:hidden;
box-shadow:0 0 15px rgba(0,0,0,0.1);
}

.header{
background:#146b1e;
color:white;
padding:15px;
text-align:center;
font-size:22px;
font-weight:bold;
}

.content{
padding:25px;
}

label{
font-weight:bold;
display:block;
margin-bottom:5px;
}

input,
textarea{
width:100%;
padding:12px;
border:1px solid #ccc;
border-radius:5px;
margin-bottom:15px;
}

textarea{
height:120px;
resize:none;
}

.btn{
width:100%;
background:#146b1e;
color:white;
border:none;
padding:12px;
border-radius:5px;
cursor:pointer;
font-size:16px;
}

.btn:hover{
background:#0d4d15;
}

.success{
background:#e8f5e9;
padding:15px;
text-align:center;
border-radius:5px;
margin-top:15px;
color:#146b1e;
font-weight:bold;
}

.feedback-icon{
text-align:center;
margin-bottom:15px;
}

.feedback-icon img{
width:90px;
}

</style>
</head>

<body>

<div class="container">

<div class="header">
Give Feedback
</div>

<div class="content">

<div class="feedback-icon">
<img src="images/feedback.png" alt="Feedback">
</div>

<form method="POST">

<label>Your Name</label>
<input type="text"
name="name"
placeholder="Enter your name"
required>

<label>Your Feedback</label>
<textarea
name="message"
placeholder="Write your feedback here..."
required></textarea>

<button type="submit"
name="submit"
class="btn">
Submit Feedback
</button>

</form>

<?php
if($message!="")
{
?>
<div class="success">
<?php echo $message; ?>
<br><br>
🌿 Thank You
</div>
<?php
}
?>

</div>
</div>

</body>
</html>