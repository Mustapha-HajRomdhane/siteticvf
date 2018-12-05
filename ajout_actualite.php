<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ajouter actualité</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="actualite/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="actualite/css/util.css">
	<link rel="stylesheet" type="text/css" href="actualite/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" enctype="multipart/form-data" action="ajout_actualite_validation.php" method="post">
				<span class="contact100-form-title">
					Ajouter actualité
				</span>

				<div class="wrap-input100 validate-input" data-validate="Titre is required">
					<input class="input100" id="name" type="text" name="titre_actualite" placeholder="Titre">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
				</div>




				<div class="wrap-input100 validate-input" data-validate = "Descrition is required">
					<textarea class="input100" name="description_actualite" placeholder="Description..."></textarea>
				</div>
				<div class="wrap-input100 validate-input" >
					<input type="file" name="photo" id="mon_fichier" />

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
	<script src="actualite/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="actualite/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="actualite/vendor/bootstrap/js/popper.js"></script>
	<script src="actualite/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="actualite/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="actualite/vendor/daterangepicker/moment.min.js"></script>
	<script src="actualite/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="actualite/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="actualite/js/main.js"></script>

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
