<?php require('connection.php'); ?>

<?php

	$supplier_id = $_POST['supplierID'];
	$stock = $_POST['stock'];
	$raw_goods_name = $_POST['raw_goods_name'];
	
	$conn=connect();
	
	$sql = "INSERT INTO raw_goods (rawgoods_id,rawgoods_name,stock_qty,supplier_id)
	 VALUES (NULL,'$raw_goods_name','$stock','$supplier_id')";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../supplier/raw_goods.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>