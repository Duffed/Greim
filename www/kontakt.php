<?php include("include/head.php") ?>
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
<?php include("include/header.php") ?>

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


