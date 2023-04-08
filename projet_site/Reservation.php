<!DOCTYPE html>

<html>


<?php 


    session_start();


 if( isset($_SESSION['mail'])){

        include 'entete2.php';
}

else {
      include 'entete.php';
}
?>
<br>
<br>
<br>
<br>



  
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>RÉSERVEZ VOTRE LIEU</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">PRIVATISEZ UNE SALLE EN UN CLIQUE !</h1>
    <div class="w3-padding-32">
    <p>  <a href="reservations.php" ><h->Réservation</h6></a></p>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4>Nos salles et installatios sont toutes reconnues comme de qualité !</h4>
        <h5>Profitez en dès maintenant  <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div>
<html>
<head>
<style>


h6 {
  font-size: 15px;
}


</style>
</head>
<body>



</body>
</html>
<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>BASKETBALL</h3><br>
  <img src="https://th.bing.com/th/id/OIP.ie8IfDoqyX3nFX-yRmGoKwHaE8?pid=ImgDet&rs=1" width="425" height="300"
  <br> <br/>

  </div>

</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>TENNIS</h3><br>
  <img src="https://i.pinimg.com/736x/f5/5a/df/f55adf45472bf27b02debf7cf6a73b32.jpg" width="425" height="300"
  <br> <br/> 
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>FOOTBALL</h3><br>
  <img src="https://sport.universgazons.com/public/img/big/Foot-indoor-structure588b65252451e.JPG" width="425" height="300"
  <br> <br/>
  
  </div>
</div>
</div>