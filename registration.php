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
				main{
			text-decoration: none;
			background: #F4E2DE;
			width:40%;
			margin: 30px auto;
			border-radius:20px;
		}
		.title{
			font-size: 20pt;
			color: white;
			text-align: center;
			padding: 10px;
			margin-bottom: 20px;
			background: #AC0006;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
		}
		.form{
			/*margin-left: 100px;
			margin-right: 100px;  */
			width:100%;
			font-size: 20px;
			/*line-height: 2em;*/
		}
		.input_field{
			/*justify-content: center;*/
			margin: 30px 30px;
			border-radius: 8px;
			display: flex;
			/*align-items: center;*/
			background: white;
			padding-left: 10px;
			padding-top: 5px;
			padding-bottom: 5px;
		}

		#submit{
			background: 0;
			padding: 0px;
		}
		.input_field label{
			width:60px;
			color: #AC0006;
		}
		.input{
			width: 150px;
			outline: none;
			border: 1px solid #AC0006;
			font-size: 20px;
			padding:2px 2px;
			border-radius:5px;
		}
		
		.btn{
			width: 100%;
			padding: 8px 10px;
			margin-bottom: 20px;
			font-size: 20px;
			border-radius:10px;
			color: white;
			background: #AC0006;
			font-size: larger;
			border: none;
			cursor: pointer;
		}
		/*.btn:hover{
			background: #F29325;
		}*/
		#navtoregbox{
			text-decoration: none;
			background: #F4E2DE;
			width:40%;
			/*margin: 30px auto;*/
			border-radius:13px;
			margin-bottom: -30px;
		}
		#navtoreg{
			text-decoration: none;
			font-size: 20px;
			color: #AC0006;
			text-align: center;
			padding: 10px;
			margin-bottom: 30px;
		}
		#navtoreg a{
			color: #AC0006;
			font-style: bold;
		}
		#body{
			min-height:520px; 
			margin-bottom: -30px;
			padding-bottom: 20px;
			background-image: url(img/bg.png);
			background-size: cover;
			background-position: middle;
			box-sizing: border-box;
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

	<div id='body'>
		<main>
			<div class="title">
				請填寫註冊資料
			</div>
			<div class="form">
				<form method="POST" action="registration_action.php">
					<div class="input_field">
						<label>姓名</label>
						<input type="text" name="name">
					</div>
					<div class="input_field">
						<label>暱稱</label>
						<input type="text" name="nickname">
					</div>
					<div class="input_field">
						<label>帳號</label>
						<input type="char" name="username">
					</div>
					<div class="input_field">
						<label>密碼</label>
						<input type="password" name="password">
					</div>
					<div class="input_field">
						<label>Email</label>
						<input type="email" name="email">
					</div>
					<div class="input_field" id='submit'>
						<input type="submit" class="btn" value="註冊">
					</div>
				</form>
			</div>
		</main>
	</div>
	
	<footer>
		Copyright &copy; 陳絲彤／林芷葳／朱家彤  2022共同製作
	</footer>
</body>
</html>