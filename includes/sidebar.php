<?php require('controller/sessions.php');?>
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 

               <?php if($_SESSION['user_type'] == '1') { ?> 
                <a class="navbar-brand" href="#dashboard.php">Admin</a>
               <?php } ?>

               <?php if($_SESSION['user_type'] == '2') { ?> 
                <a class="navbar-brand" href="#dashboard.php"><?php echo $_SESSION['user_username']; ?></a>
               <?php } ?>

                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

            <!-- Admin -->
             <?php if($_SESSION['user_type'] == '1') { ?> 

                <li class="active">
                    <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                  <li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Market Place</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="manage_market.php">Manage Market Inventory</a></li>
                        <li><i class="fa fa-user"></i><a href="manage_transaction.php">Manage Transactions</a></li>
                    </ul>
                  </li>

            
                <li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Users</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="add_admin.php">Add New Admin</a></li>
                        <li><i class="fa fa-user"></i><a href="manage_users.php">Manage Users</a>
                        </li>
                     </li>
                    </ul>
                </li>

                 <li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Inventory</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="add_category.php">Add Inventory Category</a></li>
                        <li><i class="fa fa-user"></i><a href="manage_inventory_category.php">Manage Inventory Category</a>
                        </li>
                     </li>
                    </ul>
                </li>

        
                <?php } ?>


            <!-- Users Can be Buyer/Seller -->
             <?php if($_SESSION['user_type'] == '2') { ?>

                  <li class="active">
                    <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                  <li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Market Place</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="buyitems_market.php">Buy Items In Market</a></li>
                        <li><i class="fa fa-user"></i><a href="sellitems_market.php">Sell Items In Market</a></li>
                    </ul>
                  </li>


                <li>
                    <a href="manage_inventory.php"> <i class="menu-icon fa fa-dashboard"></i>Manage Inventory </a>
                </li>


                   <li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Manage Transactions</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="buy_items_inventory.php">See Buy Items Inventory</a></li>
                        <li><i class="fa fa-user"></i><a href="manage_transaction.php">Sales Transactions</a></li>
                    </ul>
                  </li>

              <?php } ?>         
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>