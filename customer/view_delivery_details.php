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

        $get_customer_id = $_SESSION['customer_id'];

        $get_sales = $_GET['view'];

        $sqlFetch = "SELECT * FROM delivery WHERE sales_id = '$get_sales' AND customer_id = '$get_customer_id' ";
        $resultFetch = mysqli_query($conn,$sqlFetch);

        while($rowFetch = mysqli_fetch_assoc($resultFetch)) {
            $delivery_initiated = $rowFetch['delivery_initiated'];
            $delivery_received = $rowFetch['delivery_received'];
            $delivery_remarks = $rowFetch['delivery_remarks'];
        }

        ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View Delivery Details</h1>
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
            <form name="computer">
                    <p style="font-size:16px; color:red" align="center"></p>
                <div class="card-body card-block">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="category" class="form-control-label">Delivery Initiated</label>
                        <input type="date" value="<?php echo $delivery_initiated?>" class="form-control" required="true" disabled>
                    </div>
                </div>  
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="category" class="form-control-label">Delivery Received</label>
                        <input type="input" value="<?php echo $delivery_received?>" class="form-control" required="true" disabled>
                    </div>
                </div>  
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="category" class="form-control-label">Delivery Remarks</label>
                        <input type="input" value="<?php echo $delivery_remarks?>" class="form-control" required="true" disabled>
                    </div>
                </div>  
            </div>

             <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="category" class="form-control-label">Delivery Fee</label>
                        <input type="input" value="50" class="form-control" disabled>
                    </div>
                </div>  
            </div>

           <a href="my_orders.php" type="submit" class="btn btn-danger" name="submit">CANCEL</a>          
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
