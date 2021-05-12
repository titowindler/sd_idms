<?php require('../controller/connection.php');?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>IDMS</title>
        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('includes/header.php');?>

       <?php

        $conn = connect();
        $id = $_GET['edit'];
        $sql = "SELECT * FROM product WHERE product_id = $id";
        $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)) {
              $prod_name  = $row['product_name'];
              $stocks  = $row['stocks_qty'];
              $prod_price  = $row['product_price'];
        }

         ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Products</h1>
                    </div>
                </div>
            </div>
        
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

            <div class="col-lg-12">
                <div class="card">
                </div>
            <form name="computer" method="post" action="../controller/edit_product.php">
                    <p style="font-size:16px; color:red" align="center"></p>
                <div class="card-body card-block">


                    <input type="hidden" value="<?php echo $id?>" name="id">
         
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="category" class="form-control-label">Product Name</label>
                        <input type="text" name="product_name" class="form-control" value="<?php echo $prod_name?>" required="true">
                    </div>
                </div>  
            </div>

              <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="category" class="form-control-label">Product Price</label>
                        <input type="number" min="1" name="price" class="form-control" value="<?php echo $prod_price?>" required="true">
                    </div>
                </div>  
            </div>
         
            <button type="submit" class="btn btn-success">EDIT</button>
            <a href="inventory.php" type="submit" class="btn btn-danger" name="submit">CANCEL</a>          
                </div>
            </div>
        </form>
    </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="../vendors/jquery/dist/jquery.min.js"></script>
                            <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="../vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="../vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="../assets/js/main.js"></script>
</body>
</html>
