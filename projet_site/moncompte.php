<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['nom_utilisateur'])) {
    header("Location: connexion.php");
    exit();
}

// Récupérer les informations de l'utilisateur
$nom = $_SESSION['nom_utilisateur'];
$prenom = $_SESSION['prenom_utilisateur'];
$mail = $_SESSION['mail_utilisateur'];
$cp = $_SESSION['cp_utilisateur'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mon Compte</title>
</head>
<body>
    <h1>Mon Compte</h1>
    <p>Nom: <?php echo $nom; ?></p>
    <p>Prénom: <?php echo $prenom; ?></p>
    <p>Mail: <?php echo $mail; ?></p>
    <p>Code postal: <?php echo $cp; ?></p>
    <a href="deconnexion.php">Déconnexion</a>
</body>
</html>
