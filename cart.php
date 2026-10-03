<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Canteen Cart</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:'Poppins',sans-serif;
background:linear-gradient(180deg,#fcd6e6,#f7b2cf);
}

.container{
max-width:420px;
margin:20px auto;
background:#f7e1ea;
border-radius:25px;
box-shadow:0 10px 20px rgba(0,0,0,0.2);
padding-bottom:20px;
}

/* HEADER */
.header{
display:flex;
align-items:center;
justify-content:space-between;
padding:15px;
background:linear-gradient(45deg,#ff7eb3,#ff4da6);
border-radius:25px 25px 0 0;
color:white;
}

.icon{
width:45px;
height:45px;
background:white;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
color:#ff4da6;
font-size:20px;
cursor:pointer;
}

.title{
font-size:22px;
font-weight:600;
}

/* TITLE */
.cart-title{
padding:15px;
font-size:20px;
font-weight:600;
color:#7a2d4b;
}

/* ITEM */
.item{
display:flex;
align-items:center;
padding:10px 15px;
}

.checkbox{
margin-right:8px;
transform:scale(1.2);
}

.item img{
width:70px;
height:70px;
border-radius:12px;
object-fit:cover;
}

.details{
flex:1;
margin-left:10px;
}

.details h3{
margin:0;
font-size:18px;
color:#7a2d4b;
}

.details p{
margin:3px 0;
color:#7a2d4b;
}

.price{
margin-right:10px;
font-weight:600;
color:#7a2d4b;
}

/* QTY */
.qty-box{
display:flex;
align-items:center;
background:linear-gradient(45deg,#ff7eb3,#ff4da6);
border-radius:20px;
padding:3px 8px;
color:white;
}

.btn{
width:25px;
height:25px;
background:white;
color:#ff4da6;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
margin:0 5px;
cursor:pointer;
font-weight:bold;
}

.qty{
min-width:20px;
text-align:center;
}

/* NOTE */
.note{
margin:15px;
padding:10px;
background:white;
border-radius:12px;
display:flex;
align-items:center;
box-shadow:0 3px 8px rgba(0,0,0,0.1);
}

.note label{
margin-right:10px;
font-weight:600;
color:#7a2d4b;
}

.note input{
flex:1;
border:none;
outline:none;
font-size:14px;
}

/* 🔥 3D PLACE ORDER BUTTON */
.place-order{
margin:20px;
padding:15px;
text-align:center;
font-size:18px;
font-weight:600;
color:white;
border-radius:30px;
cursor:pointer;

background:linear-gradient(180deg,#ff4da6,#d81b60);
box-shadow:
0 8px 0 #b3124d,
0 10px 15px rgba(0,0,0,0.3);
transition:0.2s;
}

.place-order:active{
transform:translateY(4px);
box-shadow:
0 4px 0 #b3124d,
0 6px 10px rgba(0,0,0,0.3);
}

</style>
</head>

<body>

<div class="container">

<!-- HEADER -->
<div class="header">
<div class="icon">☰</div>
<div class="title">Canteen Cart</div>
<div class="icon" onclick="deleteSelected()">🗑</div>
</div>

<div class="cart-title">Cart</div>

<div id="cartItems"></div>

<!-- NOTE -->
<div class="note">
<label>Note:</label>
<input type="text" placeholder="Add note..." id="noteInput">
</div>

<!-- 🔥 PLACE ORDER BUTTON -->
<div class="place-order" onclick="placeOrder()">🛒 Place Order</div>

</div>

<script>

// LOAD CART
function loadCart(){
let cart = JSON.parse(localStorage.getItem("cart")) || [];
let html="";

cart.forEach((item,index)=>{
let qty = item.qty ? parseInt(item.qty) : 1;

html+=`
<div class="item">
<input type="checkbox" class="checkbox" id="check${index}">

<img src="${item.img}">

<div class="details">
<h3>${item.name}</h3>
<p>₹${item.price}</p>
</div>

<div class="price">₹${item.price}</div>

<div class="qty-box">
<div class="btn" onclick="dec(${index})">-</div>
<div class="qty" id="qty${index}">${qty}</div>
<div class="btn" onclick="inc(${index})">+</div>
</div>

</div>
`;
});

document.getElementById("cartItems").innerHTML = html;
}

loadCart();

// INCREASE
function inc(i){
let cart = JSON.parse(localStorage.getItem("cart")) || [];
cart[i].qty = (parseInt(cart[i].qty) || 1) + 1;
localStorage.setItem("cart",JSON.stringify(cart));
loadCart();
}

// DECREASE
function dec(i){
let cart = JSON.parse(localStorage.getItem("cart")) || [];
let qty = parseInt(cart[i].qty) || 1;

if(qty > 1){
cart[i].qty = qty - 1;
}else{
cart.splice(i,1);
}

localStorage.setItem("cart",JSON.stringify(cart));
loadCart();
}

// DELETE SELECTED
function deleteSelected(){
let cart = JSON.parse(localStorage.getItem("cart")) || [];

let newCart = cart.filter((item,index)=>{
return !document.getElementById("check"+index).checked;
});

localStorage.setItem("cart",JSON.stringify(newCart));
loadCart();

alert("Selected items deleted");
}

// 🔥 PLACE ORDER FUNCTION
function placeOrder(){
let cart = JSON.parse(localStorage.getItem("cart")) || [];
let selected = [];

cart.forEach((item,index)=>{
if(document.getElementById("check"+index).checked){
selected.push(item);
}
});

if(selected.length === 0){
alert("Please select at least one item");
return;
}

// save selected order
localStorage.setItem("orderItems", JSON.stringify(selected));

// redirect to pickup page
window.location.href = "pickup.php";
}

</script>

</body>
</html>