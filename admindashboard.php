<?php
include 'db.php';

$msg="";
/* DELETE */
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];

    mysqli_query($conn,"DELETE FROM products WHERE id='$id'");

    header("Location: admin.php");
}

/* ADD */
if(isset($_POST['add_product']))
{
    $name = $_POST['name'];
    $desc = $_POST['description'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp,"uploads/".$image);

    mysqli_query($conn,"
    INSERT INTO products(product_name,description,image)
    VALUES('$name','$desc','$image')
    ");

    header("Location: admin.php");
}

/* EDIT DATA FETCH */
$editMode = false;

if(isset($_GET['edit']))
{
    $editMode = true;

    $id = $_GET['edit'];

    $result = mysqli_query($conn,
    "SELECT * FROM products WHERE id='$id'");

    $editData = mysqli_fetch_assoc($result);
}

/* UPDATE */
if(isset($_POST['update_product']))
{
    $id = $_POST['id'];

    $name = $_POST['name'];
    $desc = $_POST['description'];

    if($_FILES['image']['name']!="")
    {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp,"uploads/".$image);

        mysqli_query($conn,"
        UPDATE products
        SET product_name='$name',
            description='$desc',
            image='$image'
        WHERE id='$id'
        ");
    }
    else
    {
        mysqli_query($conn,"
        UPDATE products
        SET product_name='$name',
            description='$desc'
        WHERE id='$id'
        ");
    }

    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Aurevita Admin Dashboard</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI;
}

body{
background:#f4f8f4;
}

.header{
background:#0b7a1b;
color:white;
padding:15px 30px;
display:flex;
justify-content:space-between;
}

.logout{
background:white;
padding:8px 15px;
text-decoration:none;
color:#0b7a1b;
border-radius:5px;
}

.container{
display:flex;
}

.sidebar{
width:250px;
background:white;
min-height:100vh;
box-shadow:0 0 10px rgba(0,0,0,.1);
}

.sidebar ul{
list-style:none;
}

.sidebar ul li{
padding:15px;
border-bottom:1px solid #eee;
}

.sidebar ul li a{
text-decoration:none;
color:#333;
}

.main{
flex:1;
padding:20px;
}

.cards{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
margin-bottom:20px;
}

.card{
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.1);
}

.card h3{
color:#0b7a1b;
}

.card p{
font-size:28px;
font-weight:bold;
}

.section{
background:white;
padding:20px;
margin-top:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.1);
}

table{
width:100%;
border-collapse:collapse;
}

table th{
background:#0b7a1b;
color:white;
padding:10px;
}

table td{
padding:10px;
text-align:center;
border-bottom:1px solid #ddd;
}

.btn{
padding:7px 15px;
border:none;
color:white;
border-radius:5px;
cursor:pointer;
}

.edit{
background:#007bff;
}

.delete{
background:red;
}

form input,
form textarea{
width:100%;
padding:10px;
margin-bottom:10px;
border:1px solid #ccc;
border-radius:5px;
}

.add-btn{
background:#0b7a1b;
color:white;
padding:12px;
border:none;
width:100%;
border-radius:5px;
cursor:pointer;
}

img{
border-radius:5px;
}

</style>
</head>
<body>

<div class="header">
<h2>🌿 Aurevita Admin Dashboard</h2>
<a href="#" class="logout">Logout</a>
</div>

<div class="container">

<div class="sidebar">
<ul>
<li><a href="#">Dashboard</a></li>
<li><a href="#">Products</a></li>
<li><a href="view_user.php">Users</a></li>
<li><a href="view_contact.php">contact</a></li>
<li><a href="#">Logout</a></li>
</ul>
</div>

<div class="main">

<div class="cards">

<div class="card">
<h3>Total Products</h3>
<p>
<?php
$res=mysqli_query($conn,"SELECT * FROM products");
echo mysqli_num_rows($res);
?>
</p>
</div>

<div class="card">
<h3>Users</h3>
<p>25</p>
</div>

<div class="card">
<h3>Feedback</h3>
<p>18</p>
</div>

<div class="card">
<h3>Recommendations</h3>
<p>105</p>
</div>

</div>

<div class="section">

<h2>Manage Products</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php

$data = mysqli_query($conn,
"SELECT * FROM products ORDER BY id DESC");

while($row=mysqli_fetch_assoc($data))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>


<td>
<img src="uploads/<?php echo $row['image']; ?>"
width="70">
</td>

<td>

<a href="?edit=<?php echo $row['id']; ?>">
<button class="btn edit">
Edit
</button>
</a>

<a href="?delete=<?php echo $row['id']; ?>"
onclick="return confirm('Delete Product?')">

<button class="btn delete">
Delete
</button>

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<div class="section">

<h2>
<?php
echo $editMode ? "Edit Product" : "Add Product";
?>
</h2>

<form method="POST"
enctype="multipart/form-data">

<input type="hidden"
name="id"
value="<?php echo $editData['id'] ?? ''; ?>">

<input type="text"
name="product_name"
placeholder="Product Name"
required
value="<?php echo $editData['product_name'] ?? ''; ?>">

<textarea
name="description"
placeholder="Description"><?php echo $editData['description'] ?? ''; ?></textarea>

<input type="file" name="image">

<?php if($editMode){ ?>

<button type="submit"
name="update_product"
class="add-btn">
Update Product
</button>

<?php } else { ?>

<button type="submit"
name="add_product"
class="add-btn">
Add Product
</button>

<?php } ?>

</form>

</div>

</div>

</div>

</body>
</html>