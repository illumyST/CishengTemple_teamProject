<?php  
	$conn = mysqli_connect("localhost","root","root","user_information");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select * from main_info where username='$username'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			if (($row["password"]) == ($password)) {
					// echo "恭喜登入";
					// ob_start();
					setcookie("username", $row["username"], time()+3600);
					header("location: afterlogin.php");
			}
			else{
				echo "<script>alert('密碼錯誤'); location.href ='login.php';</script>";	
				// echo "密碼錯誤";
				// header("location: ");

			}
		}
	}
	else
	{
		echo "<script>alert('此帳號尚未註冊，前往註冊'); location.href ='registration.php';</script>";
	}
	mysqli_close($conn);
?>