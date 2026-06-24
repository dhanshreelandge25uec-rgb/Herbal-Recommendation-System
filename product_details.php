<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM products WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $row['name']; ?></title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:linear-gradient(135deg,#e8f5e9,#f1f8e9);
}

.header{
background:linear-gradient(90deg,#146b1e,#2e8b57);
color:white;
padding:20px;
text-align:center;
font-size:32px;
font-weight:bold;
letter-spacing:1px;
box-shadow:0 3px 10px rgba(0,0,0,0.2);
}

.container{
width:80%;
margin:40px auto;
background:white;
padding:40px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.product-image{
text-align:center;
}

.product-image img{
width:320px;
height:280px;
object-fit:contain;
transition:0.4s;
}

.product-image img:hover{
transform:scale(1.08);
}

h1{
text-align:center;
color:#146b1e;
margin:20px 0;
font-size:38px;
}

.info-box{
display:flex;
justify-content:center;
gap:15px;
flex-wrap:wrap;
margin:25px 0;
}

.box{
background:#146b1e;
color:white;
padding:15px;
border-radius:15px;
width:180px;
text-align:center;
font-weight:bold;
box-shadow:0 5px 12px rgba(0,0,0,0.15);
}

.section{
background:#f9fff9;
padding:20px;
margin-top:20px;
border-left:6px solid #146b1e;
border-radius:12px;
box-shadow:0 3px 8px rgba(0,0,0,0.08);
}

.section h2{
color:#146b1e;
margin-bottom:10px;
font-size:24px;
}

.section p{
line-height:30px;
font-size:17px;
color:#444;
}

.btn{
background:linear-gradient(90deg,#146b1e,#2e8b57);
color:white;
padding:12px 25px;
text-decoration:none;
border-radius:30px;
font-size:17px;
font-weight:bold;
display:inline-block;
transition:0.3s;
}

.btn:hover{
transform:translateY(-3px);
box-shadow:0 5px 15px rgba(20,107,30,0.4);
}

.center{
text-align:center;
margin-top:30px;
}

</style>
</head>

<body>

<div class="header">
🌿 Herbal Product Details
</div>

<div class="container">

<div class="product-image">
<img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
</div>

<h1><?php echo $row['name']; ?></h1>

<div class="info-box">
<div class="box">🌿 100% Natural</div>
<div class="box">🍃 Chemical Free</div>
<div class="box">✅ No Side Effects</div>
<div class="box">🏆 Premium Quality</div>
</div>

<div class="section">
<h2>Description</h2>
<p><?php echo $row['description']; ?></p>
</div>

<div class="section">
<h2>Benefits</h2>

<?php
if($id==1)
{
echo "
<p>
✔ Supports healthy skin<br>
✔ Helps improve immunity<br>
✔ Natural detoxifier<br>
✔ Helps maintain blood sugar levels<br>
✔ Contains antibacterial properties
</p>";
}
elseif($id==2)
{
echo "
<p>
✔ Promotes hair growth<br>
✔ Reduces hair fall<br>
✔ Improves digestion<br>
✔ Rich in antioxidants<br>
✔ Supports healthy metabolism
</p>";
}
elseif($id==3)
{
echo "
<p>
✔ Rich in vitamins and minerals<br>
✔ Boosts immunity<br>
✔ Improves energy levels<br>
✔ Supports overall health<br>
✔ Helps fight nutritional deficiencies
</p>";
}
?>
</div>

<div class="section">
<h2>How It Works In Daily Life</h2>

<?php
if($id==1)
{
echo "<p>
Neem Powder can be mixed with warm water and consumed regularly.
It helps purify the body, improves immunity, and supports healthy skin.
It is also used as a natural face pack for glowing skin.
</p>";
}
elseif($id==2)
{
echo "<p>
Kadipatta Powder can be added to food, buttermilk, or warm water.
Daily use supports digestion, strengthens hair roots, and promotes healthy hair growth.
</p>";
}
elseif($id==3)
{
echo "<p>
Moringa Powder can be mixed with milk, smoothies, or juices.
It provides essential nutrients, boosts energy levels, and supports overall wellness.
</p>";
}
?>
</div>

<div class="section">
<h2>Usage Instructions</h2>

<p>
Take 1–2 teaspoons daily with warm water, milk, juice, or food.
For best results, use consistently along with a balanced diet and healthy lifestyle.
</p>

</div>

<div class="section">
<h2>Why Choose This Product?</h2>

<p>
This herbal product is prepared using natural ingredients and traditional Ayurvedic methods.
It is free from harmful chemicals and supports overall wellness naturally.
Regular use may help improve immunity, energy levels, and daily health maintenance.
</p>

</div>

<div class="center">
<a href="products.php" class="btn">
← Back to Products
</a>
</div>

</div>

</body>
</html>