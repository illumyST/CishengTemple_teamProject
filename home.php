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
		#body{
			min-height:500px; 
			margin-bottom: -30px;
			padding-bottom: 20px;
			background-image: url(img/bg.png);
			background-size: cover;
			background-position: middle;
			box-sizing: border-box;
		}

		#brief{
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		
		#brief #left{
			flex-basis: 800px;
			height: 400px;
			/*background-color: blue;*/
			background-image: url(img/歷史沿革.png);
			background-size: cover;
		}

		#brief #right{
			/*flex-basis: 300px;*/
			height: 400px;
			background-color: red;
		}
		#img{
			margin-bottom: 20px;
		}
		#content{
			font-size: 20px;
			text-align: center;
			margin-bottom: 20px;
		}
		#submit{
			margin: 0 auto;
			background-color: #AC0006;
			color: white;
			width: 100%;
			font-size: 22px;
			padding:6px;
			border-radius: 5px; 
			border: none;
			cursor: pointer;
			margin-bottom: 50px;
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
	<main class="container" id='brief'>
		<div id='img'>
			<img src=img/home.jpg>
		</div>
		<div id='content'>
			大稻埕慈聖宮是大稻埕同安人所拜的媽祖廟，與霞海城隍廟、法主公廟並稱大稻埕三大寺廟。<br>
			本廟除了保持傳統閩式建築特色外，廟口外成群的小吃攤，更是吸引不少信徒前來品嚐道地台灣小吃。
		</div>
		<a href='history.php'><button id='submit' class='submit'>看更詳細介紹</button></a>
	</main>
</div>
	<footer>
		Copyright &copy; 陳絲彤／林芷葳／朱家彤  2022共同製作
	</footer>
</body>
</html>
