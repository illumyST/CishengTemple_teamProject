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
			/*margin-top: 80px;*/
			height: 30px;
			padding: 10px;
			background: #AC0006;
			color: #fff;
		}
		.content{
			width:70%;
			margin-left: 300px;
		}
		.word{
			width: 70%;
			text-align: center;
			margin-left: 180px;
		}
		.bg{
			padding-top: 30px;
		}
		.slider_container {
		    margin: 30px auto;
		    width: 600px;
		    height: 400px;
		    left: 60px;
		    position: relative;
		    border: 20px solid;    
		    border-color: #fff;
		    border-bottom-width: 150px;
		    background-color: gray;
		    box-shadow: #666 0 0 5px;
		}
		.imgtest{
			width:100%;
			height: 100%;
			background-repeat:no-repeat;
			background-position:center;	
		}
		.slider_container div {
		    position: absolute;
		    top: 0;
		    left: 0;
		    opacity: 0;
		    filter: alpha(opacity=0);
		}
		.slider_container div {
		    -webkit-animation: round 60s linear infinite;
		            animation: round 60s linear infinite;
		}
		@-webkit-keyframes round {
		    1.666666666666666% {
		        opacity: 1;
		        filter: alpha(opacity=100);
		        /* 0 - 1秒 淡入*/
		    }
		    6.6633333333333333% {
		        opacity: 1;
		        filter: alpha(opacity=100);
		        /* 1- 5秒靜止*/
		    }
		    8.33% {
		        opacity: 0;
		        filter: alpha(opacity=0);
		        /* 5-6秒淡出*/
		    }
		}
		@keyframes round {
		    1.666666666666666% {
		        opacity: 1;
		        filter: alpha(opacity=100);
		        /* 0 - 1秒 淡入*/
		    }
		    6.6633333333333333% {
		        opacity: 1;
		        filter: alpha(opacity=100);
		        /* 1- 5秒靜止*/
		    }
		    8.33% {
		        opacity: 0;
		        filter: alpha(opacity=0);
		        /* 5-6秒淡出*/
		    }
		}
		.slider_container div:nth-child(1) {
		    -webkit-animation-delay: 0s;
		            animation-delay: 0s;
		}

		.slider_container div:nth-child(2) {
		    -webkit-animation-delay: 5s;
		            animation-delay: 5s;
		}

		.slider_container div:nth-child(3) {
		    -webkit-animation-delay: 10s;
		            animation-delay: 10s;
		}

		.slider_container div:nth-child(4) {
		    -webkit-animation-delay: 15s;
		            animation-delay: 15s;
		}

		.slider_container div:nth-child(5) {
		    -webkit-animation-delay: 20s;
		            animation-delay: 20s;
		}
		.slider_container div:nth-child(6) {
		    -webkit-animation-delay: 25s;
		            animation-delay: 25s;
		}

		.slider_container div:nth-child(7) {
		    -webkit-animation-delay: 30s;
		            animation-delay: 30s;
		}

		.slider_container div:nth-child(8) {
		    -webkit-animation-delay: 35s;
		            animation-delay: 35s;
		}

		.slider_container div:nth-child(9) {
		    -webkit-animation-delay: 40s;
		            animation-delay: 40s;
		}

		.slider_container div:nth-child(10) {
		    -webkit-animation-delay: 45s;
		            animation-delay: 45s;
		}
		.slider_container div:nth-child(11) {
		    -webkit-animation-delay: 50s;
		            animation-delay: 50s;
		}

		.slider_container div:nth-child(12) {
		    -webkit-animation-delay: 55s;
		            animation-delay: 55s;
		}

		.slider_container span {    
		    color: #000;
		    background: #fff;
		    position: absolute;
		    left: 0%;
		    top: 430px;
		    width: 100%;
		    height: 100px;
		    font-size: 18px;
		    text-align: left;
		    line-height: 1.6em;
		    /*-webkit-transform:scaleY(0);
		        -ms-transform:scaleY(0);
		            transform:scaleY(0);
		    -webkit-transition: all 0.5s ease-in-out;
		            transition: all 0.5s ease-in-out;*/
		}

		.slider_container:hover span {
		    width: 100%;
		    -webkit-transform:scaleY(1);
		        -ms-transform:scaleY(1);
		            transform:scaleY(1);
		}
		.slider_container:hover div {
		    -webkit-animation-play-state: paused;
		            animation-play-state: paused;
		}
		#body{
			background-image: url(img/bg.png);
			background-size: cover;
			background-position: top;
			box-sizing: border-box;
			margin-bottom: -30px;
			padding-bottom: 80px;
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

	
		<h3 class="content_title" style="color:#B22934; font-size: 24px; margin-bottom: 20px;">建築特色 |</h3>
		<div class="slider_container" style="text-align: center; font-size:18px;">
			<div  class='imgtest' style="background-image:url(img/第一張.png)"><br>
				<span class="info">山門是正式進入廟宇的入口，又稱「三門」，有叫「三解脫門」之寓意，即空門、無相門、無作門。大稻埕慈聖宮山門為四柱三間兩樓頂，雕樓鏤洞，金碧輝煌。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第二張.png)"><br>
				<span class="info">佔地廣大的慈聖宮是大稻埕廟宇冠，採兩殿兩廊兩戶龍之建築格局，其總面寬七開間，主殿立面三開間，為「七包三」之形式。一共形成五個天井，兩殿間以過水廊連接護龍。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第三張.png)"><br>
				<span class="info">三川殿屋頂設計採錯落的三川脊式，正脊上飾作以雙龍搶珠與福祿壽三仙剪黏裝飾，下方脊堵作精美八仙坐騎陶瓷裝飾，並有數水魚草，可保防火吉祥。垂脊排頭作三國故事人物泥塑剪黏，造型栩栩如生。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第四張.png)"><br>
				<span class="info">過水門上方有人物獸騎泥塑，邊牆為傳統的斗砌磚牆。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第五張.png)"><br>
				<span class="info">位於三川殿入口中門前立有石獅，公獅居左，張口咆哮，腳踏繡球，狀似威武；雌獅居右，閉口露牙，足扶幼獅，慈和溫柔。</span>
			</div>
			<div  class='imgtest' style="background-image:url(img/第六張.png)"><br>
				<span class="info">慈聖宮廟牌字體圓潤雄厚，以雕金護邊包圍，下方大楣上的字體更具特殊。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第七張.png)"><br>
				<span class="info">三川殿中門前兩側的蟠龍石柱採用晚清雕法，龍體與柱身分離鏤空，下方柱礎為八角造型，柱身可見同治五年字樣。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第八張.png)"><br>
				<span class="info">位於正殿台基前置有一塊龍身浮雕的斜石階「御路」，乃是神明座轎專用的斜坡道，通常雕有雲龍圖案。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第九張.png)"><br>
				<span class="info">正殿屋脊中央有一座七級寶塔，與台北市孔廟形式相似，相傳具有鎮店避邪的作用。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第十張.png)"><br>
				<span class="info">正殿山牆上開有中國結扇子造型的通氣孔。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第十一張.png)"><br>
				<span class="info">懸在屋簷下的桁木稱為「挑擔桁」或「捧前桁」。</span>
			</div>
			<div class='imgtest' style="background-image:url(img/第十二張.png)"><br>
				<span class="info">吊筒又稱為「垂花」，是承擔檐桁的構建之一，慈聖宮的吊桶為八角型，筒上的豎材則雕以仙人，人物栩栩如生。</span>
			</div>
		</div>
</div>

	<footer>
		Copyright &copy; 陳絲彤／林芷葳／朱家彤  2022共同製作
	</footer>
</body>
</html>