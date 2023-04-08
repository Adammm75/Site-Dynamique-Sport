

<?php 
  
session_start();




     if( isset($_SESSION['mail'])){
        include 'entete2.php';

?>

<br>
<br>
<br>
<br>


<div id="champs">
            <form method="post" action="traitement_reservation.php">
            <p>
            <label for="letter"></label>    <!--case du numéro de la table-->
                <input type="text" name="mail" class="ecriture" id="letter" placeholder="Votre mail" size="50" maxlength="30" 
            <br>   
                 
                <label for="date"></label> <!--case date-->
                <input type="date" name="Datededebut" class="ecriture" id="date" placeholder="Datededébut" size="35" maxlenght="100" /> <!--pseudo à l'intérieur de la case-->
            <br>


                <label for="date"></label> <!--case date-->
                <input type="date" name="Datedefin" class="ecriture" id="date" placeholder="Datedefin" size="35" maxlenght="100" /> <!--pseudo à l'intérieur de la case-->
            <br>
             

                 
            <br>
            <br>
                            <label for="number"></label>    <!--case du numéro de la place-->
                <input type="number" name="Numduterrain" class="ecriture" id="number" placeholder="N° terrain" size="35" maxlength="100" min="1" max="8"/><!--mot de passe avec points et à l'intérieur de la case-->
            

             



             <html>
             <body>
                <br>
                Terrain 1 : Foot : 30€ par jour
                <br>
                Terrain 2 : Gymnase Basket : 25€ par jour
                <br>
                Terrain 3 : MMA = 50€ par jour
                <br>
                </html>
             </body>
            </p>
            
            <p>
                <input type="submit" name="envoyer" value="Envoyer" class="boutons">
            </p>  <!--bouton envoyer-->
         
             </form>
             
         
        </div> 




<?php

}
        else {

              include 'entete.php';
        ?>
        <a href="connexion.php"/i>Vous devez vous connecter pour réserver</a>

<?php  
    }
    
    

?>