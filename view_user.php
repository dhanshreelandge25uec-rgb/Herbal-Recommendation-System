<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Users</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f4f8f4;
    padding:30px;
}

.container{
    max-width:1200px;
    margin:auto;
}

h1{
    text-align:center;
    color:#0b7a1b;
    margin-bottom:20px;
}

.back-btn{
    display:inline-block;
    background:#0b7a1b;
    color:white;
    text-decoration:none;
    padding:10px 20px;
    border-radius:5px;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

th{
    background:#0b7a1b;
    color:white;
    padding:15px;
}

td{
    padding:12px;
    border-bottom:1px solid #ddd;
    text-align:center;
}

tr:hover{
    background:#f1fff1;
}
</style>

</head>
<body>

<div class="container">

<a href="admindashboard.php" class="back-btn">← Back Dashboard</a>

<h1>Registered Users</h1>

<table>
<tr>
    
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
</tr>

<?php

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>
                
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
              </tr>";
    }
}
else
{
    echo "<tr>
            <td colspan='4'>No Users Found</td>
          </tr>";
}
?>

</table>

</div>

</body>
</html>