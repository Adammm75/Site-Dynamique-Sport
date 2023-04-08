
<?php
include ('bibliothèque.php');
session_start();
if (!isset($_SESSION['mail'])) {
 echo '<a href="connexion.php"/i>Se connecter</a>';
}
else { 
 


    $mdp = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $cp = $_POST['cp'];

$requete = "UPDATE CLIENT
SET nom = '$nom', cp = '$cp' ,prenom = '$prenom' , mdp = '$mdp' 
WHERE mail = '$mail' ";

  
                            $connexion=connecter();

                            $resultat = mysqli_query($connexion, $requete);

                            mysqli_close($connexion);   



if ($resultat==0) {
    echo "Une erreur est survenue lors de la récupération des informations personnelles.";
} else  {
echo "GG";
echo '<br/>';
echo "Les Données ont bien été modifiés";






    ?>
    <?php
} 

}
?>
