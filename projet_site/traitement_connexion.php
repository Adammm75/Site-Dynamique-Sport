<?php
session_start();

include('bibliothèque.php');


$mdp = $_POST['mdp'];
$mail = $_POST['mail'];


	// requete qui va vérifier que le pseudo existe
	$requete ="SELECT *
		    FROM CLIENT
			WHERE mail='$mail';";

	
	// connexion bdd
	$connexion = connecter();
	
	// exécution requête
	$resultat = mysqli_query($connexion, $requete);	
		
	// si aucun résultat alors redirection automatique vers connexion
	if (mysqli_num_rows($resultat) == 0)
		{header("Location: index1.php" );}
	
	/* sinon résultat donc ouverture de session pour le pseudo 
	et redirection automatique vers accueil*/


	else
		{	
		 /*sinon le pseudo existe et il faut alors stocker le mdp crypté obtenu
		 à partir de la requête dans $mdph et tester la validité du mot de passe
		 fourni par le client dans le formulaire de connexion qui a été récupéré 
		 grâce à la méthode POST et stocké dans $mdp (au début de la page)*/
	

		
		$ligne = mysqli_fetch_assoc($resultat);
		$mdph = $ligne['mdp'] ;
		

		 // si la vérification du mdp est ok alors ouverture de session et redirection vers l'accueil
		
			if (password_verify($mdp, $mdph))
		{
				$_SESSION['mail'] = $mail;   

				/* ouverture d'une session et redirection vers la page index */



	

				header ("Location: reussite2.php");
			}
		// sinon message et lien vers la page de connexion
			else
			{
				           // ouverture d'une session et redirection vers traitement_connexion
				header ("Location: connexion.php");
			}
		
	 
 } 
?>