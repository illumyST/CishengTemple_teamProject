<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account Registration</title>
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
	</style>
</head>
<body>
	<header id="header">
		<div></div>
		<nav class="container" >
     		<a href="home.php">
     			<img src=img/logo.svg>
     		</a>
			<ul>
		    	<li><a href="home.php">首頁</a></li>
		    	<li><a href="history.php">廟宇介紹</a></li>
		        <li><a href="lantern.php">我的祈福燈</a></li>
		        <li><a href="login.php">我的帳號</a></li>
		  	</ul>
		</nav>
	</header>
	
	<form method="POST" action="registration_action.php">
	姓名 <input type="text" name="name"><br>
	暱稱 <input type="text" name="nickname"><br>
	帳號 <input type="char" name="username"><br>
	密碼 <input type="password" name="password"><br>
	Email <input type="email" name="email"><br>
	<input type="submit">
	</form>
	
	<footer>
		Copyright &copy; 陳絲彤／林芷葳／朱家彤  2022共同製作
	</footer>
</body>
</html>