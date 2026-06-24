<?php
include 'db.php';

$msg="";
if(isset($_POST['pay']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $transaction_id = $_POST['transaction_id'];

    mysqli_query($conn,"INSERT INTO orders
    (name,phone,quantity,amount,payment_method,transaction_id)
    VALUES
    ('$name','$phone','$quantity','$amount','$payment_method','$transaction_id')");

    echo "<script>alert('Order Placed Successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Aurevita Payment</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:linear-gradient(135deg,#0b7a1b,#32a852);
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
padding:20px;
}

.payment-box{
width:500px;
background:white;
padding:35px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.logo{
text-align:center;
font-size:32px;
font-weight:bold;
color:#0b7a1b;
margin-bottom:10px;
}

.subtitle{
text-align:center;
color:#666;
margin-bottom:25px;
}

label{
display:block;
margin-top:12px;
font-weight:600;
}

input,select{
width:100%;
padding:12px;
margin-top:5px;
border:1px solid #ccc;
border-radius:8px;
}

.pay-btn{
width:100%;
background:#0b7a1b;
color:white;
padding:14px;
border:none;
border-radius:8px;
font-size:17px;
cursor:pointer;
margin-top:20px;
cursor:pointer;
}

.qr{
text-align:center;
margin-top:15px;
}

.qr img{
width:250px;
height:250px;
border-radius:10px;
}

#upiSection,
#codSection{
display:none;
}
</style>

<script>
function showPaymentMethod()
{
    var method=document.getElementById("payment_method").value;

    document.getElementById("upiSection").style.display="none";
    document.getElementById("codSection").style.display="none";

    if(method=="UPI")
    {
        document.getElementById("upiSection").style.display="block";
    }

    if(method=="COD")
    {
        document.getElementById("codSection").style.display="block";
    }
}

function calculateTotal()
{
    var price=document.getElementById("price").value;
    var qty=document.getElementById("quantity").value;

    document.getElementById("amount").value=price*qty;
}
</script>

</head>
<body>

<div class="payment-box">

<div class="logo">🌿 Aurevita</div>
<div class="subtitle">Secure Herbal Product Payment</div>

<form method="post">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Mobile Number</label>
<input type="text" name="phone" required>

<label>Price Per Product (₹)</label>
<input type="number" id="price" value="299" readonly>

<label>Quantity</label>
<input type="number"
id="quantity"
name="quantity"
value="1"
min="1"
onkeyup="calculateTotal()"
onchange="calculateTotal()">

<label>Total Amount (₹)</label>
<input type="number"
id="amount"
name="amount"
value="299"
readonly>

<label>Payment Method</label>
<select name="payment_method"
id="payment_method"
onchange="showPaymentMethod()"
required>

<option value="">Select Payment Method</option>
<option value="UPI">UPI Payment</option>
<option value="COD">Cash On Delivery</option>

</select>

<div id="upiSection">

<div class="qr">

<h3>Scan QR Code</h3>

<img src="images/qr3.png" alt="QR Code">

<p><b>UPI ID : yourupi@paytm</b></p>

<input type="text"
name="transaction_id"
placeholder="Enter Transaction ID">

</div>

</div>

<div id="codSection">
<p style="margin-top:15px;color:green;">
Cash On Delivery Selected
</p>
</div>

<button type="submit" name="pay" class="pay-btn">
💳 Place Order
</button>

</form>

</div>

</body>
</html>
```
