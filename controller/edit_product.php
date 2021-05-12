<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$id = $_POST['id'];
	$prod_name = $_POST['product_name'];
	$price = $_POST['price'];

	$conn=connect();
	
	$sql = "UPDATE product SET `product_name` = '$prod_name' , `product_price` = '$price' WHERE `product_id` = '$id'";

	$result = mysqli_query($conn, $sql);	

	if($result){
		header("location:../shop_attendant/inventory.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>