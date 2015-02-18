<!DOCTYPE html">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maid</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="css/reset.css" type="text/css" rel="stylesheet">
<link href="css/font.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<!-- <script src="js/jquery-migrate-1.2.1.js"></script> -->
</head>

<body>
	<div class="container">
		<video autoplay preload="" muted="" loop="">
			<source id="mp4" src="video/hd1.mp4" type="video/mp4">
			<source id="webm" src="video/hd1.webm" type="video/webm">
		</video>
		<div class="top">
				<div class="logo">
					<img src="image/logo.png">
				</div>
				<div class="nav">
					<ul>
						<li><a href="#">Contribute</a></li>
						<li><a href="#">Recipe Store</a></li>
						<li><a href="#">Features</a></li>
					</ul>
				</div>
		</div>
		<div class="centx">
			MAID ACT AS A<br>COMPLETE KITCHEN ASSISTANT
			<div class="wvt" style="display:none;"><span>Watch Video</span> <div><img src="image/wvid.png"></div></div>
			<div class="pcon">
				<div class="play"><div></div></div>				
			</div>
			
		</div>
		 <script src="js/plbt.js"></script>
	</div> 
	<div class="conl">
		<div class="lft"><img src="image/lim1.png"></div>
		<div class="rtx">
			<span>Reciepe Store</span>
			<span>Selecting a microwave oven is relatively easy as there is a wide  selection  of
inexpensive  ovens  on  the  market.  You  should  consider  what  needs  are when before selecting an oven. Also, you might want to consider perchasing a microwave convection.</span>
		</div>
	</div>
	<div class="conl footer">
		<div class="fnav">
			<ul>
				<li><a href="#">MEET THE TEAM</a></li>
				<li><a href="#">MEDIA</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="#">FAQS</a></li>
				<li><a href="#">CONTACT US</a></li>
			</ul>
		</div>
		<div>&copy; Sectorcube inc. 2014</div>
	</div>
	<!-- <div class="conl"></div>
	<div class="conl"></div>
	<div class="conl"></div>
	<div class="conl"></div>
	<div class="conl"></div>
	<div class="conl"></div>
	<div class="conl"></div> -->
	<script type="text/javascript">
		$(".play").hover(function () {
			$(".wvt").fadeIn();
		});
		$(".play").mouseleave(function () {
			$(".wvt").fadeOut();
		});
	</script>
	<script type="text/javascript">
		$(window).bind("load", function() {
	      	var wheight = $(".lft").height();
	        var wwidth = $(".lft").width();
			var width = $('.lft img').width();
			var height = $('.lft img').height();
			$('.lft img').attr("style","padding-top: "+wheight/2+"px; padding-left: "+wwidth/2+"px; margin-left: -"+width/2+"px; margin-top: -"+height/2+"px;");
		});
	</script>
</body>
</html>
