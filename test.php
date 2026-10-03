<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "", 3307);

if($conn){
echo "CONNECTED SUCCESSFULLY";
}else{
echo "FAILED: " . mysqli_connect_error();
}

?>