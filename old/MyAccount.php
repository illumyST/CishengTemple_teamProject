<?php
	if (isset($_COOKIE['username'])) {
		echo "有登入";
	}
	else{
		header("Location: login.php");
	}
?>