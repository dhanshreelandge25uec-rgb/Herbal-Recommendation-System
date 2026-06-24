<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Contacts - Admin Dashboard</title>

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
    margin-bottom:25px;
    color:#0b7a1b;
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

.message{
    max-width:300px;
    word-wrap:break-word;
}

.back-btn{
    display:inline-block;
    margin-bottom:20px;
    padding:10px 20px;
    background:#0b7a1b;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.back-btn:hover{
    background:#095f15;
}
</style>

</head>
<body>

<div class="container">

<a href="admindashboard.php" class="back-btn">← Back Dashboard</a>

<h1>Contact Messages</h1>

<table>
<tr>
    
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
</tr>

<?php

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>
              
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['subject']."</td>
                <td class='message'>".$row['message']."</td>
              </tr>";
    }
}
else
{
    echo "<tr>
            <td colspan='5'>No Contact Messages Found</td>
          </tr>";
}
?>

</table>

</div>

</body>
</html>