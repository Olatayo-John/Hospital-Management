<?php
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		include 'connectDB.php';

		function test_input($data){
			$data= stripcslashes($data);
			$data= htmlentities($data);
			$data= trim($data);
			return $data;
		}

		$email = test_input($_POST['email']);
		$pwd = test_input($_POST['pwd']);

		$sql = "SELECT * FROM patient WHERE email='$email';";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) < 1) {
			header("Location: patientlogin.html?invalid-user");
			exit();
		}else{
			if ($row=mysqli_fetch_assoc($result)) {
				if ($pwd !== $row["pwd"]) {
					header("Location: patientlogin.html?invalid-password");
					exit();
				}elseif ($pwd == $row["pwd"]) {
					$_SESSION["id"]= $row["id"];
					$_SESSION["email"]= $row["email"];
					$_SESSION["fname"]= $row["fname"];
					$_SESSION["lname"]= $row["lname"];
					header("Location: patientpage.php?login-success");
					exit();
				}
			}
		}
	}else{
		header("Location: patientlogin.html");
		exit();
	}
?>