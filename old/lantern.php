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
		.container{
			margin: 0 auto;
			width: 80%;
		}
		header{
			background: #F4F4F4;
			/*margin-bottom: 30px;*/
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
		
/*-----------------------------------------------*/

		#lanstibox{
			background: #282828;
			min-height: 400px;
			padding-top: 40px;
		}
		#stick{
			width: 100%;
			position:absolute;
			z-index: 1; 
		}
		#lanstibox #lanbox{
			width: 100%;
			display: flex;
			justify-content:space-around;
			position:absolute;
			z-index: 2;
		}
		#lanbox div{
			position: relative;
  		}
  		#lanbox div:hover{
  			cursor: pointer;
  		}
  		#lanbox div:hover::before{
				position: absolute;
				transform: translateY(330px);
				width: 300px;
				content: attr(data-hover);
				font-size: 20px;
				line-height: 1.8em;
				color: #fff;
				background: rgba(,252,152,8,0.7);
				left: 0px;
				vertical-align: bottom;
				border-radius: 10px;
				opacity: 0.5px
				/*z-index: 2;*/

  		}

/*---------------- submit ------------------*/

  		#signbox{
  			height: 150px;
  			margin-bottom: -30px;
  			display: flex;
  			flex-direction:column;
			align-items: center;
			justify-content: center;
			background: #282828;
			padding-bottom: 30px;
  		}
  		#submit{
  			padding: 6px 8px;
			margin-bottom: 20px;
			font-size: 18px;
			border-radius:10px;
			color: #555;
			background: #fff;
			font-size: larger;
			border: none;
			cursor: pointer;
  		}
  		#text{
  			padding: 6px 8px;
  			height: 50px;
  			width: 300px;
  			font-size: 12px;
  			border-radius:10px;
			color: #555;
			background: #fff;
			font-size: larger;
			border: none;
			outline:none;
			margin-bottom: 20px;
			margin-right: 20px;
  		}

  		#textinput{
			padding: 6px 8px;
			margin-bottom: 20px;
			font-size: 18px;
			border-radius:10px;
			color: #555;
			background: #fff;
			font-size: larger;
			border: none;
			cursor: pointer;
  		}
  		/*#textbox{
  			display: none;
  		}*/
  		.popuptext{
  			display: flex;
  			flex-direction:row;
  			align-items: flex-end;
  			visibility: hidden;
  		}
  		.submit{
  			visibility: show;
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
		        <li><a href="login.php">我的帳號</a></li>
		  	</ul>
		</nav>
	</header>
	
	<main id='lanstibox'>
		<img id='stick' src="img/stick.svg">
		<section id='lanbox'>
			<?php
				$conn = mysqli_connect("localhost","root","root","user_information");
				$lan = "select * from lantern where username='test1'";
				$res = mysqli_query($conn,$lan);
				$sum = mysqli_num_rows($res); //lantern資料庫中有幾筆資料

				for($i=1; $i<=$sum; $i++){
					$sql = "select * from lantern where username='test1' and times='{$i}'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
					//${"date".$i} = $row["date"];
					${"memo".$i} = '【'.$row["date"].'】'.$row["memo"];//設定動態變數存取每個memo
					echo "<div data-hover='${"memo".$i}'>";
					echo "<img src='img/l_lantern.png'>";
					echo "</div>";
				}
				for($i=1; $i<(9-$sum); $i++){
					echo "<div>";
					echo "<img src='img/lantern.png'>";
					echo "</div>";
				}
			?>
		</section>
	</main>
	<main id='signbox'>
		<p id="demo"></p>
		<p id="textbox" class="popuptext">
			<input id='text' type="text" name="text" placeholder='記錄一下自己的心情吧！'>
			<input id='textinput' type="submit" name="textinput" value="輸入">
		</p>
		<input onclick="getLocation()" id='submit' class='submit'type="submit" value='GPS定位簽到'>
		
	</main>
		<script>
			// console.log('yes!!');
			var x = document.getElementById("demo");
			function getLocation() {
  				if (navigator.geolocation) {
    				navigator.geolocation.getCurrentPosition(showPosition);
    				// console.log('yes1');
    				// console.log('yes11');
  				} else { 
    				x.innerHTML = "Geolocation is not supported by this browser.";
  				}
			}

			function showPosition(position) {

  				// var NS = position.coords.latitude;
  				// var WE = position.coords.longitude;
  				// if ((NS == 25.0249216)&&(WE == 121.5299584)) {
					var checkin = document.getElementById("textbox").classList;
					var u = document.getElementById("demo").classList;
					checkin.toggle("popuptext");
					u.toggle("submit");
					// console.log('yes3');
  				}
  				// else{
  				// 	console.log('yes4');
  				// 	x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
  				// }
			
		</script>
	

	<footer>
		Copyright &copy; 陳絲彤／林芷葳／朱家彤  2022共同製作
	</footer>
</body>
</html>
