<!-- $today = date('Y-m-d');
 echo $today; -->
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
		#body{
			min-height:550px; 
			margin-bottom: -30px;
			padding-bottom: 20px;
			background-image: url(img/bg.png);
			background-size: cover;
			background-position: top;
			box-sizing: border-box;
			width:60%;
			margin: 20px auto;
			border-radius:20px;
		}
		#formbox{

		}
		.buttons{
			padding: 6px 8px;
			margin-bottom: 20px;
			font-size: 18px;
			border-radius:10px;
			color: #fff;
			background: #AC0006;
			font-size: larger;
			border: none;
			cursor: pointer;
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

	<main id='body' >
		<div id='formbox' class='container'>
			<h2>請登入您的帳號密碼</h2>
			或<a href="registration.php">前往註冊</a><br>
			<form method="POST" action="login_check.php">
			帳號 <input type="text" name="username"><br>
			密碼 <input type="password" name="password"><br>
			<input class="buttons" type="submit" value="登入">
			</form>
		</div>
	</main>


	<footer>
		Copyright &copy; 陳絲彤／林芷葳／朱家彤  2022共同製作
	</footer>
</form>
</body>
</html>