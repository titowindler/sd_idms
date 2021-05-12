<?php 

require("connection.php");
session_start();


if(isset($_POST['login'])) {
    login();
}

function login() {
$found = 0;
$secret = "test123"; // change password soon
$str = "Invalid Username or Password!";

if(isset($_POST['username']) && isset($_POST['password'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $conn = connect();
    

  //Fetches from Customer
    $sql = "SELECT * FROM customer WHERE (`username` LIKE '$user') AND (`password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['customer_id'] = $row['customer_id'];
        $_SESSION['uName'] = $row['first_name'].' '. $row['last_name'];
        $_SESSION['user_type'] = 1;
        $found = 1;
        header('location:../views/customer/products.php'); 
    }
        
    //    var_dump($pass);
    // exit();

    //Fetches from Seller
    $sql = "SELECT * FROM seller WHERE (`username` LIKE '$user') AND (`password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql); 

     var_dump($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['seller_id'] = $row['seller_id'];
        $_SESSION['uName'] = $row['seller_name'];
        $_SESSION['user_type'] = 2;
        $found = 1;
       header('location:../views/seller/products.php');
     }

    //for admin
    // $sql = "SELECT * FROM admin WHERE (`username` LIKE '$user') AND (`password` LIKE '$pass')";
    // $result = mysqli_query($conn, $sql); 
    // if(mysqli_num_rows($result) > 0) {
    //     $row = mysqli_fetch_assoc($result);
    //     $_SESSION['logged_in'] = $secret;
    //     $_SESSION['admin_id'] = $row['admin_id'];
    //     $_SESSION['uName'] = $row['a_first_name'].' '.$row['a_last_name'];
    //     $found = 1;
    //     header('location:../views/admin/index.php');
    // }

    if($found != 1){
        echo "fail";
     header('location:../index.php?danger-invalid='.$str);
    } 
  }
}

?>

