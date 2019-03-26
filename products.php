<?php
 include 'includes/common.php';
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
         include 'includes/header.php';
         include 'check-if-added.php';
        ?>
        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=6" name="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>
                            <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                          <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                           <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                             <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>
                             <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 18000.00 </p>
                             <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=13" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>
                             <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                             <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                             <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(16))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=16" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price Rs. 1300.00</p>
                             <?php
                             if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php
                             } else {
                                 if(check_if_added_to_cart(1))
                                 {
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                 }
                                 else
                                 {
                                 ?>
                              <p><a href="cart-add.php?id=17" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a></p>           
                            <?php }
                             }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
       <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
