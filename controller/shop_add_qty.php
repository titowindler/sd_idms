<?php require('connection.php'); ?>

<?php

	$id = $_POST['id'];

	$conn=connect();
	
	
	$inventory_id = $_POST['add_stock_qty'];

	$sqlInventory = "SELECT * FROM inventory WHERE inventory_id = '$inventory_id' ";
	$resultInventory = mysqli_query($conn,$sqlInventory);

	while($rowInventory = mysqli_fetch_assoc($resultInventory)) {
		$row_inventory_id = $rowInventory['inventory_id'];
		$row_inventory_stockqty = $rowInventory['inventory_stockqty'];
	}

	$sqlUpdate = "UPDATE product SET `stocks_qty` = '$row_inventory_stockqty' WHERE `product_id` = '$id' ";
	$resultUpdate = mysqli_query($conn,$sqlUpdate);

	$sqlInventoryUpdate = "UPDATE inventory SET `inventory_stockqty` = '0' WHERE `inventory_id` = '$inventory_id' ";
    $resultInventoryUpdate = mysqli_query($conn,$sqlInventoryUpdate);

	
	if($resultUpdate){
		header("location:../shop_attendant/inventory.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>