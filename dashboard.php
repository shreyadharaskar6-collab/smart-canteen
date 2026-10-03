<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">

<!-- CHART -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

body{
margin:0;
font-family:'Quicksand','Poppins',sans-serif;
background:#f3e1ea;
}

/* HEADER */
.header{
background:linear-gradient(90deg,#ff6a9f,#ff8fb1);
color:white;
padding:15px;
display:flex;
justify-content:space-between;
align-items:center;
}

/* TITLE FIX */
.title{
font-family:'Poppins', sans-serif;
font-size:24px;
font-weight:700;
letter-spacing:1px;
}

/* ICON */
.circle{
width:40px;
height:40px;
background:white;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
color:#ff6a9f;
cursor:pointer;
}

/* PROFILE */
.profile{
width:40px;
height:40px;
border-radius:50%;
cursor:pointer;
}

/* MAIN */
.container{
padding:15px;
}

h2{
text-align:center;
font-weight:600;
}

/* CARDS */
.cards{
display:flex;
gap:10px;
margin-top:10px;
}

.card{
flex:1;
background:linear-gradient(180deg,#ff8fb1,#ff6a9f);
color:white;
padding:15px;
border-radius:15px;
text-align:center;
cursor:pointer;
transition:0.3s;
}

.card:hover{
transform:scale(1.03);
}

.card.light{
background:#f7c3d3;
color:black;
}

/* GRAPH */
.graph{
background:white;
margin-top:15px;
padding:10px;
border-radius:15px;
height:180px;
}

/* FILTER */
.filters{
display:flex;
gap:10px;
margin-top:10px;
flex-wrap:wrap;
}

.filter{
padding:8px 15px;
border-radius:20px;
background:#eee;
cursor:pointer;
}

.filter.active{
background:#ff6a9f;
color:white;
}

/* ORDERS */
.orders{
margin-top:15px;
}

.order{
display:flex;
justify-content:space-between;
padding:10px;
border-bottom:1px solid #ddd;
align-items:center;
}

.tag{
padding:5px 10px;
border-radius:10px;
color:white;
font-size:12px;
cursor:pointer;
}

.ready{background:#7bc47f;}
.complete{background:#5b8bd9;}
.prepare{background:#f4b35e;}
.view{background:#ff6a9f;}

</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
<div class="circle" onclick="menu()">☰</div>

<div class="title">Admin Dashboard</div>

<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="profile" onclick="profile()">
</div>

<div class="container">

<h2>Hello, Admin!</h2>

<!-- CARDS -->
<div class="cards">
<div class="card" onclick="alert('Today Orders Clicked')">
<p>Today Orders</p>
<h2>8</h2>
</div>

<div class="card" onclick="alert('Total Orders Clicked')">
<p>Total Orders</p>
<h2>₹1200</h2>
</div>

<div class="card light" onclick="alert('Items Clicked')">
<p>Items Available</p>
<h2>15</h2>
</div>
</div>

<!-- GRAPH -->
<div class="graph">
<canvas id="myChart"></canvas>
</div>

<!-- FILTER -->
<div class="filters">
<div class="filter active" onclick="filter('All')">All</div>
<div class="filter" onclick="filter('Preparing')">Preparing</div>
<div class="filter" onclick="filter('Ready')">Ready</div>
<div class="filter" onclick="filter('Completed')">Completed</div>
</div>

<!-- ORDERS -->
<div class="orders">

<p><b>Recent Orders:</b></p>
<p>Top Item: Burger 🍔</p>

<div class="order">
<span>#101 Burger | 12:30 PM</span>
<span class="tag view" onclick="view()">View</span>
</div>

<div class="order">
<span>#102 Pizza | 12:45 PM</span>
<span class="tag ready">Ready</span>
</div>

<div class="order">
<span>#103 Momos | 1:00 PM</span>
<span class="tag complete">Completed</span>
</div>

<div class="order">
<span>#104 Burger | 1:15 PM</span>
<span class="tag prepare">Preparing</span>
</div>

</div>

</div>

<script>

/* GRAPH */
new Chart(document.getElementById("myChart"), {
type: 'line',
data: {
labels: ['M','T','W','T','F','S'],
datasets: [{
label: 'Orders',
data: [30,40,35,45,50],
borderWidth: 2,
tension: 0.4
}]
},
options: {
responsive: true,
maintainAspectRatio: false
}
});

/* FUNCTIONS */
function menu(){
alert("Menu Open");
}

function profile(){
alert("Profile Open");
}

function view(){
alert("Order Details");
}

function filter(type){
alert(type + " Filter Applied");
}

</script>

</body>
</html>