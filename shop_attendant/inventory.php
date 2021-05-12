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
                        <h1>Update Inventory</h1>
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
                               <h3>Inventory</h3>                       
                            </div>
                            <div class="card-body">
                                <table class="table" id="manageInventory" width="100%">
                                    <thead>
                                        <tr>
                                          <th>Inventory ID</th>
                                          <th>Supplier Name</th>
                                          <th>Raw Goods Name</th> 
                                          <th>Stock Quantity</th>
                                          <th>Date Received</th>
                                          <th>Action</th>
                                       </tr>
                                        </thead>
                 <?php
                    $conn = connect();
                    $result=mysqli_query($conn,"SELECT * FROM inventory JOIN supplier ON inventory.supplier_id = supplier.supplier_id WHERE inventory_status = 1");
                    while ($row=mysqli_fetch_array($result)) {
                    ?>
                <tr>
                      <td><?php  echo $row['inventory_id'] ?></td>
                      <td><?php  echo $row['supplier_name'];?></td>
                      <td><?php  echo $row['inventory_rawgoods'];?></td>
                      <td><?php  echo $row['inventory_stockqty'];?></td>
                      <td><?php  echo $row['date_received'];?></td>
                      <td> <a class="btn btn-danger" href="../controller/delete_inventory.php?remove=<?php echo $row['inventory_id'];?>">Remove</a></td>
                         
                  
                </tr>
            <?php 
                  }
              ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                               <h3>Product</h3>                       
                            </div>
                            <div class="card-body">
                                <table class="table" id="manageInventory1" width="100%">
                                    <thead>
                                        <tr>
                                          <th>Product Name</th> 
                                          <th>Product Price</th>
                                          <th>Product Stocks Quantity</th>
                                          <th>Action</th>
                                       </tr>
                                        </thead>
                 <?php
                    $conn = connect();
                    $result=mysqli_query($conn,"SELECT * FROM product");
                    while ($row=mysqli_fetch_array($result)) {
                    ?>
                <tr>
                      <td><?php  echo $row['product_name'];?></td>
                      <td><?php  echo $row['product_price'];?></td> 
                      <td><?php  echo $row['stocks_qty'];?>

                      <?php if($row['stocks_qty'] <= 0) { ?>
                       <a class="btn btn-primary" href="add_qty.php?add_qty=<?php echo $row['product_id'];?>"> + </a> 
                     <?php } ?>
                     </td>

                    
                      <td>

                        <a class="btn btn-primary" href="edit_product.php?edit=<?php echo $row['product_id'];?>">Edit</a>

                        <a class="btn btn-danger" href="../controller/delete_product.php?remove=<?php echo $row['product_id'];?>">Remove</a>
                    </td>
                </tr>
            <?php 
}?>
                                </table>
                            </div>
                              <div class="card-header">
                                <strong class="card-title"><a href="add_product.php" class="btn btn-success"  style="color:white">Add Product</a></strong>
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
