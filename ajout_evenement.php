<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ajouter evenement</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="evenement/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="evenement/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="evenement/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="evenement/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="evenement/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="evenement/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="evenement/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="evenement/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="evenement/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="evenement/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" enctype="multipart/form-data" action="ajout_evenement_validation.php" method="post">
				<span class="contact100-form-title">
					Ajouter évenement
				</span>

				<div class="wrap-input100 validate-input" data-validate="Titre is required">
					<input class="input100" id="name" type="text" name="titre_evenement" placeholder="Titre">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Date is required">
					<input class="input100" id="name" type="date" name="date_evenement" placeholder="Date de l'evenement">
					<label class="label-input100" for="name">
						<span class="lnr lnr-calendar-full"></span>
					</label>
				</div>




				<div class="wrap-input100 validate-input" data-validate = "Description is required">
					<textarea class="input100" name="description_evenement" placeholder="Descrption"></textarea>
				</div>
				<div class="wrap-input100 validate-input" >
					<input  type="file" name="photo">
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							Ajouter
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="evenement/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="evenement/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="evenement/vendor/bootstrap/js/popper.js"></script>
	<script src="evenement/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="evenement/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="evenement/vendor/daterangepicker/moment.min.js"></script>
	<script src="evenement/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="evenement/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="evenement/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
