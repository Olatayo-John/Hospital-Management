<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			include 'connectDB.php';

			function test_input($data){
				$data= trim($data);
				$data= stripcslashes($data);
				$data= htmlentities($data);
				return $data;
			}

			$idnum= test_input($_POST["idnum"]);
			$pwd= test_input($_POST["pwd"]);

			$sql= " SELECT * from admin WHERE idnum='$idnum' ";
			$result= mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) < 1 ) {
 				header("Location: Homepage.html?invalid-user");
 				exit();
 			}else{
 				if ($row= mysqli_fetch_assoc($result)){
 					if ($pwd !== $row["password"]) {
 						header("Location: Homepage.html?invalid-pwd");
 						exit();
 					}elseif ($pwd == $row["password"]) {
 						$_SESSION["id"]= $row["id"];
						$_SESSION["fname"]= $row["fname"];
						$_SESSION["lname"]= $row["lname"];
						$_SESSION["idnum"]= $row["idnum"];

						$psql= "SELECT * FROM patient;";
						$presult= mysqli_query($conn, $psql);

						if (mysqli_num_rows($presult) < 1 ) {
							header("Location: AdminPage.php?no_patients");
 							exit();
						}else{
							$prow= mysqli_fetch_assoc($presult);
	 						header("Location: AdminPage.php?loginsuccess");
	 						exit();
						}
		 			}
		 		}
		 	}


	}else{
		header("Location: Homepage.html");
		exit();
	}
?>
