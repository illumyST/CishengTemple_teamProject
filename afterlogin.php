<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/title icon.png" rel="shortcut icon"/>
	<title>大稻埕慈聖宮</title>
	<style type="text/css">
		*{
			margin:0;
			padding: 0;
			font-family: sans-serif;
			list-style: none;
			/*text-decoration: none; */
		}
		body{
			min-height: 100%;
			position: relative; 
		}
		.container{
			margin: 0 auto;
			width: 80%;
		}
		header{
			background: #F4F4F4;
			margin-bottom: 30px;
		}
		header div{
			height: 6px;
			background: #B22934;
		}
		nav{
			height: 110px;
		}
		nav img {
			float: left;
			height: 75%;
			padding-top: 12px;
		}
		nav ul{
			float: right;
			display: flex;
			line-height: 140px;
			font-size: 16pt;
		}
		nav ul li a{
			padding:10px 14px;
			color: #AC0006;
			text-decoration: none;
		}
		nav ul li a:hover{
			background: #AC0006;
			
			color: white;
		}
		
		footer{
			text-align: center;
			margin-bottom: 0px;
			height: 30px;
			padding: 10px;
			background: #AC0006;
			color: #fff;
		}

		main{
			margin-top: 60px;
			text-decoration: none;
			background: #F4E2DE;
			width:40%;
			/*margin: 30px auto;*/
			border-radius:10px;
			display: flex;
			justify-content: center;
		}
		#body{
			min-height:540px; 
			margin-bottom: -30px;
			padding-bottom: 20px;
			background-image: url(img/bg.png);
			background-size: cover;
			background-position: middle;
			box-sizing: border-box;
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		#hello{
			text-align: center;
			font-size: 24px;
			padding: 15px; 
		}
		#hello p{
			margin-top: 10px;
			margin-bottom: 10px;
			font-size: 20px;
		}
		section{
			text-decoration: none;
			/*background: #F4E2DE;*/
			width:40%;
			margin: 30px auto;
			border-radius:10px;
			display: flex;
			justify-content: center;
		}
		#submit{
			margin: 0 auto;
			background-color: #AC0006;
			color: white;
			width: 100%;
			font-size: 18px;
			padding:6px;
			border-radius: 5px; 
			border: none;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<header id="header">
		<div></div>
		<nav class="container" >
     		<a href="index.html">
     			<img src=img/logo.svg>
     		</a>
			<ul>
		    	<li><a href="index.html">首頁</a></li>
		    	<li><a href="history.php">廟宇介紹</a></li>
		        <li><a href="lantern.php">我的祈福燈</a></li>
		        <li><a href="MyAccount.php">我的帳號</a></li>
		  	</ul>
		</nav>
	</header>

	<?php
		$conn = mysqli_connect("localhost","root","root","user_information");
		$username = $_COOKIE['username'];

		$sql_m = "select * from main_info where username='$username'";
		$res_m = mysqli_query($conn,$sql_m);
		$row_m = mysqli_fetch_assoc($res_m);

		$sql_l = "select * from lantern where username='$username'";
		$res_l = mysqli_query($conn,$sql_l);
		$time = mysqli_num_rows($res_l)-1;

		$nickname = $row_m["nickname"];
		echo "<div id='body'><main>";
		echo "<div id='hello'>${"nickname"}，您好！<p> 您目前的簽到次數為${"time"}次<br>香油錢累積200元"; //印出暱稱
		echo "</p></div></main>";
		echo "<section><a href='lantern.php'><button id='submit' class='submit'>繼續簽到</button></a></section>";
		echo "</div>";
		
	?>

	<footer>
		Copyright &copy; 陳絲彤／林芷葳／朱家彤  2022共同製作
	</footer>
</body>
</html>
