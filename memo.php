<?php
	$conn = mysqli_connect("localhost","root","root","user_information");
	$text = $_POST['text'];
	$username = $_COOKIE['username'];
	// $username = "test1";
	$date = date("Y-m-d");
	$data = "select * from lantern where username='$username'";
	$result01 = mysqli_query($conn,$data);
	$num = mysqli_num_rows($result01)-1;
	$data2 = "select * from lantern where username='$username' and times='$num'";
	$result03 = mysqli_query($conn,$data2);
	$row = mysqli_fetch_assoc($result03);
	// $d = $row["date"];
		if (($row["date"]) == ($date)) {
			echo "<script language='JavaScript'>;alert('今天已經簽到過了喔！');location.href='lantern.php';</script>;";
		}
		else{
			$times = $num+1;
			$sql02 = "insert into lantern(username, date, times, memo) values('$username', '$date', '$times', '$text')";
			$result02 = mysqli_query($conn,$sql02);
			header("Location: lantern.php"); 
		}
	
?>