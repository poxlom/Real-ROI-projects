<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lp/pages/kijutsu/Mobile_Detect.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lp/pages/kijutsu/kij.php';
$c1 = isset($_GET["c1"]) ? $_GET["c1"] : "";
$c2 = isset($_GET["c2"]) ? $_GET["c2"] : "";
$c3 = isset($_GET["c3"]) ? $_GET["c3"] : "";
$oid = generateGuid();
$step1_link = "http://www.trackinglx.com/aff_c?offer_id=8&aff_id=1021&url_id=2&aff_sub={$c1}&aff_sub2={$c2}&aff_sub3={$c3}&aff_sub4={$oid}";


$step1_pixels = getOfferByName("jet bingo");
include_once $_SERVER['DOCUMENT_ROOT'] . '/lp/pages/kijutsu/kijutsu-link-prepend.php';
$url = $step1_link;
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
    <meta http-equiv="content-type" content="text/html" />
    <title>Jet Bingo</title>
    <link rel="stylesheet" href="css/style.css?v=3" type="text/css" />
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/accounting.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=49152,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->

</head>
<body>
<center>
<a href="<?php echo $url; ?>">
<div id="main" style="background-repeat:no-repeat">
    <span class="prizeraw" style="display:none;">1624649.00</span>
    <div id="prize-holder" xstyle="width:220px">$<span class="prize"></span></div>
    <div id="button"><a href="<?php echo $url; ?>"><img src="images/button.png" onmouseover="this.src='images/button-hover.png'" onmouseout="this.src='images/button.png'"/></a></div>
</div>
</a>
<script>
function getRandomInt (min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
    (function loop() {
        var rand = Math.round(Math.random() * (3000 - 500)) + 1500;
        setTimeout(function() {
            var money = parseInt($('.prizeraw').html());
            var theMoney = money+getRandomInt(10, 122);

            $('.prizeraw').html(theMoney);
            $('.prize').html(accounting.formatMoney(theMoney, " "));
            loop();  
        }, rand);
    }());
    var theMoney = $('.prizeraw').html();
    var min = 100;
    var max = 1000;
    Math.floor(Math.random() * (max - min + 1) + min)	    	
    
    $('.prize').html(accounting.formatMoney(theMoney, " "));
</script>
</center>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43450384-1', 'dailywinspiration.com');
  ga('send', 'pageview');

</script>

</body>
</html>
