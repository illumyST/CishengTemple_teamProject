<?php  
	$conn = mysqli_connect("localhost","root","root","user_information");
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	if(!$conn){
		echo"Failure";
	}else{
		// echo "Success";
		echo "<script>alert('註冊成功，請登入！'); location.href ='login.php';</script>";
	}
	$sql = "insert into main_info(name, nickname, username, password, email) values('$name', '$nickname', '$username', '$password', '$email')";
	$sql2 = "insert into lantern(username, date, times, memo) values('$username', '1990-01-01', '0', '$nickname')";
	//$sql = "update account set Name='John' where Id='3'";
	// $sql = "delete from account where ID='3'";
	mysqli_query($conn,$sql);
	mysqli_query($conn,$sql2);
	// $sql = "select * from account";
	// $result = mysqli_query($conn,$sql);
	// while ($row = mysqli_fetch_array($result)) {
	// 	echo "$row[ID] - $row[Name] <br>";
	// }
?>