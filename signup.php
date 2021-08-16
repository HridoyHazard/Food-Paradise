<?php 

include 'source/config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				$username = "";
				$email = "";
				$_POST['password'] = "";
				echo '<script>alert("Wow! User Registration Completed.")
				 window.location.href = "sign.php";
				 </script>';
			}
			 else {
				echo '<script>alert("Woops! Something Went Wrong.")
				 window.location.href = "sign.php";
				 </script>';
			}
		} else {
			echo '<script>alert("Woops! Email Already Exists.")
				 window.location.href = "sign.php";
				 </script>';
		}
	}

?>
