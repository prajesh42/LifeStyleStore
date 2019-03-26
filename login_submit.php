<?php
include 'includes/common.php';
$email= mysqli_real_escape_string($link,$_POST['email']);
$password= mysqli_real_escape_string($link,$_POST['password']);
$pass= md5($password);
$query="select id,email from users where email='$email' and password='$pass'";
$query_result= mysqli_query($link, $query);
$rows= mysqli_num_rows($query_result);
if($rows==0)
{
    echo "No such email and password found!";
}
else{
    $rows= mysqli_fetch_array($query_result);
    $_SESSION['email'] =$email;
    $_SESSION['id'] = mysqli_insert_id($link);
    header("location:products.php");
}
?>