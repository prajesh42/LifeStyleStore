<?php
include 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header("location: index.php");
}
 else {
     $email=$_SESSION['email'];
    $opass= mysqli_real_escape_string($link,$_POST['opassword']);
    $opassword= md5($opass);
    $npass= mysqli_real_escape_string($link,$_POST['npassword']);
    $npassword= md5($npass);
    $rnpass= mysqli_real_escape_string($link,$_POST['rnpassword']);
    $rnpassword= md5($rnpass);
    $query="select password from users where email='$email'";
    $result= mysqli_query($link, $query);
    $rows= mysqli_fetch_array($result);
    $password=$rows['password'];
    if($npassword==$rnpassword)
    {
    if($password==$opassword)
    {
        $query="update users set password='$rnpassword'";
        $result= mysqli_query($link, $query);
        include 'logout.php';
        header("location: login.php");
    }
    else
    {
        echo "Old password not matched.Give the valid password.";
    }
    }
 else {
        
 {
     echo "Not matched! Retype the password.";
     header("location: setting.php");
 }
    
}
 }
?>