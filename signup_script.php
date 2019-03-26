<?php
$link= mysqli_connect("127.0.0.1", "root", "prajesh","ecommerce") or die(mysqli_error($link));
session_start();
       $name= mysqli_real_escape_string($link,$_POST['name']);
       $email= mysqli_real_escape_string($link,$_POST['email']);
        $password= mysqli_real_escape_string($link,$_POST['password']);
        $pass= md5($password);
        $contact=$_POST['contact'];
        $city=mysqli_real_escape_string($link,$_POST['city']);
        $address=mysqli_real_escape_string($link,$_POST['address']);
       $check="select id from users where email='$email'";
       $executed_querycheck=mysqli_query($link,$check) or die(mysqli_error($link));
        $rows= mysqli_num_rows($executed_querycheck);
        if($rows>0)
       {
     echo "Email id already exists.";
          }
          else
          {
       $query="insert into users(name,email,password,contact,city,address) values('$name','$email','$pass','$contact','$city','$address')" or die(mysqli_error($link));
 $executed_query=mysqli_query($link,$query) or die(mysqli_error($link));
 $rows= mysqli_num_rows($executed_query);
 echo "Database updated sucessfully.";
 $_SESSION['email']=$email;
 $_SESSION['id']= mysqli_insert_id($link);
 header("location: products.php");
          }
       ?>

