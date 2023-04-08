<?php 
	include 'entete.php';
?>

	<br>
	<br>
	<br>
	<br>
 <?php
 session_start();

$_SESSION =array();
 session_destroy();

 	echo ('Vous êtes déconnecté  GG !')

 ?>