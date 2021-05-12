<?php require('connection.php'); ?>

<?php


	$deliveryID = $_GET['deliveryID'];
	
	$salesID = $_GET['salesID'];

	$date_received = date('Y-m-d');

	$conn=connect();
	
	$sql = "UPDATE sales SET `sales_status` = '2' WHERE `sales_id` = '$salesID' ";
	$result = mysqli_query($conn, $sql);

	$sqlDelivery = "UPDATE delivery SET `delivery_received` = '$date_received' WHERE `delivery_id` = '$deliveryID' ";
	$result = mysqli_query($conn, $sqlDelivery);

	if($result){
		header("location:../shop_attendant/view_sales.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>