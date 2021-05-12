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
                        <h1>View Supply History</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
           
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
                                          <th>Shop Attendant Name</th> 
                                          <th>Raw Goods Name</th>
                                          <th>Raw Goods Stock Quantity</th>
                                          <th>Date Sent</th>
                                       </tr>
                                        </thead>
                 <?php
                    $conn = connect();
                    $result=mysqli_query($conn,"SELECT * FROM supply_history JOIN shop_attendant ON supply_history.shop_attendant_id = shop_attendant.shop_attendant_id JOIN inventory ON inventory.inventory_rawgoods_id = supply_history.raw_goods_id");



                    while ($row=mysqli_fetch_array($result)) {
                    ?>
                   <tr>
                      <td><?php echo $row['shop_attendant_name'];?> </td>
                      <td><?php echo $row['inventory_rawgoods'];?></td>
                      <td><?php echo $row['inventory_stockqty'];?></td>
                      <td><?php echo $row['date_sent'];?></td>
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
