<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "smart_canteen", 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>