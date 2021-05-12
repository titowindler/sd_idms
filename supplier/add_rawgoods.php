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

        $get_supplier_id = $_SESSION['supplier_id'];

        ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Raw Goods</h1>
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
            <form name="computer" method="post" action="../controller/add_rawgoods.php">
                    <p style="font-size:16px; color:red" align="center"></p>
                <div class="card-body card-block">

            <input type="hidden" value="<?php echo $get_supplier_id?>" name="supplierID">

            <p><b>Note:</b> 6 pcs per pack for all raw goods</p>
         
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="category" class="form-control-label">Raw Goods Name</label>
                        <input type="text" name="raw_goods_name" class="form-control" required="true">
                    </div>
                </div>  
            </div>

              <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="category" class="form-control-label">Stock Quantity</label>
                        <input type="number" min="1" max="250" name="stock" class="form-control" required="true">
                    </div>
                </div>  
            </div>

            <button type="submit" class="btn btn-success">ADD</button>
            <a href="raw_goods.php" type="submit" class="btn btn-danger" name="submit">CANCEL</a>          
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
