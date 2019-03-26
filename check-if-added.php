<?php
function check_if_added_to_cart($product_id)
{
 $link= mysqli_connect("127.0.0.1","root","prajesh","ecommerce");
$email=$_SESSION['email'];
  $qry="select id from users where email='$email'";
  $rslt= mysqli_query($link, $qry);
  $rows= mysqli_fetch_array($rslt);
  $user_id=$rows['id'];
$query="SELECT * FROM users_products WHERE product_id='$product_id' AND user_id ='$user_id' and status='Added to cart'";
$result_query= mysqli_query($link, $query);
$rows= mysqli_num_rows($result_query);
if($rows>=1)
{
    return 1;
}
 else {
    return 0;
}
}

?>