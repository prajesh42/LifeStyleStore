<?php
include 'includes/common.php';
$id=$_GET['id'];
$query="DELETE from users_products WHERE product_id=$id";
$result= mysqli_query($link, $query);
header("location: cart.php");
?>