
<!DOCTYPE html>
<html lang="nl">
<head>

	<!-- 
	.d88b.  db    db d8888b. d888888b d8b   db  d888b  d88888b d8b   db
	.8P  Y8. 88    88 88  `8D   `88'   888o  88 88' Y8b 88'     888o  88
	88    88 Y8    8P 88   88    88    88V8o 88 88      88ooooo 88V8o 88
	88    88 `8b  d8' 88   88    88    88 V8o88 88  ooo 88~~~~~ 88 V8o88
	`8b  d8'  `8bd8'  88  .8D   .88.   88  V888 88. ~8~ 88.     88  V888
	`Y88P'     YP    Y8888D' Y888888P VP   V8P  Y888P  Y88888P VP   V8P
	                                                                
	                                                                 -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ovdingen</title>

	<meta name="keywords" content="ovdingen, treinviewer, ns treinen, realtime ov, ov, openbaarvervoer, openbaar vervoer">
	<meta name="description" content="Voor al het openbaar vervoer in Nederland">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- CSS  -->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<style>
	.parallax-container {
    	height: 100vh;
    }


    #icm {
    	position: absolute;
    	left: -1000px; 
    	width: 50%;
    }

    a.contact {
    	font-weight:bold;
    	text-decoration: underline;
    }
	</style>

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<h1 class="header center white-text">Hier opent binnenkort ovdingen.nl</h1>
				<div class="row center">
				  <h5 class="header col s12 light white-text">Voor al het openbaar vervoer in Nederland</h5>
			</div>
			<br><br>
			</div>
		</div>
		<img id="icm" src="img/icm.png">
		<div class="parallax"><img src="img/achtergrond1.jpg" alt="VIRM" style="opacity:1;"></div>
	</div>

	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12 center">
					<h3 class="header">Contact</h3>
					<p class="light">
						Voor vragen over ons, kan je een mailtje sturen naar <a class="contact" href="mailto:ovdingen@marctijssen.nl" target="blank">ovdingen@marctijssen.nl</a>.<br>
						Ook kan je ons een bericht op Instagram <a class="contact" href="http://instagram.com/ovdingen" target="blank">@ovdingen</a> of Telegram <a class="contact" href="https://t.me/frikandelbroodje" target="blank">@frikandelbroodje</a> sturen.
					</p>
					<p>
						<a class="btn-floating btn-large" href="https://github.com/ovdingen" target="blank"><i class="fab fa-github"></i></a> <a class="btn-floating btn-large" href="https://instagram.com/ovdingen" target="blank"><i class="fab fa-instagram"></i></a>
					</p>
					<p class="light">
						Bekijk onze <a href="https://github.com/ovdingen" target="blank">github</a> voor de source-code en voortgang van onze projecten.
					</p>
				</div>
			</div>
		</div>
	</div>

	<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col l4 s12">
					<h5 class="white-text">ovdingen</h5>
						<ul>
						  <li><a class="white-text" href="https://bunq.me/ovdingen" target="blank">Doneer aan ovdingen.nl!</a></li>
						</ul>
				</div>
				<div class="col l4 s12">
					<h5 class="white-text">Projecten</h5>
					<ul>
					  <!-- <li><a class="white-text" href="https://ovdingen.nl/treinviewer/" target="blank">Trein Viewer</a></li>
					  <li><a class="white-text" href="https://ovdingen.nl/ns-vt/" target="blank">NS-VT Kiosk</a></li> -->
					</ul>
				</div>
				<div class="col l4 s12">
					<h5 class="white-text">Meewerken?</h5>
					<p class="grey-text text-lighten-4">Kijk dan op onze github.</p>
					<ul>
						<li><a class="white-text" href="https://github.com/ovdingen" target="blank"><i class="fab fa-github"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
			Made with <i class="fas fa-heart red-text"></i> by ovdingen
				<div class="right">
				  <a class="white-text" href="https://github.com/ovdingen/website-placeholder/blob/master/LICENSE" target="blank">GPL-3.0</a> <!-- | <a class="white-text" href="https://ovdingen.nl/afbeeldingscredits.txt" target="blank">afbeeldingscredits</a> -->
				</div>
			</div>
		</div>
	</footer>



	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!-- Rijdende ICM -->
	<script type="text/javascript">
		$(function() {
		    var img = $("#icm"),
		        width = img.get(0).width,
		        screenWidth = $(window).width(),
		        duration = 10000;

		    function animateIcm() {
		        img.css("left", -width).animate({
		            "left": screenWidth
		        }, duration, animateIcm);
		    }

		    animateIcm();
		});
	</script>

	<!-- Parallax -->
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function() {
		  var elems = document.querySelectorAll('.parallax');
		  var instances = M.Parallax.init(elems, options);
		});
	</script>
</body>
</html>