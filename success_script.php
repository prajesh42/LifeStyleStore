<?php
 include 'includes/common.php';
 if(!isset($_SESSION['email']))
 {
     header("location: index.php");
 }
 else
 {
     $id=$_GET['id'];
     $query="UPDATE users_products set status='Confirmed' WHERE product_id=$id";
     $result= mysqli_query($link, $query);
     header("location: success.php");
 }
     ?>