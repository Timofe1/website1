<?php 

require_once '../tew/connect.php';

$nameProduct = $_POST['nameProduct'];
$productPrice = $_POST['productPrice'];
$description = $_POST['description'];
$typeProduct = $_POST['typeProduct'];
// $mysqli->set_charset("utf8");

$query = "INSERT INTO `flowers` (`id`, `nameProduct`, `productPrice`, `description`, `typeProduct`) 
VALUES (NULL, '$nameProduct', '$productPrice', '$description', '$typeProduct')";
header("location: /tempaltes/manage.php");
mysqli_query($link_sql, $query);






