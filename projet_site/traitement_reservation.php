<?php

include ('bibliothèque.php');
session_start();

// si l'utilisateur n'est pas connecté
if (!isset($_SESSION['mail'])) 
		{
		echo '<a href="index1.php" > vous devez vous connecter pour réserver <a>';
		}
		else
// si l'utilisateur est connecté
		{
	$mail = $_SESSION['mail'];
	
}


// requête qui permet d'obtenir le numéro du client à partir de son pseudo
    $requete = "SELECT *
                    FROM   Client
					WHERE mail = '$mail';"; 
				

					
	$connexion=connecter();
    $resultat = mysqli_query($connexion, $requete);

    
	$ligne= mysqli_fetch_assoc($resultat);
	$NumClient = $ligne['NumClient'];
    mysqli_close($connexion);

   

// récupération des données saisies dans le formulaire					

    $Datededebut = $_POST ['Datededebut'] ; 
    $Datedefin= $_POST ['Datedefin'] ;
    $mail= $_POST ['mail'] ;
    $Numduterrain= $_POST ['Numduterrain'] ;




// si les dates ont été saisies   
if   ( !empty($_POST['Datededebut']) and !empty($_POST['Datedefin']))
	
	
			// si les dates saisies sont postérieures à la date d'aujourd'hui
			{if  (horodatage ($Datededebut) >time () and horodatage($Datedefin)>horodatage($Datededebut) ) 
					{
					$nbjours = diff_jours ($Datededebut,$Datedefin) +1;




					
					// requête qui interroge la bdd pour savoir si le véhicule est déjà loué pour les dates
					$requete = "SELECT *
							FROM reservation 
							Where mail = '$mail'
							AND Datededebut <= '$Datededebut'
							AND Datedefin>= '$Datedefin';";
					
							
							  
							$connexion=connecter();

							$resultat = mysqli_query($connexion, $requete);

							mysqli_close($connexion);		  

							// si il y a un  résultat le véhicule est déjà loué
							if    (mysqli_num_rows($resultat) !=0)   
								{
								echo "Terrain déjà loué" ;
								echo '<a href="index1.php" > cliquez ici pour retourner sur le catalogue <a>' ; }
							// sinon le véhicule est disponible			   
							else {
								// requête qui enregistre la location
								$requete = "INSERT INTO reservation (Datededebut, Datedefin,mail,Numduterrain) 
														VALUES ('$Datededebut' , '$Datedefin','$mail','$Numduterrain')  " ;
														 
								$connexion=connecter();
								$resultat = mysqli_query($connexion, $requete);
								mysqli_close($connexion);

								if ($Numduterrain==1) {

								echo 'Votre réservation a bien été prise en compte';
								echo '<br/>';
								echo   $nbjours.' de jours de location.';
								echo '<br/>';
								echo   'Le prix à payer est de 30 €.';
								echo '<br/>';
								echo   'Vous avez choisi le Numduterrain' . $Numduterrain . 'donc le terrain de Foot';
								echo '<br/>';
								echo 'Retour à <a href = "index1.php"> l\'accueil </a> ' ; 

								}
								else if ($Numduterrain==2) {
									echo 'Votre réservation a bien été prise en compte';
								echo '<br/>';
								echo   $nbjours.' de jours de location.';
								echo '<br/>';
								echo   'Le prix à payer est de 25€.';
								echo '<br/>';
								echo   'Vous avez choisi le Numduterrain' . $Numduterrain . 'donc le terrain de Basket';

								echo '<br/>';
								echo 'Retour à <a href = "index1.php"> l\'accueil </a> ' ; 

								}
								else if ($Numduterrain==3) {
									echo 'Votre réservation a bien été prise en compte';
								echo '<br/>';
								echo   $nbjours.' de jours de location.';
								echo '<br/>';
								echo   'Vous avez choisi le Numduterrain' . $Numduterrain .  'donc le terrain de MMA';
								echo '<br/>';
								echo   'Le prix à payer est de 50 €.';
								
								echo '<br/>';
								echo 'Retour à <a href = "index1.php"> l\'accueil </a> ' ; 

								}
								else {

									echo 'Erreur' ;


								}
									
									
									/*								 
										if   ( $nbjours < 7 )
										{ $prix = $prix * $nbjours;}
		 
										else
										{ $prix = $prix * $nbjours * 0.9 ;} */
			
							}
			}					
			else
				{															   
				echo "date erronée" ;
				echo '<br/>';
				echo '<a href="index1.php" > cliquez ici pour retourner sur le catalogue <a>' ; }}
// sinon dates erronées
else
{															   
echo "saisissez des dates !" ;
echo '<br/>';

echo '<a href="index1.php" > cliquez ici pour retourner sur le catalogue <a>' ; 
}


?>
 

