<?php
	session_start();
	include_once('source/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$servicename = $_POST['servicename'];
		$orgname = $_POST['orgname'];
		$payment = $_POST['payment'];
		$sql = "UPDATE members SET servicename = '$servicename', orgname = '$orgname', payment = '$payment' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Service updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Service to edit first';
	}

	header('location: service.php');

?>