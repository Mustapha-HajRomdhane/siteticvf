<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<title>Ajouter evenement</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="utilisateur/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="utilisateur/css/util.css">
	<link rel="stylesheet" type="text/css" href="utilisateur/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="ajout_utilisateur_valisation.php">
				<span class="contact100-form-title">
					Ajouter utilisateur 
				</span>

				<div class="wrap-input100 validate-input" data-validate="CIN is required">
					<input class="input100" id="name" type="text" name="identifiant" placeholder="CIN">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Mot de passe is required">
					<input class="input100" id="name" type="text" name="mdp" placeholder="Mot de passe">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required"> </div>
				<select name="utilisateur" id="" class="input100" class="label-input100" class="wrap-input100 validate-input">
					<option value="etudiant">Etudiant</option>
					<option value="enseignant">Enseignant</option>
					<option value="administrateur">Administrateur</option>
				</select>

					
				<h1><br></h1>

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
	<script src="utilisateur/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="utilisateur/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="utilisateur/vendor/bootstrap/js/popper.js"></script>
	<script src="utilisateur/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="utilisateur/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="utilisateur/vendor/daterangepicker/moment.min.js"></script>
	<script src="utilisateur/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="utilisateur/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="utilisateur/js/main.js"></script>

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
