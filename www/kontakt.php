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
					},
					offset: "60px"
				})

				//Onclick Nav Burger
				$("ul.menu-bar li").click(function() {
					//$("nav div.container ul").stop().toggle("fade");
					$("nav div.container ul").toggleClass("notmobile");
				})



			});
		</script>
		<script>
			$( document ).ready(function() {
				//Onclick Kontaktformular
				$("div#intro_kontaktformular").click(function() {
					$("#kontaktformular").stop().slideToggle();
					$("#intro_kontaktformular i").toggleClass("fa-chevron-down");
					$("#intro_kontaktformular i").toggleClass("fa-chevron-up");
				})
			});
		</script>
	</head>

	
<body>

	<nav>
		<ul class="onlymobile menu-bar"><li><a class="fa">&#xf0c9;</a></li></ul>
		<img src="images/greim.png" class="onlymobile logo" alt="Greim">
		<div class="container">
			<ul class="notmobile">
				<li><a href="index.php">Home</a></li
				><li><a href="#">Unternehmen</a></li
				><li><a href="#">Team</a></li
				><li><a href="#">Projekte</a></li
				><li><a href="#" class="active">Kontakt</a></li>
			</ul>
			<img src="images/greim.png" class="notmobile logo" alt="Greim"> 
		</div>
	</nav>

	<div id="hero" > <!--data-parallax="scroll" data-naturalWidth="1920" data-image-src="images/az3.jpg" -->
		<div class="container fullheight">	
			<img class="hero-text notmobile400" src="images/logo2_trans_b.png" alt="Greim Architekten" >
		</div>
	</div>

	<main class="boxshadow">
		<div class="container">


			<div class="row">
				<div class="four columns">
					<h4 class="headline">Telefon</h4>
					<p>1234/5342523</p>
				</div>
				<div class="four columns">
					<h4 class="headline">Email</h4>
					<p>greim@web.de</p>
				</div>
				<div class="four columns">
					<h4 class="headline">Anschrift</h4>
					<p>Greim Architekten <br>
					Musterstraße 1-11 <br><br>
					55421 Musterhausen</p>
				</div>
			</div>

			<div id="intro_kontaktformular" class="row">
				<p>Kontaktformular</p>
				<hr>
				<i class="fa fa-chevron-up"></i>
			</div>

			<!-- Kontaktformular -->
			<form id="kontaktformular">
				<div class="row">
					<div class="six columns">
						<label for="exampleEmailInput">Ihre Email-Adresse</label>
						<input class="u-full-width" type="email" placeholder="test@mailbox.de" id="exampleEmailInput">
					</div>
					<div class="six columns">
						<label for="betreff">Betreff</label>
						<input class="u-full-width" type="text" placeholder="Um was geht es?" id="betreff">
					</div>
				</div>
				<label for="exampleMessage">Nachricht</label>
				<textarea class="u-full-width" placeholder="Ihre Nachricht an uns" id="exampleMessage"></textarea>

				<?php 
					$zahl1 = rand(10,20);
					$zahl2 = rand(1,9);
					$ergebnis = $zahl1+$zahl2;
				?>

				<label for="captcha"><?php echo $zahl1." + ".$zahl2." = "?></label>
				<input type="text" placeholder="Captcha" class="u-full-width">
				<label class="example-send-yourself-copy">
					<input type="checkbox">
					<span class="label-body">Kopie an mich selbst schicken</span>
				</label>
				<input class="button-primary" type="submit" value="Submit">
			</form>

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


