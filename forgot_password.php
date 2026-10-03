<!DOCTYPE html>
<html>
<head>

<title>Forgot Password</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
margin:0;
font-family:Arial;
background:#f2f2f2;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
width:400px;
}

.title{
font-size:42px;
font-weight:700;
display:flex;
align-items:center;
gap:10px;
}

.subtitle{
margin-top:10px;
font-size:20px;
color:#444;
}

.field{
margin-top:50px;
}

label{
font-size:32px;
}

input{
width:100%;
border:none;
border-bottom:3px solid black;
padding:10px;
font-size:22px;
outline:none;
background:transparent;
}

.buttons{
display:flex;
justify-content:space-between;
margin-top:70px;
}

.submit{
width:180px;
padding:15px;
border:none;
border-radius:40px;
font-size:24px;
color:white;
background:linear-gradient(to right,#f7a6c2,#f7c4d6);
box-shadow:0px 5px 10px rgba(0,0,0,0.2);
cursor:pointer;
}

.cancel{
width:180px;
padding:15px;
border-radius:40px;
font-size:24px;
border:3px solid black;
background:white;
cursor:pointer;
}

</style>

</head>

<body>

<div class="container">

<div class="title">
🔒 Forgot Password
</div>

<div class="subtitle">
Enter your details to reset your password
</div>

<div class="field">
<label>Email</label>
<input type="email" id="email">
</div>

<div class="field">
<label>OTP</label>
<input type="text" id="otp">
</div>

<div class="buttons">

<button class="submit" onclick="submitData()">Submit</button>

<button class="cancel" onclick="goBack()">Cancel</button>

</div>

</div>

<script>

function submitData(){

let email = document.getElementById("email").value;
let otp = document.getElementById("otp").value;

if(email=="" || otp==""){
alert("Please fill all fields");
return;
}

alert("OTP Verified (Demo)");

}

function goBack(){
window.location.href="login.php";
}

</script>

</body>
</html>