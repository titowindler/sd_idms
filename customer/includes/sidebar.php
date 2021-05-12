<?php session_start(); ?>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 

               <?php if($_SESSION['u_type'] == '1') { ?> 
                <a class="navbar-brand">Customer</a>
               <?php } ?>

         
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

            <!-- Admin -->
             <?php if($_SESSION['u_type'] == '1') { ?> 

                <li class="active">
                    <a href="browse_products.php"> <i class="menu-icon"></i> Browse Products</a>
                </li>

                 <li class="active">
                    <a href="my_orders.php"> <i class="menu-icon"></i> My Orders </a>
                </li>


                <?php } ?>


       
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>