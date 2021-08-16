<?php
	session_start();
	include_once('source/config.php');

	if(isset($_POST['add'])){
		$servicename = $_POST['servicename'];
		$orgname = $_POST['orgname'];
		$payment = $_POST['payment'];
		$sql = "INSERT INTO members (servicename, orgname, payment) VALUES ('$servicename', '$orgname', '$payment')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Services added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: service.php');
?>