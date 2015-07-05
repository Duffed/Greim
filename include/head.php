<!doctype html>
<html>
	<head>		
		<!-- Basic Page Needs
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta charset="utf-8">
		<title>Greim Architekten</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<LINK REL="SHORTCUT ICON" HREF="favicon.png">

		<!-- Mobile Specific Metas
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
		<link rel="stylesheet" href="css/slidebars.css">

		<!-- JS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script src="js/jquery-2.0.2.min.js"></script> 	<!-- 1 -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/detectmobilebrowser.js"></script>
		<script src="js/slidebars.js"></script>
		<script src="js/jquery.parascroll.js"></script>

		<script>
			$( document ).ready(function() {

				//Init Slidebars
				$.slidebars({
					disableOver: 720
				});
				
				//Waypoint Nav
				var waypoints = $('main').waypoint({
					handler: function() {
						$("nav").toggleClass("nav_waypoint");
						$("#scrolltotop").fadeToggle();
					},
					offset: "60px"
				})

				//Onclick Nav Burger
				//$("ul.menu-bar li").click(function() {
					//$("nav div.container ul").stop().toggle("fade");
				//	$("nav div.container ul").toggleClass("notmobile");
				//})

				$("#scrolltotop").click(function() {
					$("html, body").animate({ scrollTop: 0 }, "fast");
					return false;
				})

			});
		</script>