<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php


	$userID = $_POST['userId'];
	$category_name=$_POST['category'];
	$inventory_name=$_POST['name'];
	$status = '0';

	$filename = "";
		//check if file uploaded exists and there are no errors during upload
		if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

			if($_FILES['image']['type'] == "image/png" || $_FILES['image']['type'] == "image/jpeg"){

				if($_FILES['image']['type'] < 10000000){
					//define the new location and name of the photo (images/1001_mypic.png)
					$filename = "../images/" .$name."_".$_FILES['image']['name'];
					//tell PHP to move the file from where and to where
					move_uploaded_file($_FILES['image']['tmp_name'], $filename);	
				}
			}
		}
	
	$conn=connect();
	
	$sql = "INSERT INTO inventory (inventory_id,categoryId,userId,inventory_name,inventory_image,inventory_status)
	 VALUES (NULL,'$category_name','$userID','$inventory_name','$filename','$status')";
	$result = mysqli_query($conn, $sql);


	if($result){
		header("location:../manage_inventory.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>