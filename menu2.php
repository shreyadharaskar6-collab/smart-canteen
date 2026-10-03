<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Menu</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:'Poppins',sans-serif;
background:linear-gradient(180deg,#fcd6e6,#f7b2cf);
}

/* HEADER */
.header{
display:flex;
align-items:center;
padding:15px;
position:relative;
}

.menu-icon{
width:50px;
height:50px;
background:white;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:22px;
}

.title{
position:absolute;
left:50%;
transform:translateX(-50%);
font-size:34px;
font-weight:700;
color:#ff2c8b;
}

/* SEARCH */
.search-box{
margin:10px;
}

.search{
display:flex;
background:white;
border-radius:30px;
overflow:hidden;
box-shadow:0 3px 8px rgba(0,0,0,0.1);
}

.search input{
flex:1;
padding:12px;
border:none;
outline:none;
}

.search-btn{
background:#b56cc7;
color:white;
padding:12px;
}

/* ITEM */
.item{
display:flex;
align-items:center;
padding:15px;
border-bottom:1px solid #aaa;
}

.item img{
width:110px;
height:90px;
border-radius:5px;
object-fit:cover;
}

.details{
flex:1;
margin-left:15px;
}

.details h2{
margin:0;
font-size:22px;
}

.details p{
margin:5px 0;
font-size:18px;
}

/* ADD BUTTON */
.add-box{
display:flex;
align-items:center;
background:linear-gradient(45deg,#ffb347,#ff4da6);
border-radius:25px;
padding:5px 10px;
color:white;
font-weight:600;
box-shadow:0 4px 10px rgba(0,0,0,0.2);
}

.circle-btn{
width:25px;
height:25px;
border-radius:50%;
background:white;
color:#ff4da6;
display:flex;
align-items:center;
justify-content:center;
margin:0 5px;
cursor:pointer;
}

</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
<div class="menu-icon">☰</div>
<div class="title">Menu</div>
</div>

<!-- SEARCH -->
<div class="search-box">
<div class="search">
<input type="text" id="search" placeholder="Search for food, drinks..." onkeyup="searchItems()">
<div class="search-btn">🔍</div>
</div>
</div>

<!-- MENU ITEMS -->
<div id="menuList"></div>

<script>

// ✅ LOCAL IMAGE PATHS (ensure images folder exists)
let items = [
{name:"Momos",price:90,img:"images/momos.jpg"},
{name:"Maggie",price:60,img:"images/maggie.jpg"},
{name:"Mojito",price:70,img:"images/mojito.jpg"},
{name:"Icecream",price:50,img:"images/icecream.jpg"},

{name:"Burger",price:40,img:"images/burger.jpg"},
{name:"Pizza",price:99,img:"images/pizza.jpg"},
{name:"Sandwich",price:59,img:"images/sandwich.jpg"},
{name:"Fries",price:79,img:"images/fries.jpg"}
];

// LOAD ITEMS
function loadItems(list){
let html="";
list.forEach((item,index)=>{
html+=`
<div class="item">
<img src="${item.img}">
<div class="details">
<h2>${item.name}</h2>
<p>Rs. ${item.price}</p>
</div>

<div class="add-box">
<div class="circle-btn" onclick="dec(${index})">-</div>
<span id="qty${index}">1</span>
<div class="circle-btn" onclick="inc(${index})">+</div>
<div style="margin-left:5px;cursor:pointer;" onclick="addToCart(${index})">Add</div>
</div>
</div>
`;
});
document.getElementById("menuList").innerHTML=html;
}

loadItems(items);

// SEARCH
function searchItems(){
let val = document.getElementById("search").value.toLowerCase();
let filtered = items.filter(i => i.name.toLowerCase().includes(val));
loadItems(filtered);
}

// QTY
function inc(i){
let q = document.getElementById("qty"+i);
q.innerText = parseInt(q.innerText)+1;
}

function dec(i){
let q = document.getElementById("qty"+i);
if(q.innerText>1){
q.innerText = parseInt(q.innerText)-1;
}
}

// CART
function addToCart(i){
let cart = JSON.parse(localStorage.getItem("cart")) || [];
let qty = document.getElementById("qty"+i).innerText;

cart.push({...items[i], qty});
localStorage.setItem("cart",JSON.stringify(cart));

alert("Added to cart");
}

</script>

</body>
</html>