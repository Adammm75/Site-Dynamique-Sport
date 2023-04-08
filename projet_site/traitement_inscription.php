<?php
	// activation du mécanisme des sessions
	session_start();

include('bibliothèque.php');


    $mdp = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
		$cp = $_POST['cp'];

$requete ="SELECT mail
		   	FROM CLIENT
			WHERE mail='$mail'";
			
// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);



if (mysqli_num_rows($resultat) == 0)
  { 
// si le resultat est egal a 0 alors ce  n’existe pas

//Hacher le mot de passe récupéré et le stocker dans une variable $mdph
$mdph =password_hash($mdp,PASSWORD_DEFAULT); 
	// requête d'ajout dans la base de données
	$requete = "INSERT INTO client (nom,prenom,cp,mail,mdp)
				VALUES( '$nom','$prenom','$cp','$mail','$mdph');";

//connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);
	
	// Ouverture d’une session pour ce pseudo
	$_SESSION["mail"] = $mail;

	

	// et redirection vers l'accueil			 
	header ("Location: reussite.php");
  }
  // sinon le pseudo existe déjà, affichage d’un message et lien de retour au formulaire
  else
	{
	echo "Ce pseudo est deja utilisé";
	header ("Location:  Inscription.php");
     

	}

?>
