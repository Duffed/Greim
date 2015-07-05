<?php include("include/head.php") ?>
<script>
	$( document ).ready(function() {
		//Onclick Kontaktformular
		$("div#intro_kontaktformular").click(function() {
			$("#kontaktformular").stop().slideToggle();
			$("#intro_kontaktformular i").toggleClass("fa-chevron-down");
			$("#intro_kontaktformular i").toggleClass("fa-chevron-up");
		})

		$(".link_kontakt").addClass("active");
	});
</script>
<?php include("include/header.php") ?>

	<main class="boxshadow">
		<div class="container">
			<div class="row">
				<div class="column">
					<h4 class="headline">Greim Architekten</h4>
					<p>W&ouml;lfelstra&szlig;e 6 <br>
					95444 Bayreuth</p>
					<p><b>Fon:</b> +49 921 76441-0 <br>
					<b>Fax:</b> +49 921 76441-29 <br>
					<b>Email:</b> info@greim-architekten.de</p>
				</div>
			</div>
	
			<iframe class="u-full-width" id="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1283.7648537113694!2d11.57923139882384!3d49.945165178171436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a1a2c5532c0c5b%3A0x6800e73e6fd406d0!2sW%C3%B6lfelstra%C3%9Fe+6%2C+95444+Bayreuth!5e0!3m2!1sde!2sde!4v1435954462821" allowfullscreen draggable="false"></iframe>
	

			<div id="intro_kontaktformular" class="row">
				<p><h5>Kontaktformular</h5></p>
				<hr>
				<i class="fa fa-chevron-down"></i>
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

<?php include("include/footer.php") ?>


