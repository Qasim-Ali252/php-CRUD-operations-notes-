<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){



$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$isAvailable = $_POST['isAvailable'];


$query = "INSERT INTO menuitems (name , category , price , isAvailable) VALUES ('$name' , '$category' , '$price' , '$isAvailable')";


$result =  mysqli_query($conn , $query);

if ($result){
    echo "Item added  Successfully";
}
else {
    echo "Failed";
}

}


?>