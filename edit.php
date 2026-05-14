<?php
$id =  $_GET['id'];

$query = "SELECT * FROM menuitems WHERE id = $id";

$result = mysqli_query($conn , $query);
$row = mysqli_fetch_assoc($result);

?>