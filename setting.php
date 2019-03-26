<?php
 include 'includes/common.php';
 if(!isset($_SESSION['email']))
 {
     header("location: index.php");
 }
 else {
?>
<html>
    <head>
        <title>Setting</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
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
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
         <div class="panel-primary">
            <div class="panel-body">
                <h2>Change Password</h2>
        <form method="post" class="form-group" action="setting_script.php">
            <input type="password" name="opassword" placeholder="Old Password" class="form-control" required><br>
            <input type="password" name="npassword" placeholder="New Password" class="form-control" required><br>
            <input type="password" name="rnpassword" placeholder="Re-type New Password" class="form-control" required><br>
            <button type="submit" class="btn btn-primary">Change</button>     
        </form>      
        </div>
         </div>
        </div>
        </div>
                 </div>
             </div>
        </div>
       <?php
          include 'includes/footer.php';
       ?>
    </body>
</html>
<?php
 }
 ?>