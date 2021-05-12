<?php session_start(); ?>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 

                        
                <?php if($_SESSION['u_type'] == '2') { ?> 
                <a class="navbar-brand">Shop Attendant</a>
               <?php } ?> 

                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

         
            <!-- Users Can be Buyer/Seller -->
             <?php if($_SESSION['u_type'] == '2') { ?>

                 <li class="active">
                    <a href="view_sales.php"> <i class="menu-icon"></i>View Sales</a>
                 </li>

                 <li class="active">
                    <a href="inventory.php"> <i class="menu-icon"></i>Update Inventory</a>
                 </li>

              <?php } ?>         
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>