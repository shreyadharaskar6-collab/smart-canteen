<?php

include "config.php";

// REMEMBER ME AUTO FILL
if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
    $email_cookie = $_COOKIE['email'];
    $password_cookie = $_COOKIE['password'];
}else{
    $email_cookie = "";
    $password_cookie = "";
}

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    // EMPTY CHECK
    if(empty($email) || empty($password)){
        echo "<script>alert('Please fill all fields')</script>";
    }else{

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            // REMEMBER ME
            if(isset($_POST['remember'])){
                setcookie("email", $email, time()+86400);
                setcookie("password", $password, time()+86400);
            }else{
                setcookie("email", "", time()-3600);
                setcookie("password", "", time()-3600);
            }

            header("Location:menu.php");
            exit();
        }
        else
        {
            echo "<script>alert('Invalid Login')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<style>

body{
background:white;
font-family:Arial;
text-align:center;
padding-top:40px;
}

.logo img{
width:220px;
border-radius:50%;
}

.welcome{
font-family:'Lobster',cursive;
font-size:55px;
margin-top:10px;
}

.formbox{
margin-top:40px;
}

input[type=email],
input[type=password]{

width:330px;
padding:12px;
margin-top:25px;
border:none;
border-bottom:2px solid #ccc;
font-size:20px;
outline:none;

}

.options{
width:330px;
margin:auto;
margin-top:15px;
display:flex;
justify-content:space-between;
font-size:16px;
align-items:center;
}

.forgot a{
color:#ff77aa;
text-decoration:none;
}

button{

margin-top:35px;
width:330px;
padding:15px;
font-size:22px;
border:none;
border-radius:40px;
background:linear-gradient(to right,#f7a6c2,#f7c4d6);
color:white;
box-shadow:0px 4px 8px gray;
cursor:pointer;

}

.signup{

margin-top:25px;
font-size:18px;
color:gray;

}

.signup span{

color:#ff77aa;

}

</style>

</head>

<body>

<div class="logo">
<img src="cafeno.png">
</div>

<div class="welcome">
Welcome!
</div>

<form method="POST" class="formbox">

<!-- AUTO FILL EMAIL -->
<input type="email" name="email" placeholder="E-mail" value="<?php echo $email_cookie; ?>">

<br>

<!-- AUTO FILL PASSWORD -->
<input type="password" name="password" placeholder="Password" value="<?php echo $password_cookie; ?>">

<div class="options">

<label>
<input type="checkbox" name="remember"> Remember me
</label>

<div class="forgot">
<a href="forgot_password.php">Forgot password?</a>
</div>

</div>

<button name="login">Log in</button>

</form>

<div class="signup">

Don't have an account? 
<a href="register.php"><span>sign up</span></a>

</div>

</body>
</html>