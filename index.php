<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>台南 到此一遊旅遊網yabe</title>
<meta name="description" content="jqFloat.js is a jQuery plugin that able to make any HTML objects appear to be floating on your webpage."/>
<meta name="keywords" content="jqfloat.js, jquery, plugin, floating, animation, cloud"/>
<link rel="shortcut icon" href="http://www.inwebson.com/wp-content/themes/inwebson2/favicon.ico" />
<link rel="stylesheet" href="style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="jqfloat.min.js"></script>
<script>
$(document).ready(function() {
	
	//vendor script
	$('header')
	.css({ 'top':-70 })
	.delay(500)
	.animate({'top': 0}, 800);
	
	$('footer')
	.css({ 'bottom':-40 })
	.delay(500)
	.animate({'bottom': 0}, 800);
	
	//jqfloat.js script
	$('.cloud').each(function() {
		$(this).jqFloat({
			width:Math.floor(Math.random()*10)*10,
			height:10,
			speed:Math.floor(Math.random()*10)*100 + 500
		});
	});	
	$('#sun').jqFloat({
		width:10,
		height:50,
		speed:1800
	});
	$('.butterfly').jqFloat({
		width:400,
		height:100,
		speed:1500
	});
	$('#snail, #message').jqFloat('stop',{
		width:5,
		height:0,
		speed:30
	});
	$('#snail, #message').hover(function() {
		$(this).jqFloat('play');
	}, function() {
		$(this).jqFloat('stop');
	});
	
	var clicked = false;
	//define balloon attribute
	$('#balloon').jqFloat('stop',{
		width:5,
		height:30,
		speed:1500,
		minHeight:300
	});
	$('#balloon').on('click', function() {
		clicked = !clicked;
		if(clicked)
			$(this).jqFloat('play');
		else 
			$(this).jqFloat('stop');
	});
	$('#social').jqFloat({
		width: 10,
		height: 10,
		speed: 1500
	});
});
</script>
</head>
<body>
<!-- Header -->
<header>
	<h1>Final Demo for JAVA</h1>

	<div class="clearfix"></div>
</header>

<!-- Content -->
<section id="wrapper">
	<div id="sky">
		<div id="cloud1" class="cloud"></div>
		<div id="cloud2" class="cloud"></div>
		<div id="cloud3" class="cloud"></div>
		<div id="cloud4" class="cloud"></div>
		<div id="sun"></div>
	</div>
	<div id="ground">
		<div id="snail"></div>
		<div id="message">Don't touch me!!!</div>
		<div id="fly1" class="butterfly"></div>
	</div>
	<div id="balloon">
	  <form name="form1" method="post" action="">
	   
      </form>
	</div>
	<div id="iefix"></div>
	<div id="holder">
	  <p class="team">&nbsp;</p>
	  <p class="FF">第四組</p>
		<p class="FF">組員 :<span class="F">袁于婷 古育榕 鐘慶真 楊馥伊 </p>
        
      <a href="./welcome.php"><input name="button" type="submit" class="FF" id="button" value="Let's go" / >
      </p>
	</div>
</section>
<div style="display:none">
	<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fd9d5d762d33e2700566cb90921389203' type='text/javascript'%3E%3C/script%3E"));
        </script>     
</div>

</body>
</html>