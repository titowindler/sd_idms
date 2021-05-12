<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php


	$id=$_GET['remove'];
	
	$conn=connect();
	
	$sql = "DELETE FROM product WHERE product_id = $id";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../shop_attendant/inventory.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>