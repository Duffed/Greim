<?php include("include/head.php") ?>
<script>
	$( document ).ready(function() {
		//Onclick Kontaktformular
		$("#intro_kontaktformular").click(function() {
			$("#kontaktformular").stop().slideToggle();
			$("#intro_kontaktformular i").toggleClass("fa-chevron-down");
			$("#intro_kontaktformular i").toggleClass("fa-chevron-up");
		})

		$(".link_kontakt").addClass("active");
	});
</script>
<?php include("include/header.php") ?>
	<header class="header-kontakt">
		<img class="hero-text" src="images/logo2_trans_b.png" alt="Greim Architekten" >
	</header>

	<main class="boxshadow">
		<div class="container">

			<h4 class="headline">Greim Architekten</h4>
			<p>W&ouml;lfelstra&szlig;e 6 <br>
			95444 Bayreuth</p>
			<p><b>Fon:</b> +49 921 76441-0 <br>
			<b>Fax:</b> +49 921 76441-29 <br>
			<b>Email:</b> info@greim-architekten.de</p>
	
			<iframe class="u-full-width" id="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1283.7648537113694!2d11.57923139882384!3d49.945165178171436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a1a2c5532c0c5b%3A0x6800e73e6fd406d0!2sW%C3%B6lfelstra%C3%9Fe+6%2C+95444+Bayreuth!5e0!3m2!1sde!2sde!4v1435954462821" allowfullscreen draggable="false"></iframe>
	

			<section id="intro_kontaktformular" class="row">
				<h5>Kontaktformular</h5>
				<hr>
				<i class="fa fa-chevron-down"></i>
			</section>

			<!-- Kontaktformular -->
			<form id="kontaktformular">
		
				<label for="exampleEmailInput">Email-Adresse</label>
				<input class="u-full-width" type="email" id="e_Email">
				<label for="betreff">Betreff</label>
				<input class="u-full-width" type="text" id="e_Betreff">
				<label for="exampleMessage">Nachricht</label>
				<textarea class="u-full-width" placeholder="Ihre Nachricht an uns" id="e_Nachricht"></textarea>

				<?php 
					$zahl1 = rand(10,20);
					$zahl2 = rand(1,9);
					$ergebnis = $zahl1+$zahl2;
				?>

				<label for="captcha"><?php echo $zahl1." + ".$zahl2." = "?></label>
				<input type="text" class="u-full-width">
				<label class="example-send-yourself-copy">
					<input type="checkbox">
					<span class="label-body">Kopie an mich selbst schicken</span>
				</label>
				<input class="button-primary" type="submit" id="e_Senden" value="Senden">
			</form>

		</div>
	</main>

<?php include("include/footer.php") ?>


