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
        $_SESSION['fullname'] = $row['customer_fname'].' '. $row['customer_lname'];
        $_SESSION['u_type'] = 1;
        $found = 1;
        header('location:../customer/browse_products.php'); 
    }
        
    //    var_dump($pass);
    // exit();

    //Fetches from Seller
    $sql = "SELECT * FROM shop_attendant WHERE (`username` LIKE '$user') AND (`password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql); 

     var_dump($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['shop_attendant_id'] = $row['shop_attendant_id'];
        $_SESSION['shop_attendant_name'] = $row['shop_attendant_name'];
        $_SESSION['u_type'] = 2;
        $found = 1;
       header('location:../shop_attendant/view_sales.php');
     }

    //Fetches from Seller
    $sql = "SELECT * FROM supplier WHERE (`username` LIKE '$user') AND (`password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql); 

    var_dump($conn);
    var_dump($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['supplier_id'] = $row['supplier_id'];
        $_SESSION['supplier_name'] = $row['supplier_name'];
        $_SESSION['u_type'] = 3;
        $found = 1;
       header('location:../supplier/raw_goods.php');
     }

  
    if($found != 1){
        echo "fail";
     header('location:../index.php?danger-invalid='.$str);
    } 
  }
}

?>

