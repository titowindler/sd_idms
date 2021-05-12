<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$name=$_POST['name'];
	$id=$_POST['editId'];
	$category=$_POST['category'];

	$conn=connect();
	
	$sql = "UPDATE inventory SET `inventory_name` = '$name' , `categoryId` = '$category' WHERE `inventory_id` = '$id'";

	$result = mysqli_query($conn, $sql);	

	if($result){
		header("location:../manage_inventory.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>