<html>
<br>
<br>
<br>
<br>
</html>
<?php 
session_start();
if (!isset($_SESSION['mail'])) {
 echo '<a href="connexion.php"/i>Se connecter</a>';
}
else {
   echo '<a href="deconnexion.php"/i>Se Déconnecter</a>';
}
?>

<html>
<head>
<title>Club sportif</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}








body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#index1.php" class="w3-bar-item w3-button w3-wide">Club Sportif de Football et de MMA</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#index1.php" class="w3-bar-item w3-button">Accueil</a>
      <a href="update1.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> UPDATE</a>
      <a href="Inscription.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> INSCRIPTION</a>
      <a href="connexion.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> CONNEXION</a>
      <a href="Reservation.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> RESERVATION</a>

<br>
<br>
<br>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
</div>

<html>
<head>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style> 
  ul{
    position: relative;
    bottom: -10px;
  }   
    h1{
color : black;
margin: auto;
position: relative;
top: 100px;
text-align: center;
font-size: 280%;
font-family: system-ui;
}
ul{
list-style-type: none;
margin: 0;
padding: 0;
color: white;
background-color: #333;
overflow: hidden;
font-size: 115%;
font-family: system-ui;
}

li{
float: left;
}

li a{
text-decoration: none;
display: block;
color: white;
color background: black;
text-align: center;
padding: 10px 85px;
font-family: system-ui;
}

.active{
    background-color: darkred;
}
#logo1{
position : relative;
top: -40px;
right: 0px;
width: 15%;
}

    h3{
      font-family: system-ui;
    }
    p{
      font-family: system-ui;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: lightgrey;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:100px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
  
      </ul>
    </div>
  </div>
</nav>
<ul id="menu">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/mm2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Notre Centre sportif de UFC</h3>
          <p>Centre Maurice roubel</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/terrain.jpg" alt="Image" height="500">
        <div class="carousel-caption">
          <h3>Terrain de Foot</h3>
          <p>Stade Andrée descartes</p>
        </div>      
      </div>


      <div class="item">
        <img src="images/futt.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Terrain Futsal</h3>
          <p>Gymnase Robespierre</p>
        </div>      
      </div>

    
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
