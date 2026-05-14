<?php

$host = "localhost";
$user = "root";
$password =  "";
$database = "foodbook_cafe";

$conn =  mysqli_connect($host, $user , $password , $database);

if(!$conn){
    die("connection failed");
}


?>