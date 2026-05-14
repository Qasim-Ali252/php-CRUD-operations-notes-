<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$isAvailable = $_POST['isAvailable'];

$query = "UPDATE menuitems SET name = '$name' , category='$category', price='$price', isAvailable='$isAvailable'  where id=$id"

mysqli_query($conn , $query);
header("Location : index.php");
?>