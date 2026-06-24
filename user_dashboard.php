 

<!DOCTYPE html>
<html>
<head>
<title>User Dashboard</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, sans-serif;
}

body{
background:#f5f5f5;
}

.topbar{
height:60px;
background:#0f5f18;
color:white;
display:flex;
justify-content:space-between;
align-items:center;
padding:0 20px;
}

.logout-btn{
background:white;
color:#0f5f18;
padding:8px 15px;
border-radius:5px;
text-decoration:none;
font-weight:bold;
}

.container{
display:flex;
}

.sidebar{
width:220px;
height:calc(100vh - 60px);
background:white;
padding-top:20px;
box-shadow:0 0 5px #ccc;
}

.sidebar ul{
list-style:none;
}

.sidebar ul li{
padding:15px 20px;
border-bottom:1px solid #eee;
}

.sidebar ul li a{
text-decoration:none;
color:#333;
font-weight:bold;
}

.sidebar ul li:hover{
background:#eaf6ea;
}

.content{
flex:1;
padding:25px;
}

.cards{
display:flex;
gap:20px;
margin-bottom:30px;
}

.card{
background:white;
flex:1;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px #ddd;
display:flex;
justify-content:space-between;
align-items:center;
}

.card h2{
color:#0f5f18;
font-size:35px;
}

.card p{
margin-top:10px;
}

.card img{
width:70px;
}

.recommendation{
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 0 10px #ddd;
display:flex;
justify-content:space-between;
align-items:center;
}

.left{
width:50%;
}

.left h2{
color:#0f5f18;
margin-bottom:15px;
}

select{
width:100%;
padding:12px;
border:1px solid #ccc;
border-radius:5px;
margin-bottom:15px;
}

button{
background:#1c8b2a;
color:white;
border:none;
padding:12px 25px;
border-radius:5px;
cursor:pointer;
}

.right img{
width:350px;
}

</style>

</head>

<body>

<div class="topbar">
<h2>User Dashboard</h2>

 

<a href="login.php" class="logout-btn">
Logout
</a>
</div>
</div>

<div class="container">

<div class="sidebar">

<ul>
<li><a href="Home.php">🏠 Dashboard</a></li>
<li><a href="products.php">📦 Products</a></li>
<li><a href="recommendation.php">🌿 Get Recommendation</a></li>
<li><a href="feedback.php">💬 Feedback</a></li>
<li><a href="#">🔐 Change Password</a></li>
</ul>

</div>

<div class="content">

<div class="cards">

<div class="card">
<div>
<h2>3</h2>
<p>Available Products</p>
</div>

<img src="images/leaf.png">
</div>

<div class="card">
<div>
<h3>Get Your Recommendation</h3>
<p>Check Now</p>
</div>

<img src="images/mortar.png">
</div>

<div class="card">
<div>
<h3>Share Your Feedback</h3>
<p>Give Feedback</p>
</div>

<img src="images/feedback.png">
</div>

</div>

<div class="recommendation">

<div class="left">

<h2>Get Recommendation</h2>

<form action="recommendation.php" method="POST">

<select name="problem">

<option>Diabetes</option>
<option>Hair Problem</option>
<option>Weak Immunity</option>
<option>Skin Problem</option>

</select>

<button type="submit">
Get Recommendation
</button>

</form>

</div>

<div class="right">

<img src="images/mortar_bowl.png">

 

</div>

</div>

</div>

</div>

</body>
</html>