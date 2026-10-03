<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cafeno</title>

<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&family=Satisfy&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:'Poppins',sans-serif;
background:linear-gradient(180deg,#ffd6e6,#f7b2cf);
}

/* HEADER */
.header{
display:flex;
align-items:center;
justify-content:space-between;
padding:10px 15px;
}

.icon{
width:38px;
height:38px;
background:white;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
box-shadow:0 4px 10px rgba(0,0,0,0.2);
cursor:pointer;
}

/* TITLE CENTER FIX */
.title{
position:absolute;
left:50%;
transform:translateX(-50%);
font-family:'Pacifico',cursive;
font-size:44px;
color:#ff4da6;
text-shadow:0 5px 15px rgba(255,77,166,0.6);
}

/* TOP SECTION */
.top{
display:flex;
gap:12px;
padding:15px;
}

.left{
flex:1.2;
background:rgba(255,255,255,0.3);
padding:15px;
border-radius:15px;
}

.left h2{
font-family:'Satisfy',cursive;
font-size:30px;
color:#a64ca6;
margin:0;
}

.left p{
margin:5px 0;
}

/* SEARCH */
.search{
display:flex;
align-items:center;
background:white;
border-radius:30px;
padding:8px;
box-shadow:0 5px 10px rgba(0,0,0,0.1);
}

.search input{
border:none;
outline:none;
flex:1;
padding:5px;
}

.search-btn{
background:linear-gradient(45deg,#c77dff,#9d4edd);
padding:8px 12px;
border-radius:20px;
color:white;
}

/* RIGHT */
.right{
flex:1;
background:rgba(255,255,255,0.3);
border-radius:15px;
padding:10px;
text-align:center;
}

.right h3{
font-family:'Satisfy',cursive;
font-size:26px;
color:#a64ca6;
margin:0;
}

.right small{
display:block;
margin-bottom:5px;
color:#555;
}

.right img{
width:100px;
margin:5px 0;
}

/* VIEW BUTTON */
.view-btn{
background:linear-gradient(180deg,#c77dff,#9d4edd);
padding:8px 20px;
border:none;
border-radius:20px;
color:white;
box-shadow:0 5px 0 #6a0dad;
cursor:pointer;
}

/* SECTION */
.section{
display:flex;
justify-content:space-between;
padding:10px 15px;
}

.section span{
font-weight:bold;
text-decoration:underline;
cursor:pointer;
}

/* GRID */
.cards{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:12px;
padding:10px;
}

.card{
background:white;
border-radius:15px;
padding:10px;
text-align:center;
box-shadow:0 5px 10px rgba(0,0,0,0.1);
}

.card img{
width:100%;
height:110px;
object-fit:cover;
border-radius:10px;
}

/* ADD BUTTON FIX */
.add-btn{
margin-top:8px;
display:flex;
align-items:center;
justify-content:space-between;
background:linear-gradient(45deg,#ff8a00,#ff4da6);
border-radius:25px;
padding:5px 10px;
color:white;
box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

.add-btn button{
border:none;
background:none;
color:white;
font-size:18px;
cursor:pointer;
}

.qty{
margin:0 10px;
}

.add-text{
font-weight:bold;
cursor:pointer;
}

/* PLACE ORDER */
.place{
margin:20px auto;
width:70%;
text-align:center;
padding:15px;
font-size:20px;
color:white;
border-radius:30px;

background:linear-gradient(180deg,#ff4da6,#d81b60);
box-shadow:
0 8px 0 #b3124d,
0 12px 20px rgba(0,0,0,0.3);
cursor:pointer;
}
/* SIDEBAR */
.sidebar{
position:fixed;
top:0;
left:-260px; /* 👈 hidden by default */
width:220px;
height:100%;
background:linear-gradient(180deg,#ffd6e6,#f7b2cf);
padding:20px;
transition:0.3s ease;
z-index:1000;
box-shadow:5px 0 20px rgba(0,0,0,0.2);
}

.sidebar.active{
left:0; /* 👈 open */
}

.overlay{
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.2);
display:none;
z-index:999;
}

.overlay.active{
display:block;
}
</style>
</head>

<body>
<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">
<h3 style="font-family:Satisfy;">My Profile</h3>

<p onclick="openHome()">🏠 Home</p>
<p onclick="openMenu2()">📋 Menu</p>
<p onclick="goCart()">🛒 Cart</p>
<p onclick="goOrder()">📦 Orders</p>
<p onclick="goTrackorder()">🕘 Order History</p>
<p onclick="openNotification()">🔔 Notifications</p>
<p onclick="openDshboard()">📊 Dashboard</p>
<p onclick="goProfile()">👤 Profile</p>
<p onclick="goSettings()">⚙️ Settings</p>
<p onclick="goHelp()">❓ Help</p>
<p onclick="goLogin()">⏻ Logout </p>

</div>

<div class="overlay" id="overlay" onclick="closeSidebar()"></div>
<div class="header">
<div class="icon" onclick="openSidebar()">≡</div>

<div class="title">Cafeno</div>

<div style="display:flex; gap:10px;">
<div class="icon" onclick="openNotification()">🔔</div>
<div class="icon" onclick>👤</div>
</div>
</div>

<!-- TOP -->
<div class="top">

<div class="left">
<h2>Hello!!</h2>
<p>Ready to choose your favourite food?</p>

<div class="search">
<input type="text" id="searchInput" placeholder="Search for food, drinks..." onkeyup="searchItems()">
<div class="search-btn">🔍</div>
</div>
</div>

<div class="right">
<h3>Reorder</h3>
<small>your last order</small>
<img src="images/burger.jpg">
<button class="view-btn" onclick="viewOrder()">VIEW</button>
</div>

</div>

<!-- SECTION -->
<div class="section">
<h3>🔥 Chef's Recommendation</h3>
<span onclick="openMenu2()">See All</span>
</div>

<!-- CARDS -->
<div class="cards">

<div class="card">
<img src="images/burger.jpg">
<h4>Cheese Burger</h4>
<p>₹40</p>

<div class="add-btn">
<button onclick="dec(0)">-</button>
<span class="qty" id="q0">1</span>
<button onclick="inc(0)">+</button>
<span class="add-text" onclick="goCart()">Add</span>
</div>
</div>

<div class="card">
<img src="images/pizza.jpg">
<h4>Veggie Pizza</h4>
<p>₹99</p>

<div class="add-btn">
<button onclick="dec(1)">-</button>
<span class="qty" id="q1">1</span>
<button onclick="inc(1)">+</button>
<span class="add-text" onclick="goCart()">Add</span>
</div>
</div>

<div class="card">
<img src="images/sandwich.jpg">
<h4>Grilled Sandwich</h4>
<p>₹59</p>

<div class="add-btn">
<button onclick="dec(2)">-</button>
<span class="qty" id="q2">1</span>
<button onclick="inc(2)">+</button>
<span class="add-text" onclick="goCart()">Add</span>
</div>
</div>

<div class="card">
<img src="images/fries.jpg">
<h4>Peri Peri Fries</h4>
<p>₹79</p>

<div class="add-btn">
<button onclick="dec(3)">-</button>
<span class="qty" id="q3">1</span>
<button onclick="inc(3)">+</button>
<span class="add-text" onclick="goCart()">Add</span>
</div>
</div>

</div>

<!-- BUTTON -->
<div class="place" onclick="goOrder()">🛒 Place Order</div>

<script>

function inc(i){
let el=document.getElementById("q"+i);
el.innerText=parseInt(el.innerText)+1;
}

function dec(i){
let el=document.getElementById("q"+i);
if(el.innerText>1) el.innerText--;
}

function goOrder(){
window.location.href="order.php";
}

function openNotification(){
window.location.href="notification.php";
}

function goCart(){
window.location.href="cart.php";
}

function openMenu2(){
window.location.href="menu2.php";
}

function viewOrder(){
let last = localStorage.getItem("lastOrder");

if(last){
alert("Last order: " + last);
}else{
alert("No previous order found");
}
}

function searchItems(){
let input=document.getElementById("searchInput").value.toLowerCase();
let cards=document.querySelectorAll(".card");

cards.forEach(card=>{
let text=card.innerText.toLowerCase();
card.style.display = text.includes(input) ? "block" : "none";
});
}
function openSidebar(){
document.getElementById("sidebar").classList.add("active");
document.getElementById("overlay").classList.add("active");
}

function closeSidebar(){
document.getElementById("sidebar").classList.remove("active");
document.getElementById("overlay").classList.remove("active");
}
</script>

</body>
</html>