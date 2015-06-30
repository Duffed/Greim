<!doctype html>
<html>
	<head>		
		<!-- Basic Page Needs
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta charset="utf-8">
		<title>Greim Architekten</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Specific Metas
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- FONT
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<!--
			<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
		-->
		<!-- CSS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- JS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script src="js/jquery-2.0.2.min.js"></script> 	<!-- 1 -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/detectmobilebrowser.js"></script>

		<script>

			$( document ).ready(function() {
				

				//Waypoint Nav
				var waypoints = $('main').waypoint({
					handler: function() {
						$("nav").toggleClass("nav_waypoint")
							/*
							if ($("nav").css("opacity") == "1")
								$("nav").toggleClass("nav_waypoint").animate({"opacity": "0.5"});
							else
								$("nav").toggleClass("nav_waypoint").animate({"opacity": "1"});
							*/
					},
					offset: "60px"
				})

				//Onclick Nav Burger
				$("ul.menu-bar li").click(function() {
					//$("nav div.container ul").stop().toggle("fade");
					$("nav div.container ul").toggleClass("notmobile");
				})

				//Stellar
				if (!jQuery.browser.mobile) {
					$.stellar({
						verticalScrolling: true,
						
						scrollProperty: 'scroll'
					});
				}

			});
		</script>
	</head>

	
<body>

	<nav>
		<ul class="onlymobile menu-bar"><li><a class="fa">&#xf0c9;</a></li></ul>
		<img src="images/greim.png" class="onlymobile logo" alt="Greim">
		<div class="container">
			<ul class="notmobile">
				<li><a href="#" class="active">Home</a></li
				><li><a href="#">Unternehmen</a></li
				><li><a href="#">Team</a></li
				><li><a href="#">Projekte</a></li
				><li><a href="#">Kontakt</a></li>
			</ul>
			<img src="images/greim.png" class="notmobile logo" alt="Greim"> 
		</div>
	</nav>

	<div id="hero" data-width="1024" data-height="813"> <!--data-parallax="scroll" data-naturalWidth="1920" data-image-src="images/az3.jpg" -->
		<div class="container fullheight">	
			<img class="hero-text notmobile400" src="images/logo2_trans_b.png" alt="Greim Architekten" >
		</div>
	</div>

	<main class="boxshadow">
		<div class="container">
			<div class="row">
				<div class="column">
					<h4 class="headline">Projekte</h4>

				</div>
			</div>

			<div class="row">
				<div class="six columns">
					<div class="project-image-container ">
						<div class="projectx project1">
							<p>Text der im Bild steht</p>
						</div>
					</div>
					<p>Beispieltext über Projekt 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, est possimus ex ipsum dolore minus id molestiae nisi, a quod deleniti in repudiandae, nihil, totam unde ipsa facere odio iusto.</p>
				</div>
				<div class="six columns">
					<div class="project-image-container">
						<div class="projectx project2">
							<p>Text der im Bild steht</p>
						</div>
					</div>
					<p>Beispieltext über Projekt 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, distinctio, totam nobis recusandae labore tempore reprehenderit, at quisquam nemo sed iure ducimus iusto magnam eaque, dolorem aspernatur minima esse odio.</p>
				</div>
			</div>

			<div class="row">
				<div class="six columns">
					<div class="project-image-container ">
						<div class="projectx project3">
							<p>Text der im Bild steht</p>
						</div>
					</div>
					<p>Beispieltext über Projekt 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, distinctio, totam nobis recusandae labore tempore reprehenderit, at quisquam nemo sed iure ducimus iusto magnam eaque, dolorem aspernatur minima esse odio.</p>
				</div>
				<div class="six columns">
					<div class="project-image-container ">
						<div class="projectx project4">
							<p>Text der im Bild steht</p>
						</div>
					</div>
					<p>Beispieltext über Projekt 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, est possimus ex ipsum dolore minus id molestiae nisi, a quod deleniti in repudiandae, nihil, totam unde ipsa facere odio iusto.</p>
				</div>
			</div>
		</div>
		
		<div id="team-hero">
			<h2>Team</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="column">
					<p>Text über Team <br>
					Zeile <br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et odit aperiam alias fugiat tempora id, consectetur atque repudiandae laborum culpa. Soluta iusto ratione, veniam sit. Eaque dolor, inventore nostrum consectetur.</p>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="container">
			<div class="row">
				<div class="three columns logo-footer">
					<img src="images/greim.png" class="logo-footer" alt="Greim">
				</div>
				<div class="three columns">

				</div>
				<div class="three columns">


				</div>
				<div class="three columns">


				</div>
			</div>
		</div>
	</footer>

</body>
</html>


