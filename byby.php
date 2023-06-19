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
			text-decoration: none; 
			
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
		#Sidebar{
			width:300px;
			float:left;
			height:680px;
			text-align:center;
			line-height:40px;
			font-size:18px;
			color:#B22934;
			font-weight:bold;
			background-color:#white;
		}
		footer{
			text-align: center;
			margin-bottom: 0px;
			height: 30px;
			padding: 10px;
			background: #AC0006;
			color: #fff;
		}
		.content{
			width:90%;
			line-height:35px;
			height: 780px;
		}
		#body{
			background-image: url(img/bg.png);
			background-size: cover;
			background-position: top;
			box-sizing: border-box;
			margin-bottom: -30px;
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
		        <li><a href="MyAccount.php">我的帳號</a></li>
		  	</ul>
		</nav>
	</header>

<div id='body'>	
	<div id="Sidebar">
		<ul class="menu" style="text-align: center; ">
			
			<li><a href="history.php" style="color:#B22934;"><img src="img/title icon.png" style="height:30px ;margin-right: 7px;">歷史沿革</a></li>
			
			<li><a href="structure.php" style="color:#B22934"><img src="img/title icon.png" style="height:30px ;margin-right: 7px;">建築特色</a></li>

			<li><a href="byby.php" style="color:#B22934"><img src="img/title icon.png" style="height:30px ;margin-right: 7px;">參拜順序</a></li>
			
			<li><a href="commute.php" style="color:#B22934"><img src="img/title icon.png" style="height:30px ;margin-right: 7px;">交通資訊</a></li>
			
		</ul>
	</div>

	<div class="content">
		<h3 class="content_title" style="color:#B22934; font-size: 24px; margin-bottom: 20px;">參拜順序 |</h3>
		<div style="text-align: center; font-size:18px;">
			<img src=img/參拜順序.png>	
			<li>大稻埕慈聖宮（媽祖宮）</li>	
			<li>參拜順序圖</li>	
			<li>共13個香爐每爐1柱香</li>	
		</div>       
	</div>
</div>
	<footer>
		Copyright &copy; 陳絲彤／林芷葳／朱家彤  2022共同製作
	</footer>
</body>
</html>