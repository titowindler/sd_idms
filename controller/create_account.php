<?php require('connection.php'); ?>

<?php


	$username=$_POST['username'];
	$password=$_POST['password'];
	$customer_fname=$_POST['firstname'];
	$customer_lname=$_POST['lastname'];
	$customer_email=$_POST['email'];
	$customer_address=$_POST['address'];
	$customer_contact=$_POST['contact'];

	$conn=connect();
	
	$sql = "INSERT INTO customer (customer_id,username,password,customer_fname,customer_lname,customer_contact,customer_address,customer_email)
	 VALUES (NULL,'$username','$password','$customer_fname','$customer_lname','$customer_contact','$customer_address','$customer_email')";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../index.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>