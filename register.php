<?php
include "config.php";

if(isset($_POST['signup']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$sql="INSERT INTO users(name,email,phone,password)
VALUES('$name','$email','$phone','$password')";

mysqli_query($conn,$sql);

header("Location:login.php");

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Create Account</title>

<style>

body{
font-family:Arial;
background:white;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
flex-direction:column;
}

h1{
font-size:40px;
margin-bottom:30px;
}

form{
text-align:center;
}

input{
width:320px;
padding:12px;
margin:18px;
border:none;
border-bottom:2px solid #ccc;
font-size:20px;
outline:none;
}

.terms{
width:320px;
margin:auto;
margin-top:5px;
font-size:16px;
text-align:left;
}

.terms a{
color:#ff77aa;
text-decoration:none;
}

.signup button{
margin-top:25px;
width:320px;
padding:16px;
font-size:22px;
border:none;
border-radius:40px;
background:linear-gradient(to right,#f7a6c2,#f7c4d6);
color:white;
box-shadow:0px 4px 8px gray;
cursor:pointer;
}

.loginlink{
margin-top:20px;
font-size:18px;
}

.loginlink span{
color:#ff77aa;
}

</style>

</head>

<body>

<h1>Create Account</h1>

<form method="POST">

<input type="text" name="name" placeholder="Name">

<br>

<input type="email" name="email" placeholder="Email">

<br>

<input type="text" name="phone" placeholder="Phone Number">

<br>

<input type="password" name="password" placeholder="Password">

<div class="terms">
Agree with <a href="terms.php">Terms & Conditions</a>
</div>

<div class="signup">
<button name="signup">Sign up</button>
</div>

</form>

<div class="loginlink">
Already have an account? 
<a href="login.php"><span>Log in</span></a>
</div>

</body>
</html>