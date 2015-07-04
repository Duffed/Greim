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
						$("nav").toggleClass("nav_waypoint");
						$("#scrolltotop").fadeToggle();
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

				$("#scrolltotop").click(function() {
					$("html, body").animate({ scrollTop: 0 }, "fast");
					return false;
				})
			});
		</script>