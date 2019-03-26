<?php
  include 'includes/common.php';
   $productid=$_GET['id'];
  $email=$_SESSION['email'];
  $qry="select id from users where email='$email'";
  $rslt= mysqli_query($link, $qry);
  $rows= mysqli_fetch_array($rslt);
  $userid=$rows['id'];
  $query="insert into users_products(user_id,product_id,status) values($userid,$productid,'Added to cart')";
  $result= mysqli_query($link, $query);
  header("location: cart.php");
  ?>