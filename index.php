
<!doctype html>
<html class="no-js" lang="en">
<head> 
<title>IDMS</title>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark" style=" background-image: url('images/bg.jpg');">
    <div class="sufee-login d-flex align-content-center flex-wrap" >
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h3 style="color: white">INVENTORY DATABASE <br> MANAGEMENT SYSTEM</h3>
                    <hr  color="red"/>
                </div>
                <div class="login-form">
                    <form action="controller/login.php" method="post" name="login">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="Username" required="true" name="username">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                                <div class="checkbox">
                                    <label class="pull-left">
                                <a href="create_account.php">Create Account:</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">Login</button>     
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
