<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aurevita - About Us</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f5fff5;
}

/* HEADER */
.header{
background:#0b7a1b;
padding:20px 8%;
display:flex;
justify-content:space-between;
align-items:center;
}

.logo{
color:white;
font-size:32px;
font-weight:bold;
}

.navbar a{
color:white;
text-decoration:none;
margin-left:20px;
font-size:17px;
}

.navbar a:hover{
color:#d4ffd4;
}

/* HERO */
 .hero{
height:80vh;
background:
linear-gradient(rgba(0,80,0,.5),rgba(0,80,0,.5)),
url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6?w=1600');
background-size:cover;
background-position:center;
display:flex;
justify-content:center;
align-items:center;
text-align:center;
color:white;
}
.hero-content h1{
font-size:60px;
margin-bottom:15px;
}

.hero-content p{
font-size:22px;
margin-bottom:25px;
}

.btn{
background:white;
color:#0b7a1b;
padding:15px 35px;
text-decoration:none;
border-radius:30px;
font-weight:bold;
}

/* ABOUT */
.about{
padding:80px 10%;
background:white;
}

.about-title{
text-align:center;
font-size:50px;
color:#0b7a1b;
margin-bottom:50px;
}

.about-container{
display:flex;
gap:50px;
align-items:center;
}

.about-image img{
width:100%;
border-radius:15px;
}

.about-content h2{
color:#0b7a1b;
margin-bottom:20px;
}

.about-content p{
line-height:1.8;
color:#555;
margin-bottom:15px;
}

.features{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:15px;
margin-top:20px;
}

.feature{
background:#f0fff0;
padding:15px;
border-left:5px solid #0b7a1b;
border-radius:10px;
}

/* GALLERY */
.gallery{
padding:80px 10%;
text-align:center;
}

.gallery h2{
font-size:40px;
color:#0b7a1b;
margin-bottom:30px;
}

.gallery-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
}

.gallery-grid img{
width:100%;
height:250px;
object-fit:cover;
border-radius:15px;
}

/* FOOTER */
.footer{
background:#15953a;
color:white;
padding:60px 8%;
}

.footer-container{
display:flex;
justify-content:space-between;
flex-wrap:wrap;
gap:40px;
}

.footer-links ul{
list-style:none;
}

.footer-links ul li{
margin-bottom:10px;
}

.footer-links a{
color:white;
text-decoration:none;
}

.copyright{
text-align:center;
margin-top:30px;
padding-top:20px;
border-top:1px solid rgba(255,255,255,.3);
}

@media(max-width:768px){

.about-container{
flex-direction:column;
}

.gallery-grid{
grid-template-columns:repeat(2,1fr);
}

}
</style>
</head>
<body>

<header class="header">
<div class="logo">🌿 Aurevita</div>

<div class="navbar">
<a href="Home.php">Home</a>
<a href="products.php">Products</a>
<a href="about.php">About</a>
<a href="contact.php">Contact</a>
<a href="login.php">Login</a>
</div>
</header>

<section class="hero">
<div class="hero-content">
<h1>Natural Herbal Wellness</h1>
<p>AI Powered Herbal Recommendation System</p>
<a href="products.php" class="btn">Explore Products</a>
</div>
</section>

<section class="about">

<h1 class="about-title">About Aurevita</h1>

<div class="about-container">

<div class="about-image">
<img src="https://images.unsplash.com/photo-1514996937319-344454492b37?w=800">
</div>

<div class="about-content">

<h2>Natural Wellness Through Herbal Science</h2>

<p>
Aurevita is an AI-powered Herbal Recommendation System helping users discover suitable herbal products based on their health concerns.
</p>

<p>
Our mission is to combine traditional herbal wisdom with modern technology to promote healthier lifestyles.
</p>

<div class="features">

<div class="feature">
<h4>🌿 100% Herbal</h4>
<p>Natural ingredients.</p>
</div>

<div class="feature">
<h4>🤖 AI Recommendations</h4>
<p>Personalized suggestions.</p>
</div>

<div class="feature">
<h4>💚 Wellness Focused</h4>
<p>Support healthy living.</p>
</div>

<div class="feature">
<h4>🔒 Safe & Reliable</h4>
<p>Trusted platform.</p>
</div>

</div>

</div>

</div>

</section>

<section class="gallery">

    <h2>Our Herbal Collection</h2>

    <div class="gallery-grid">

        <img src="images/kadipatta.png" alt="Kadipatta">

        <img src="images/neem.png" alt="Neem">

        <img src="images/moringa.png" alt="Moringa">

        

    </div>

</section>
<footer class="footer">

<div class="footer-container">

<div>
<h2>🌿 Aurevita</h2>
<p>Empowering healthier lives through herbal wellness.</p>
</div>

<div class="footer-links">
<h3>Quick Links</h3>
<ul>
<li><a href="Home.php">Home</a></li>
<li><a href="products.php">Products</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>

<div>
<h3>Contact</h3>
<p>📧 support@aurevita.com</p>
<p>📞 +91 9876543210</p>
</div>

</div>

<div class="copyright">
© 2026 Aurevita Herbal Recommendation System. All Rights Reserved.
</div>

</footer>

</body>
</html>