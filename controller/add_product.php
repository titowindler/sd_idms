<?php require('connection.php'); ?>

<?php

	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	
	$conn=connect();
	
	$sql = "INSERT INTO product (product_id,product_name,stocks_qty,product_price)
	 VALUES (NULL,'$product_name','0','$price')";
    $result = mysqli_query($conn, $sql);
    $last_id = mysqli_insert_id($conn);
	
	$inventory_id = $_POST['add_stock_qty'];

	$sqlInventory = "SELECT * FROM inventory WHERE inventory_id = '$inventory_id' ";
	$resultInventory = mysqli_query($conn,$sqlInventory);

	while($rowInventory = mysqli_fetch_assoc($resultInventory)) {
		$row_inventory_id = $rowInventory['inventory_id'];
		$row_inventory_stockqty = $rowInventory['inventory_stockqty'];
	}

	$sqlUpdate = "UPDATE product SET `stocks_qty` = '$row_inventory_stockqty' WHERE `product_id` = '$last_id' ";
	$resultUpdate = mysqli_query($conn,$sqlUpdate);

	$sqlInventoryUpdate = "UPDATE inventory SET `inventory_stockqty` = '0' WHERE `inventory_id` = '$inventory_id' ";
    $resultInventoryUpdate = mysqli_query($conn,$sqlInventoryUpdate);

	if($result){
		header("location:../shop_attendant/inventory.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>