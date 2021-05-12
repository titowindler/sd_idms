<?php require('connection.php'); ?>

<?php

    $conn=connect();


	$customerID=$_POST['customerID'];
	$salesID	= $_POST['salesID'];

	$delivery_initiated = $_POST['delivery_initiated'];

	$delivery_remarks = $_POST['delivery_remarks'];

	$sqlInsert = "INSERT INTO delivery (delivery_id,customer_id,delivery_initiated,delivery_received,delivery_remarks,delivery_fee,sales_id,delivery_status) VALUES (NULL,'$customerID','$delivery_initiated','0000-00-00','$delivery_remarks','50','$salesID',0)";
	$resultInsert = mysqli_query($conn,$sqlInsert);

	$updateSales = "UPDATE sales SET sales_status = '1' WHERE sales_id = '$salesID' ";
	$resultSales = mysqli_query($conn,$updateSales);

	if($resultInsert){
		header("location:../customer/my_orders.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>