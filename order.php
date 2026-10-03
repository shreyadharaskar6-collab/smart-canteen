<?php

include "config.php";

if(isset($_POST['order']))
{

$item = $_POST['item'];
$price = $_POST['price'];

$sql = "INSERT INTO orders (item,price) VALUES ('$item','$price')";

mysqli_query($conn,$sql);

echo "Order Placed Successfully";

}

?>