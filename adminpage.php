<?php 
	session_start();

	if (!isset($_SESSION["idnum"])) {
		header("Location: Homepage.html");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="css/PatientLogin.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
		<div class="navbar-brand">
			<img src="image/moose.jpg" width="130px"><h1 class="navbar-brand logo">Hospital Website</h1>
		</div>
		<button class="navbar-toggler" data-target="#coll" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="coll">
			<ul class="navbar-nav nav-pills nav-tabs ml-auto">
				<li class="nav-item">
					<a href="logout.php" class="nav-link" style="color: #F44336;font-weight: bold;">Log out</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Patient</a>
					<div class="dropdown-menu">
						<a href="patientlogin.html" class="dropdown-item">Patient Login</a>
						<a href="patientreg.html" class="dropdown-item">Patient Registration</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="gallery.html" class="nav-link">Gallery</a>
				</li>
				<li class="nav-item">
					<a href="contactus.html" class="nav-link">Contact Us</a>
				</li>
				<li class="nav-item">
					<a href="aboutproject.html" class="nav-link">About Project</a>
				</li>
		</ul>
		</div>
	</nav><br>

	<div class="container">
		<?php
		echo $_SESSION["idnum"];
		echo "<br>";
		echo "You are logged on";
	?>

	</div>
</body>
</html>