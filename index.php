<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Livacreative</title>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/ansz.js"></script>
<link rel="stylesheet" href="css/reset.css"/>
<link rel="stylesheet" href="css/font.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/main.css"/>

</head>


<body>
	<div class="logo"><a href="#"><img src="im/logo.png"></a></div>
	<div class="nav" >
		<div class="prfl" id="prfl"><a href="http://issuu.com/livinsvarghese/docs/for_issuu_b8014d0e1f27c8/1" target="_blank">PORTFOLIO</a></div>
		<span class="nimg" id="nimg"><a href="#aboutme" id="ab_me"><img src="im/me.png"></a></span>
	</div>
	<div class="footer">
		<span>&copy 2015 Livins Varghese</span>
		<div class="social">
			<a href="http://issuu.com/livinsvarghese" target="_blank"><img src="im/o1.png"></a>
			<a href="http://in.linkedin.com/in/livinsvarghese/" target="_blank"><img src="im/o2.png"></a>
			<a href="https://www.behance.net/LIVACREATIVE" target="_blank"><img src="im/o3.png"></a>
		</div>
	</div>
	<div class="content">
		<div class="scroll">
			<div class="home">
				<h1>RETHINK | INVENT</h1>
				<h4>“I have been impressed with the urgency of doing.<br>Knowing is not enough; we must apply.<br> Being willing is not enough; we must do.”<br>-Leonardo Da Vinci</h4>
				<div class="more"><a href="#aboutme" id="abt"><img src="im/more.png"></a></div>
			</div>
			<div class="about" id="about">
				<img src="im/Iam.png">
				<div class="abtxt">
					<h1>HI THERE!</h1>
					<span class="iam">I AM LIVINS VARGHESE</span>
					<span class="atx">Passionate in  doing concept  designing. Includes product,  automotive and graphic designing. This portfolio showcases   some  of  my  recent  designs and the works done out  of  my  passion. A few graphic designs showcased here are those which  I   have   done  When  I  worked  in  my  previous  design companies.</span>
				</div>
				
			</div>
		</div>
	</div>
<script type="text/javascript">
$('#abt').click(function () {
	$(window).scrollTo('.about', 1000, {easing:'linear'});
	//$(window).animate({scrollTop:$('#about').position().top}, 'slow');
});
$("#ab_me").click(function () {
	$(window).scrollTo('.about', 1000, {easing:'linear'});
});
// $(".logo a").click(function () {
// 	$(window).scrollTo('.home', 1000, {easing:'linear'});
// });
</script>

</body>
</html>
