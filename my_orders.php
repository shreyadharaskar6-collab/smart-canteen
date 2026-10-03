<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Orders</title>

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
}

.title{
font-size:22px;
font-weight:600;
}

/* CARD */
.card{
background:#fff;
margin:15px;
padding:15px;
border-radius:15px;
box-shadow:0 5px 10px rgba(0,0,0,0.1);
}

.top{
display:flex;
align-items:center;
}

.checkbox{
margin-right:10px;
transform:scale(1.2);
}

.top img{
width:60px;
height:60px;
border-radius:10px;
object-fit:cover;
}

.details{
flex:1;
margin-left:10px;
}

.details h3{
margin:0;
font-size:18px;
}

.details p{
margin:5px 0;
}

.price{
font-weight:600;
}

/* STATUS COLORS */
.status{
font-weight:600;
margin-top:5px;
}

.pending{color:#888;}
.preparing{color:#ff9800;}
.ready{color:#4caf50;}
.completed{color:#2196f3;}

.pickup{
margin-top:10px;
font-size:14px;
color:#555;
}

/* 3D BUTTON */
.cancel-btn{
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

.cancel-btn:active{
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
<div class="title">My Orders</div>
<div class="icon">👤</div>
</div>

<!-- ORDERS -->
<div id="orders"></div>

<!-- CANCEL BUTTON -->
<div class="cancel-btn" onclick="cancelOrder()">Cancel Order</div>

</div>

<script>

// ✅ UPDATED DATA (Pending added)
let orders = [
{
id:101,
name:"Burger",
price:170,
status:"Pending",   // 👈 default
time:"12:30 PM",
img:"images/burger.jpg"
},
{
id:102,
name:"Sandwich",
price:40,
status:"Ready for Pickup",
time:"1:00 PM",
img:"images/sandwich.jpg"
},
{
id:103,
name:"Momos",
price:90,
status:"Completed",
time:"",
img:"images/momos.jpg"
}
];

// LOAD
function loadOrders(){
let html="";

orders.forEach((o,i)=>{

let statusClass="";
if(o.status==="Pending") statusClass="pending";
if(o.status==="In Preparation") statusClass="preparing";
if(o.status==="Ready for Pickup") statusClass="ready";
if(o.status==="Completed") statusClass="completed";

html+=`
<div class="card">

<div class="top">
<input type="checkbox" class="checkbox" id="check${i}">
<img src="${o.img}">

<div class="details">
<h3>${o.name}</h3>
<p>Total: ₹${o.price}</p>
<p class="status ${statusClass}">${o.status}</p>
</div>

<div class="price">₹${o.price}</div>
</div>

${o.time ? `<div class="pickup">Pickup Time: ${o.time}</div>` : ""}

</div>
`;
});

document.getElementById("orders").innerHTML = html;
}

loadOrders();

// CANCEL LOGIC
function cancelOrder(){

let newOrders = [];

orders.forEach((o,i)=>{
let checked = document.getElementById("check"+i).checked;

// ✅ Only Pending can cancel
if(checked){
if(o.status==="Pending"){
// remove
}else{
alert("Cannot cancel order in " + o.status);
newOrders.push(o);
}
}else{
newOrders.push(o);
}
});

orders = newOrders;
loadOrders();

}

</script>

</body>
</html>