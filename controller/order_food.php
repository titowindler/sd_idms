<?php require('connection.php'); ?>

<?php

    $conn=connect();

	$customerID=$_POST['cusID'];
	$salesID	= $_POST['sendID'];

	$order_quantity = $_POST['order_quantity'];


	$sqlGetProd = "SELECT * FROM product WHERE product_id = '$salesID' ";
	$resultGetProd = mysqli_query($conn,$sqlGetProd);

	$row = mysqli_fetch_assoc($resultGetProd);

	// for profit
	$profit = ($order_quantity * $row['product_price']) + 50;

	// for deduction
	$new_stock_qty =  $row['stocks_qty'] - $order_quantity;

	$sqlInsert = "INSERT INTO sales (sales_id,customer_id,product_id,qty_sold,profit,sales_status) VALUES (NULL,'$customerID','$salesID','$order_quantity','$profit',0)";
	$resultInsert = mysqli_query($conn,$sqlInsert);

	$sqlUpdate = "UPDATE product SET `stocks_qty` = '$new_stock_qty' WHERE `product_id` = '$salesID' ";
	$resultUpdate = mysqli_query($conn,$sqlUpdate);


	if($resultInsert){
		header("location:../customer/my_orders.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>