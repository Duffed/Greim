<!doctype html>
<html>
	<head>		
		<!-- Basic Page Needs
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta charset="utf-8">
		<title>Your page title here :)</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Specific Metas
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- FONT
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

		<!-- CSS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<link rel="stylesheet" href="css/stylesheet.css">

		<!-- CJS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script src="js/jquery.min.js"></script>
		<script src="js/parallax.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
	</head>
	<script>
		$( document ).ready(function() {
			var waypoints = $('div.content').waypoint({
				handler: function() {
					
						if ($("nav").css("opacity") == "1")
							$("nav").animate({"opacity": "0.5", "height": "30px", "line-height": "30px"});
						else
							$("nav").animate({"opacity": "1", "height": "50px", "line-height": "50px"});
						
					
				},
				offset: "70px"
			})

		});
	</script>
<body>

	<nav >
		<div class="container">
			<ul>
				<li>Home</li>
				<li>Unternehmen</li>
				<li>Team</li>
				<li>Kontakt</li>
				<li>Impressum</li>
			</ul>
			<img src="images/logo_trans_w.png" class="logo">
		</div>

	</nav>

	<div data-parallax="scroll" data-image-src="hg.jpg" data-naturalWidth="1920" id="hero">
		<div class="container fullheight">	
			<img class="hero-text" src="images/logo_trans_b.png" alt="">
		</div>
	</div>

	<div class="content">
	    <div class="container">
	      <div class="row">
	        <div class="one-half column">
	          <h4>Basic Page</h4>
	          <p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up the <a href="http://www.getskeleton.com">Skeleton documentation</a>.</p>
	        </div>
	        <div class="one-half column">
	          <h3>Second Half</h3>
	          <p>Text text yes</p>
	            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	        </div>
	      </div>
	    </div>
	</div>

</body>
</html>
