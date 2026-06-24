<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Herbal Recommendation System</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:#f7faf7;
}

/* Header */

header{
background:linear-gradient(to right,#0f5f18,#1b7d2b);
padding:15px 8%;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.logo{
color:white;
font-size:28px;
font-weight:bold;
}

nav a{
text-decoration:none;
color:white;
margin-left:25px;
font-size:16px;
font-weight:500;
transition:0.3s;
}

nav a:hover{
color:#d4ffd4;
}

/* Hero Section */

.hero{
display:flex;
justify-content:space-between;
align-items:center;
padding:70px 8%;
background:#f8fff8;
}

.left{
width:50%;
}

.left h1{
font-size:55px;
color:#146b1e;
line-height:1.2;
margin-bottom:20px;
}

.left p{
font-size:20px;
color:#555;
line-height:30px;
margin-bottom:30px;
}

.btn{
display:inline-block;
background:#146b1e;
color:white;
padding:14px 30px;
text-decoration:none;
border-radius:30px;
font-size:18px;
font-weight:bold;
}

.btn:hover{
background:#0c4c13;
}

.right{
width:45%;
text-align:center;
}

.right img{
width:100%;
max-width:550px;
}

/* Products Section */

.products{
padding:70px 8%;
}

.products h2{
text-align:center;
font-size:40px;
color:#146b1e;
margin-bottom:50px;
}

.cards{
display:flex;
justify-content:center;
gap:30px;
flex-wrap:wrap;
}

.card{
width:320px;
background:white;
border-radius:15px;
overflow:hidden;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
transition:0.4s;
padding-bottom:20px;
}

.card:hover{
transform:translateY(-10px);
}

.card img{
width:100%;
height:220px;
object-fit:cover;
background:#eef8ee;
}

.card h3{
text-align:center;
margin-top:15px;
color:#146b1e;
font-size:24px;
}

.card p{
padding:15px;
text-align:center;
line-height:25px;
color:#666;
}

/* Footer */

footer{
background:#146b1e;
color:white;
text-align:center;
padding:15px;
margin-top:40px;
}

/* Responsive */

@media(max-width:900px){

header{
flex-direction:column;
}

nav{
margin-top:15px;
}

.hero{
flex-direction:column;
text-align:center;
}

.left,
.right{
width:100%;
}

.right{
margin-top:30px;
}

.left h1{
font-size:40px;
}

.cards{
flex-direction:column;
align-items:center;
}

}

</style>

</head>

<body>

<header>

<div class="logo">
🌿 Herbal Recommendation System
</div>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="about.php">About Us</a>

<a href="contact.php">Contact</a>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
</nav>

</header>

<section class="hero">

<div class="left">

<h1>Discover The Power Of Herbal Nutrition</h1>

<p>
Get personalized herbal product recommendations based on your health concerns naturally.
</p>

<a href="register.php" class="btn">
Get Started
</a>

</div>

<div class="right">
<img src="images/hero.png" alt="Herbal Products">
</div>

</section>

<section class="products">

<h2>Our Herbal Products</h2>

<div class="cards">

<?php

$result=mysqli_query($conn,"SELECT * FROM products");

while($row=mysqli_fetch_assoc($result))
{
?>

<div class="card">

<img src="images/<?php echo $row['image']; ?>" alt="Product">

<h3><?php echo $row['name']; ?></h3>

<p><?php echo $row['description']; ?></p>

</div>

<?php
}
?>

</div>

</section>

<footer>
© 2026 Herbal Recommendation System
</footer>

</body>
</html>