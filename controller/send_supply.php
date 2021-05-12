<?php require('connection.php'); ?>

<?php

    $con=connect();

	$shop_attendant_id = $_POST['shopID'];

	$raw_goods_id = $_POST['rawgoodsID'];

	 $getRawGoods = "SELECT * FROM raw_goods WHERE rawgoods_id = '$raw_goods_id' ";
     $resultRawGoods = mysqli_query($con,$getRawGoods);
	 
	 while($rowRawGoods = mysqli_fetch_assoc($resultRawGoods)) {
	 	$rawgoods_id = $rowRawGoods['rawgoods_id'];
	 	$rawgoods_name = $rowRawGoods['rawgoods_name'];
	 	$stock_qty = $rowRawGoods['stock_qty'];
	 }


	$date_sent = date('Y-m-d');

	$sqlInsert1 = "INSERT INTO inventory (inventory_id,inventory_rawgoods_id,inventory_rawgoods,inventory_stockqty,supplier_id,date_received,inventory_status) VALUES(NULL,'$rawgoods_id','$rawgoods_name','$stock_qty',1,'$date_sent',1)";
	$resultInsert1 = mysqli_query($con,$sqlInsert1); 

	$sqlInsert2 = "INSERT INTO supply_history (supply_history_id,shop_attendant_id,raw_goods_id,date_sent) VALUES(NULL,'$shop_attendant_id','$raw_goods_id','$date_sent')";
	$resultInsert2 = mysqli_query($con,$sqlInsert2); 

	$sql = "DELETE FROM raw_goods WHERE rawgoods_id = $raw_goods_id";
	$result = mysqli_query($con, $sql);

	if($result){
		header("location:../supplier/raw_goods.php");
	}else{
		echo "ERROR!". mysqli_error($con);
	}

?>