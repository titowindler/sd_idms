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
    <link rel="stylesheet" href="../vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php');?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View Sales</h1>
                    </div>
                </div>
            </div>
        </div>

 
      <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                              
                            </div>
                            <div class="card-body">
                                <table class="table" id="manageInventory" width="100%">
                                    <thead>
                                        <tr>
                                          <th>Customer Name</th>
                                          <th>Order Product</th> 
                                          <th>Order Quantity</th>
                                          <th>Profit Earn</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                       </tr>
                                        </thead>
                 <?php
                    $conn = connect();
                    $result=mysqli_query($conn,"SELECT * FROM delivery JOIN sales ON delivery.sales_id = sales.sales_id JOIN customer ON customer.customer_id = delivery.customer_id JOIN product ON sales.product_id = product.product_id");
                 
                    while ($row=mysqli_fetch_array($result)) {
                    ?>
                <tr>
                      <td><?php echo $row['customer_fname'];?> <?php echo $row['customer_lname'];?></td>
                      <td><?php echo $row['product_name'];?> - <?php echo $row['product_price'];?></td>
                      <td><?php echo $row['qty_sold'];?></td>
                      <td><?php echo $row['profit'];?></td>

                      <td>
                        <?php if($row['sales_status'] == 1) { ?>
                            <p><b>ORDER PENDING</b></p>
                             <a class="btn btn-danger" href="../controller/shop_approved_order.php?deliveryID=<?php echo $row['delivery_id']?>&salesID=<?php echo $row['sales_id']?>">APPROVED ORDER</a>
                        <?php } ?>
                         <?php if($row['sales_status'] == 2) { ?>
                            <p class="text-success">ORDER APPROVED</p>
                        <?php } ?>
                        </td>
                      
                      <td>

                        <a class="btn btn-primary" href="view_delivery_details.php?cusID=<?php echo $row['customer_id']?>&view=<?php echo $row['delivery_id'];?>">VIEW DELIVERY DETAILS</a>
                    </td>
                </tr>
            <?php 

}?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
