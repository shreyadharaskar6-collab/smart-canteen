session_start();
include "config.php";

$user=$_SESSION['user'];
$item=$_GET['id'];

mysqli_query($conn,"INSERT INTO cart(user_id,item_id,qty) VALUES('$user','$item','1')");

header("location:cart.php");