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
	



			<?php
				if (!isset($_POST["e_Senden"]))    /* display the contact form */
				{?>
					<?php include("include/kontaktformular.php") ?>
			<?php
				} 
				else /* send the submitted data */
				{
					$name=$_POST['Name'];
					$email=$_POST['Email'];
					$betreff=$_POST['Betreff'];
					$nachricht=$_POST['Nachricht'];
					$captcha=$_POST['captcha'];
					$e_captcha=$_POST['e_captcha'];

					//Check if everything is filled
					$fields = array('Name', 'Email', 'Betreff', 'Nachricht');

					echo "<section class='kontaktformular row'>";
					$error = false; //No errors yet
					foreach($fields AS $fieldname) { //Loop trough each field
						if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
							echo '<p><center>Feld '.$fieldname.' fehlt!</center></p>'; //Display error with field
							$error = true; 
						}
					}

					if(!$error) { //Only create queries when no error occurs
						//check captcha
						if ($captcha != $e_captcha){
							echo "Captcha falsch eingegeben, bitte erneut versuchen.";
						} else {
							//send email
							$from="Von: $name<$email>\r\nReturn-path: $email";
							$subject='Greim Kontaktformular: "'.$betreff.'" (Von '.$name.' - '.$email.')';
							mail("duffed90@gmail.com", $subject, $nachricht, $from);

							//mail on myself
							if ($_POST['e_captcha']) {
								mail($email, $subject, $nachricht, $from);
							}
							echo "<h5>E-Mail wurde versendet.</h5>";
						}
					}
					echo "</section>";

					include("include/kontaktformular.php");
				}
			?>

		</div>
	</main>

<?php include("include/footer.php") ?>


