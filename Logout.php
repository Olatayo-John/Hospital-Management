<?php
	session_start();

	if (isset($_SESSION["fname"])) {
		session_unset();
		session_destroy();
		header("Location: index.html");
		exit();
	}
?>