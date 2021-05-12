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


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h3 style="color: white">INVENTORY DATABASE <br> MANAGEMENT SYSTEM</h3>
                    <hr  color="red"/>
                </div>
                <div class="login-form">
                    <h6>Login Form</h6>
                    <hr>
                    <form action="controller/create_account.php" method="post">
                        <p style="font-size:16px; color:red" align="center"></p>
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username" required="yes">
                                 </div>
                                  <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="yes">
                                 </div>
                            </div>
                        </div>
                         <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                    <label>Firstname</label>
                                    <input type="text" class="form-control" placeholder="Firstname" name="firstname" required="yes">
                                 </div>
                                  <div class="col-md-6">
                                    <label>Lastname</label>
                                    <input type="text" class="form-control" placeholder="Lastname" name="lastname" required="yes">
                                 </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="row">
                                  <div class="col-md-7">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" required="yes">
                                 </div>
                                  <div class="col-md-5">
                                     <label>Contact Number</label>
                                        <input type="text" class="form-control" placeholder="Contact Number" name="contact" required="yes">
                                 </div>
                            </div>
                        </div>
                          <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Address" name="address" required="yes">
                                 </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-success" style="width:100px" name="submit">Submit</button>
                            <a href="index.php" class="btn btn-danger" style="width:100px">Cancel</a>
                        </div>
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
