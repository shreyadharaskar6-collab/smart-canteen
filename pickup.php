<!DOCTYPE html>
<html>
<head>

<title>Order Pickup</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:Poppins;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#ffd6ea,#f7c4d9);
}

.container{
width:520px;
}

.title{
color:#ff2a8a;
font-size:42px;
font-weight:700;
margin-bottom:70px;
}

.row{
display:flex;
align-items:center;
margin-bottom:45px;
}

.label{
width:230px;
font-size:32px;
}

.input{
flex:1;
height:55px;
border:none;
border-radius:14px;
background:#eaeaea;
padding-left:15px;
font-size:20px;
}

.timebox{
display:flex;
align-items:center;
}

.time{
width:85px;
height:55px;
border:none;
border-radius:14px;
background:#eaeaea;
text-align:center;
font-size:20px;
margin:0 10px;
}

.colon{
font-size:30px;
}

.cash{
display:flex;
align-items:center;
font-size:32px;
font-weight:600;
margin:60px 0 25px 0;
}

.cash input{
width:35px;
height:35px;
margin-right:20px;
}

.note{
font-size:24px;
text-align:center;
line-height:1.4;
margin-top:10px;
}

.btn{
margin-top:80px;
display:flex;
justify-content:center;
}

.btn button{

width:340px;
height:75px;
border:none;
border-radius:40px;
font-size:36px;
color:white;
cursor:pointer;

background:linear-gradient(180deg,#ff7cae,#ff2a8a);

box-shadow:
0 10px 20px rgba(0,0,0,0.25),
inset 0 -4px 0 rgba(0,0,0,0.2);

}

</style>

</head>

<body>

<div class="container">

<div class="title">ORDER PICKUP</div>

<div class="row">

<div class="label">Order ID -</div>

<input class="input" id="orderId" readonly>

</div>

<div class="row">

<div class="label">Pickup Time -</div>

<div class="timebox">

<input class="time" placeholder="HH">

<div class="colon">:</div>

<input class="time" placeholder="MM">

</div>

</div>

<div class="cash">

<input type="checkbox" id="cashCheck">

Pay with cash

</div>

<div class="note">

<b>Note:</b> Please show your order ID at the canteen counter

</div>

<div class="btn">

<button onclick="placeOrder()">Order</button>

</div>

</div>

<script>

function generateOrderId(){
let id="ORD"+Math.floor(1000+Math.random()*9000)
document.getElementById("orderId").value=id
}

generateOrderId()

function placeOrder(){

let cash = document.getElementById("cashCheck").checked;

// ✅ CASH → SUCCESS
if(cash){
window.location="success.html";
}

// ❌ NOT CASH → PAYMENT
else{
window.location="payment.php";
}

}

</script>

</body>
</html>