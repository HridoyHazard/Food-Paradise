<?php 

include 'source/config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

	$username = $dbconn->real_escape_string(htmlspecialchars($_POST['username']));
	$email = $dbconn->real_escape_string(htmlspecialchars($_POST['email']));
	$password = $dbconn->real_escape_string(htmlspecialchars($_POST['password']));

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo '<script>
				alert("Invalid Email Address")
				window.location.href = "signup.php";
			</script>';
	}

	$check = $dbconn->prepare("SELECT * FROM users WHERE email = ?");
	$check->bind_param('s', $email);

	if ($check->execute()) {
		$result = $check->get_result();
		$checkNum = $result->num_rows;
		if ($checkNum >	0) {
			echo '<script>
					alert("Email Already Exists")
					window.location.href = "signup.php";
				</script>';
		} else {
			// md5 is already depraceted as secure hashing algorithm - it is not secure anymore
			// use argon2id instead
			$hash = password_hash($password, PASSWORD_ARGON2ID);
			if (password_verify($password, $hash)) {
				$insert = $dbconn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
				$insert->bind_param('sss', $username, $email, $hash);

				if ($insert->execute()) {
					echo '<script>
							alert("Wow! User Registration Completed.")
							window.location.href = "sign.php";
						</script>';
				} else {
					echo '<script>
							alert("Woops! Something Went Wrong.")
							window.location.href = "signup.php";
						</script>';
				}

			} else {
				echo '<script>
						alert("Woops! Something Went Wrong.")
						window.location.href = "signup.php";
					</script>';
			}

		}
	}
} else {
	header("Location: index.php");
}
?>
