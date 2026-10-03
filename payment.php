<!DOCTYPE html>
<html>
<head>

<title>Payment</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:Poppins;
background:linear-gradient(#ffd6ea,#f7c4d9);
display:flex;
justify-content:center;
}

.container{
width:380px;
padding:20px;
}

/* TITLE */

.title{
font-size:38px;
font-weight:700;
color:#ff2a8a;
margin-bottom:20px;
}

/* FOOD CARD */

.food-card{
background:#fff;
border-radius:25px;
padding:10px;
box-shadow:0 10px 20px rgba(0,0,0,0.1);
}

.food-card img{
width:100%;
border-radius:20px;
}

.food-info{
padding:10px;
}

.food-name{
font-size:20px;
margin-top:5px;
}

.price{
font-size:22px;
font-weight:600;
margin-top:5px;
}

.save{
background:#ff5c5c;
color:white;
padding:3px 8px;
border-radius:8px;
font-size:12px;
margin-left:8px;
}

/* PAYMENT METHOD */

.section{
margin-top:20px;
font-weight:600;
}

.methods{
display:flex;
gap:10px;
margin-top:10px;
}

.method{
flex:1;
padding:15px;
border-radius:15px;
background:#f1f1f1;
cursor:pointer;
transition:0.2s;
}

.method.active{
background:#ffe6ea;
border:2px solid #ff7cae;
}

.method h4{
margin:0;
}

.method p{
font-size:12px;
color:#666;
}

/* CARD OPTIONS */

.card-box{
margin-top:15px;
}

.option{
display:flex;
justify-content:space-between;
align-items:center;
background:white;
padding:12px;
border-radius:20px;
margin-top:10px;
cursor:pointer;
box-shadow:0 5px 10px rgba(0,0,0,0.05);
}

.option.active{
border:2px solid #ff7cae;
}

.left{
display:flex;
align-items:center;
gap:10px;
}

/* PAY BUTTON */

.pay-btn{
margin-top:30px;
}

.pay-btn button{
width:100%;
padding:18px;
border:none;
border-radius:35px;
font-size:28px;
color:white;
cursor:pointer;
background:linear-gradient(180deg,#ff7cae,#ff2a8a);
box-shadow:0 10px 20px rgba(0,0,0,0.25);
}

</style>

</head>

<body>

<div class="container">

<div class="title">PAYMENT</div>

<!-- FOOD CARD -->

<div class="food-card">
<img src="burger.jpg">
<div class="food-info">
<div class="food-name">Burger + Coke</div>
<div class="price">₹65 <span class="save">SAVE ₹15</span></div>
</div>
</div>

<!-- PAYMENT METHOD -->

<div class="section">Payment Method</div>

<div class="methods">

<div class="method active" onclick="selectMethod(this)">
<h4>Card</h4>
<p>Pay securely using your credit or debit card.</p>
</div>

<div class="method" onclick="selectMethod(this)">
<h4>Bank Transfer</h4>
<p>Transfer money directly your bank account.</p>
</div>

</div>

<!-- CARD OPTIONS -->

<div class="section">Debit/Credit Card</div>

<div class="card-box">

<div class="option" onclick="selectCard(this)">
<div class="left">
<input type="radio" name="card">
<span>Visa</span>
</div>
<img src="visa.png" width="40">
</div>

<div class="option active" onclick="selectCard(this)">
<div class="left">
<input type="radio" name="card" checked>
<span>Mastercard</span>
</div>
<img src="mastercard.png" width="40">
</div>

</div>

<!-- PAY BUTTON -->

<div class="pay-btn">
<button onclick="payNow()">Pay ₹ 65</button>
</div>

</div>

<script>

function selectMethod(el){
document.querySelectorAll(".method").forEach(m=>m.classList.remove("active"))
el.classList.add("active")
}

function selectCard(el){
document.querySelectorAll(".option").forEach(o=>o.classList.remove("active"))
el.classList.add("active")
el.querySelector("input").checked = true;
}

function payNow(){
alert("Payment Successful");
window.location="success.html";
}

</script>

</body>
</html>