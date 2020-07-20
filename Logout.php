<?php
	session_start();

	if (isset($_SESSION["idnum"])) {
		session_destroy();
		header("Location: Homepage.html");
		exit();
	}
?>