<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Signup</title>

<style>

body{
margin:0;
font-family:Arial, sans-serif;
background:#f2f2f2;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

/* CONTAINER */
.container{
width:350px;
}

/* TITLE */
.title{
text-align:center;
font-size:36px;
font-weight:bold;
margin-bottom:40px;
}

/* INPUT FIELD */
.input-box{
margin-bottom:30px;
}

.input-box input{
width:100%;
border:none;
border-bottom:2px solid #ccc;
padding:10px 0;
font-size:22px;
outline:none;
background:transparent;
}

/* TERMS */
.terms{
font-size:16px;
margin-top:10px;
}

.terms span{
color:#ff7cae;
font-weight:600;
}

/* BUTTON */
.btn{
margin-top:40px;
text-align:center;
}

.btn button{
width:100%;
padding:18px;
font-size:28px;
border:none;
border-radius:40px;
color:white;
cursor:pointer;

background:linear-gradient(180deg,#f7a6c2,#f7c4d6);
box-shadow:0 8px 15px rgba(0,0,0,0.2);
}

/* LOGIN TEXT */
.login{
text-align:center;
margin-top:30px;
font-size:18px;
color:#888;
}

.login span{
color:#ff7cae;
font-weight:600;
cursor:pointer;
}

</style>
</head>

<body>

<div class="container">

<div class="title">Create Account</div>

<form onsubmit="return validateForm()">

<div class="input-box">
<input type="text" placeholder="Name">
</div>

<div class="input-box">
<input type="email" placeholder="Email">
</div>

<div class="input-box">
<input type="text" placeholder="Phone Number">
</div>

<div class="input-box">
<input type="password" placeholder="Password">
</div>

<label>
<input type="checkbox" id="termsCheck"> I agree
</label>

<div class="terms">
Agree with <span class="terms" onclick="openTerms()">Terms & Conditions</span>
</div>

<div class="btn">
<button type="button" onclick="goMenu()">Sign up</button>
</div>

</form>

<div class="login">
Already have an account? <span onclick="goLogin()">Log in</span>
</div>

</div>

<script>
function goLogin(){
window.location="login.php";
}

function goMenu(){
window.location = "menu.php";
}

function openTerms(){
document.getElementById("termsBox").style.display = "block";
}

function closeTerms(){
document.getElementById("termsBox").style.display = "none";
}

function validateForm(){

let name = document.getElementById("name").value;
let email = document.getElementById("email").value;
let phone = document.getElementById("phone").value;
let password = document.getElementById("password").value;
let terms = document.getElementById("termsCheck").checked;

// empty check
if(name=="" || email=="" || phone=="" || password==""){
alert("Please fill all fields");
return false;
}

// phone validation
if(phone.length != 10){
alert("Enter valid 10 digit phone number");
return false;
}

// password length
if(password.length < 4){
alert("Password must be at least 4 characters");
return false;
}

// terms check
if(!terms){
alert("Please accept Terms & Conditions");
return false;
}

// ✅ success
alert("Signup Successful");
window.location="menu.php";
return false;

}

</script>
<!-- TERMS POPUP -->
<div id="termsBox" style="
display:none;
position:fixed;
top:50%;
left:50%;
transform:translate(-50%,-50%);
width:80%;
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,0.3);
z-index:1000;
">

<h3>Terms & Conditions</h3>

<p style="font-size:14px; color:#555;">
<p style="font-size:14px; color:#555; line-height:1.6;">

1. All orders once placed cannot be cancelled or modified.<br><br>

2. Payment must be completed before order confirmation.<br><br>

3. Pickup must be done within the given time, otherwise order may be cancelled.<br><br>

4. No refund will be provided after successful payment.<br><br>

5. Food quality complaints must be reported within 10 minutes of pickup.<br><br>

6. The system is not responsible for delays due to high demand or technical issues.<br><br>

7. User personal information will be kept secure and not shared with third parties.<br><br>

8. Misuse of the platform may lead to account suspension.<br><br>

</p>

<button onclick="closeTerms()" style="
margin-top:15px;
padding:10px 20px;
border:none;
border-radius:20px;
background:#ff77aa;
color:white;
cursor:pointer;
">Close</button>

</div>
</body>
</html>