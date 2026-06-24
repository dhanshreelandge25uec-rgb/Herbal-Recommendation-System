<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Herbal Products</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f5f5f5;
}

.header{
background:#146b1e;
color:white;
padding:15px;
text-align:center;
font-size:28px;
font-weight:bold;
}

.container{
width:90%;
margin:30px auto;
}

.title{
text-align:center;
color:#146b1e;
margin-bottom:30px;
}

.products{
display:flex;
justify-content:center;
gap:25px;
flex-wrap:wrap;
}

.card{
width:300px;
background:white;
border-radius:10px;
padding:20px;
text-align:center;
box-shadow:0 0 10px rgba(0,0,0,0.1);
transition:0.3s;
}

.card:hover{
transform:translateY(-5px);
}

.card img{
width:220px;
height:180px;
object-fit:contain;
}

.card h3{
color:#146b1e;
margin:15px 0;
}

.card p{
font-size:14px;
color:#555;
line-height:22px;
margin-bottom:15px;
}

.btn{
background:#146b1e;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:5px;
display:inline-block;
margin:5px;
}

.btn:hover{
background:#0f4d17;
}

.order-btn{
background:#ff9800;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:5px;
display:inline-block;
margin:5px;
}

.order-btn:hover{
background:#e68900;
}

.features{
margin-top:40px;
background:#146b1e;
padding:15px;
display:flex;
justify-content:space-around;
color:white;
font-weight:bold;
}
</style>

</head>

<body>

<div class="header">
Our Herbal Products
</div>

<div class="container">

<h2 class="title">Natural Herbal Powders</h2>

<div class="products">

<!-- Neem -->
<div class="card">
<img src="images/neempowder.png" alt="Neem Powder">
<h3>Neem Powder</h3>
<p>
Helps control blood sugar levels,
supports immunity and improves skin health.
</p>

<a href="product_details.php?id=1" class="btn">
View Details
</a>

<a href="order.php?id=1" class="order-btn">
Order Now
</a>
</div>

<!-- Kadipatta -->
<div class="card">
<img src="images/kadipattapowder.png" alt="Kadipatta Powder">
<h3>Kadipatta Powder</h3>
<p>
Supports hair growth,
improves digestion and reduces hair fall.
</p>

<a href="product_details.php?id=2" class="btn">
View Details
</a>

<a href="order.php?id=2" class="order-btn">
Order Now
</a>
</div>

<!-- Moringa -->
<div class="card">
<img src="images/moringapowder.png" alt="Moringa Powder">
<h3>Moringa Powder</h3>
<p>
Rich in vitamins, iron and antioxidants.
Boosts overall immunity.
</p>

<a href="product_details.php?id=3" class="btn">
View Details
</a>

<a href="order.php?id=3" class="order-btn">
Order Now
</a>
</div>

</div>

<div class="features">
<div>🌿 100% Natural</div>
<div>✅ No Side Effects</div>
<div>🍃 Chemical Free</div>
<div>🏆 Best Quality</div>
</div>

</div>

</body>
</html>