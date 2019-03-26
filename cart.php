<?php
  include 'includes/common.php';
   if(isset($_SESSION['email']))
        {
    ?>
<!DOCTYPE html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
          include 'includes/header.php';
          ?>
         <div class="content">
             <div class="container-fluid decor_bg" id="content">
                 <div class="row">
                <div class="container">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
            
        <?php
           $email=$_SESSION['email'];
           $qry="select id from users where email='$email'";
            $rslt= mysqli_query($link, $qry);
           $rows= mysqli_fetch_array($rslt);
           $user_id=$rows['id'];
            $query="select * from ecommerce.products p INNER JOIN ecommerce.users_products up INNER JOIN ecommerce.users u WHERE u.id=up.user_id AND p.id=up.product_id AND up.user_id=$user_id";
            $result= mysqli_query($link,$query);
            $rows= mysqli_num_rows($result);
             $sum=0;
            if($rows==0)
            {
                ?>
                 <div class="jumbotron home-spacer" id="products-jumbotron">
                     <center>
                         <h3><a href="products.php">Add items to the cart first!</a></h3></center>
            </div>
            <?php 
              }
            else { ?>
                 <table class="table table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
              <?php 
               $count=0;
                while( $value= mysqli_fetch_array($result))
                {
                    $pid=$value['product_id'];
                    $sum=$sum+$value['price'];
                    $id=$rows['id'];
            ?>
                   
                        <tbody>
                                <tr>
                                <td><a href="cart-remove.php?id=<?php echo $value['product_id'];?>" class='remove_item_link'> Remove</a> </td>
                                <td><?php echo ++$count;?></td>
                                <td><?php echo $value['pname'];?></td>
                                <td><?php echo $value['price'];?></td>
                            </tr>
                <?php }  ?>
                              <tr>
                                <td></td><td>Total</td><td><?php echo $sum ; ?></td><td><a href='success_script.php?id=<?php echo $pid; ?>' class='btn btn-primary'>Confirm Order</a></td>
                              </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
             </div>
           </div>
        <?php
            include 'includes/footer.php';
            }
        ?>
    </body>
</html>
<?php
            }
            ?>