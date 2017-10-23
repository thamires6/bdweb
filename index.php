<!DOCTYPE html>
<html>
<head>
  <?php include '_cabecalho.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
  
<?php include '_navbar.php';?>
 <style>
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  </style>
</head>
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="meusdestinos/tumblr_nm1j4qNOsF1tgpw1qo1_1280.jpg" width="100%">
        <div class="carousel-caption">
          <h3>Keukenhof</h3>
          <p>Lisse - Holanda</p>
        </div>      
      </div>

      <div class="item">
          <img src="meusdestinos/tumblr_nm1j4qNOsF1tgpw1qo1_1280.jpg" width="100%">
        <div class="carousel-caption">
          <h3>Kinderdijk</h3>
          <p>Windmills</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="meusdestinos/tumblr_nlkuu3kDtk1tgpw1qo1_1280.jpg" width="100%">
        <div class="carousel-caption">
          <h3>Delft</h3>
          <p>Holanda</p>
        </div>      
      </div>
       <div class="item">
        <img src="meusdestinos/tumblr_npn5znAyA81tgpw1qo1_1280.jpg" width="100%">
        <div class="carousel-caption">
          <h3>Flor em Sintra</h3>
          <p>Portugal</p>
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

 
</body>
    
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
             <?php 
                  if(isset($_SESSION["logged"]) && $_SESSION["logged"]) 
                      echo "Bem-vindo! ".$_SESSION["user.name"];
              ?>
          </div>
          <div class="col-sm-4">
               
          </div>
          <div class="col-sm-4">
          
          </div>
        </div>
     </div>
<div class="container text-center">
  <h3>PRÁTICA 04</h3>
  <p><em>Bem-vindo à nossa galeria de fotos!</em></p>
  <p>Site criado para compartilhamento de fotos.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Aluna do bacharelado em CeT - UFRN</p>
        <p>Photo freak</p>
        <p>1994</p>
      </div>
    </div>

    </div>
  </div>
</div>

</body>
</html>

</html>