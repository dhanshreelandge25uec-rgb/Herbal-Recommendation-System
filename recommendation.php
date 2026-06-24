<?php

$recommendation = "";

if(isset($_POST['problem']))
{
    $problem = $_POST['problem'];

    if($problem == "Diabetes")
    {
        $product = "Neem Powder";
        $image = "images/neem.png";
        $recommendation = "Neem Powder helps support healthy blood sugar levels, improves immunity, and promotes overall wellness.";
    }
    elseif($problem == "Hair Problem")
    {
        $product = "Kadipatta Powder";
        $image = "images/kadipatta.png";
        $recommendation = "Kadipatta Powder supports hair growth, reduces hair fall, and strengthens hair roots naturally.";
    }
    elseif($problem == "Weak Immunity")
    {
        $product = "Moringa Powder";
        $image = "images/moringa.png";
        $recommendation = "Moringa Powder is rich in vitamins and antioxidants that help boost immunity and energy.";
    }
    elseif($problem == "Skin Problem")
    {
        $product = "Neem Powder";
        $image = "images/neem.png";
        $recommendation = "Neem Powder supports healthy skin and helps reduce acne and skin infections naturally.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Herbal Recommendation</title>

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
background:linear-gradient(90deg,#0f5f18,#28a745);
color:white;
padding:20px;
text-align:center;
font-size:30px;
font-weight:bold;
}

.container{
width:80%;
margin:40px auto;
}

.card{
background:white;
padding:30px;
border-radius:20px;
box-shadow:0 8px 20px rgba(0,0,0,0.1);
}

h2{
color:#0f5f18;
margin-bottom:20px;
text-align:center;
}

select{
width:100%;
padding:15px;
border:2px solid #28a745;
border-radius:10px;
font-size:16px;
margin-bottom:20px;
}

button{
background:linear-gradient(90deg,#0f5f18,#28a745);
color:white;
padding:15px 30px;
border:none;
border-radius:30px;
font-size:16px;
cursor:pointer;
}

button:hover{
opacity:0.9;
}

.result{
margin-top:30px;
padding:25px;
background:#f7fff7;
border-left:6px solid #28a745;
border-radius:15px;
text-align:center;
}

.result img{
width:250px;
height:220px;
object-fit:contain;
margin:15px 0;
}

.result h3{
color:#0f5f18;
margin-bottom:10px;
font-size:28px;
}

.result p{
font-size:17px;
line-height:28px;
color:#555;
}

.back{
display:inline-block;
margin-top:20px;
background:#0f5f18;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:25px;
}

</style>

</head>

<body>

<div class="header">
🌿 Herbal Recommendation System
</div>

<div class="container">

<div class="card">

<h2>Select Your Health Problem</h2>

<form method="POST">

<select name="problem" required>
<option value="">-- Select Problem --</option>
<option>Diabetes</option>
<option>Hair Problem</option>
<option>Weak Immunity</option>
<option>Skin Problem</option>
</select>

<button type="submit">
Get Recommendation
</button>

</form>

<?php if($recommendation != "") { ?>

<div class="result">

<h3>Recommended Product</h3>

<img src="<?php echo $image; ?>">

<h3><?php echo $product; ?></h3>

<p>
<?php echo $recommendation; ?>
</p>

<p style="margin-top:15px;">
🌿 100% Natural <br>
🍃 Chemical Free <br>
✅ No Side Effects <br>
🏆 Premium Quality
</p>

<a href="dashboard.php" class="back">
← Back to Dashboard
</a>

</div>

<?php } ?>

</div>

</div>

</body>
</html>