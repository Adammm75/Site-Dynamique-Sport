<?php
   session_start();

include('bibliothèque.php');

$mail = $_SESSION['mail'];

$requete ="SELECT *
            FROM CLIENT
         WHERE mail='$mail'";


$connexion=connecter();

$resultat = mysqli_query($connexion, $requete);

$ligne= mysqli_fetch_assoc($resultat);


  $mdp = $ligne['mdp'];
    $nom = $ligne['nom'];
    $prenom = $ligne['prenom'];
    $mail = $ligne['mail'];
    $cp = $ligne['cp'];


mysqli_close($connexion);

?>

<form action="update.php" method="post">
<table>
              <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Nom</label>  <br>
               <input type="text" class="form-control" id="exampleInputPassword1" name="nom" value="<?=$nom;?>">
              </div>
              <br>
               <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Prenom</label>  <br>
               <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" value="<?=$prenom;?>">
              </div>
               <br>
               <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Code Postale</label>  <br>
               <input type="adresse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cp"  value="<?=$cp;?>"            >
               <div id="emailHelp" class="form-text"></div>
              </div> 
              <br>
              <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">E-mail</label>  <br>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" value="<?=$mail;?>">
               <div id="emailHelp" class="form-text"></div>
              </div> 
              <br>
              <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Mot de passe</label>  <br>
               <input type="password" class="form-control" id="exampleInputPassword1" name="mdp" value="<?=$mdp;?>">
              </div>
              <br>
              <p>
                <input type="submit" name="envoyer" value="Envoyer" class="boutons">
            </p> 
               </div>

      </table>
</form>