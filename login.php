<?php 

include 'source/config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

	$username = $dbconn->real_escape_string(htmlspecialchars($_POST['username']));
	$password = $dbconn->real_escape_string(htmlspecialchars($_POST['password']));

	$check = $conn->prepare("SELECT * FROM users WHERE username = ?");
	$check->bind_param('s', $username);

	if ($check->execute()){
		$result = $check->get_result();
		$checkNum = $result->num_rows;
		if ($checkNum != 1){
			echo '<script>
				alert("Woops! Email or Password is Wrong.")
				window.location.href = "sign.php";
			</script>';
		} else {
			$output = $result->fetch_assoc();
			if (password_verify($password, $output['password'])) {
				$_SESSION['username'] = $output['username'];
				$_SESSION['email'] = $output['email'];
				$_SESSION['logged'] = true;
				header("Location: welcome.php");
			} else {
				echo '<script>
					alert("Woops! Email or Password is Wrong.")
					window.location.href = "sign.php";
				</script>';
			}
		}
	} else {
		echo '<script>
			alert("Woops! Something Went Wrong.")
			window.location.href = "sign.php";
		</script>';
	}
} else {
	header("Location: index.php");
}

?>