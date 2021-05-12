<?php session_start(); ?>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 

                        
                <?php if($_SESSION['u_type'] == '3') { ?> 
                <a class="navbar-brand">Supplier</a>
               <?php } ?>

                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

         
            <!-- Users Can be Buyer/Seller -->
             <?php if($_SESSION['u_type'] == '3') { ?>

                <li class="active">
                    <a href="raw_goods.php"> <i class="menu-icon"></i>Raw Goods</a>
                </li>

                <li class="active">
                    <a href="view_supply_history.php"> <i class="menu-icon"></i>View Supply History</a>
                </li>

              <?php } ?>         
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>