<!DOCTYPE html>
<html lang="en">
<head>

<?php 
    include 'entete.php';
?>
<?php 
if (isset($_SESSION['mail'])){
header('index1.php');
exit;
}


?>
<br>
<br>
<br>
<br>
	<!-- <title>Inscrivez-vous</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

					<span class="login100-form-title">
						Inscrivez-vous
					</span>
-->
<form action="traitement_inscription.php" method="post">



				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Nom</label>  <br>
					<input type="text" class="form-control" id="exampleInputPassword1" name="nom">
				  </div>
				  <br>
					<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Prenom</label>  <br>
					<input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
				  </div>
					<br>
					<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Code Postale</label>  <br>
					<input type="adresse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cp">
					<div id="emailHelp" class="form-text"></div>
				  </div> 
				  <br>
				  <div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">E-mail</label>  <br>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
					<div id="emailHelp" class="form-text"></div>
				  </div> 
				  <br>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Mot de passe</label>  <br>
					<input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
				  </div>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							S'INSCRIRE
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Vous avez déja un compte ?
						</span>

						<a href="#" class="txt3">
						<li><a href="connexion.php">SE CONNECTER</a></li>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>


</body>
</html>