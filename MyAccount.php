<?php
	if (isset($_COOKIE['username'])) {
		header("Location: afterlogin.php");
	}
	else{
		header("Location: login.php");
	}
?>