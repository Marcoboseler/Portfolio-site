<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            background-image: url(red.jpg);
        }
        html {
            overflow-x: hidden; 
            overflow-y: auto; 
        }
        div {
            opacity: 0.97;
        }
        h6 {
            font-size: 16px;
        }
        #card {
            border-color: black;
            border-width: 2px;
        }
        #link1 {
            border-color: black;
            border-width: 1px;
        }
        #link2 {
            border-color: black;
            border-width: 1px;
        }
        #link3 {
            border-color: black;
            border-width: 1px;
        }
        #link4 {
            border-color: black;
            border-width: 1px;
        }
        #link5 {
            border-color: black;
            border-width: 1px;
        }
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #bf2626;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="portfolio.php">Portfolio Website</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="portfolio.php"><h5>Hoofdpagina</h5><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cvpagina.php"><h5>Mijn CV</h5><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="beroepsproducten.php"><h5>Projecten</h5><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="www.youtube.com"><h5>YouTube</h5><span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul>
        Inloggebeuren
    </ul>
  </div>
</nav>


<br><br><br>
<div class="row">
<div class="col-md-1">
&nbsp;
</div>
<div class="col-md-2">
    <div class="card" style="width: 25rem;" id="card">
      <img class="card-img-top" src="Selfie.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Even voorstellen...</h5>
        <p class="card-text">Mijn naam is Marco Böseler, ik ben 19 jaar oud en ben leerling op het Zoomvliet College in Roosendaal. Hier zit ik in het eerste jaar op de opleiding Applicatieontwikkelaar, en één van onze opdrachten van dit schooljaar is om deze portfolio website te maken. <br><br>
        Op deze site zul je diverse projecten van mij kunnen bekijken, kun je contact met mij opnemen en mij bezoeken op sociale media. Hieronder heb ik een paar links naar mijn pagina's.</p>
        <a href="#" class="btn btn-dark">Linkedin</a>
        <a href="https://www.facebook.com/marco.boseler" class="btn btn-info">Facebook</a>
        <a href="https://www.instagram.com/marco._.louis/" class="btn btn-danger">Instagram</a>
      </div>
    </div>        
</div>
<div class="col-md-1">
&nbsp;
</div>
<div class="col-md-6">
    <div class="jumbotron" style="background-color: #bf2626;" id="jumbo">
      <h1 class="display-4">Contact</h1>
      <p style="font-family: verdana;" class="lead">Doormiddel van deze website geef ik u de gelegenheid om mijn actuele vaardigheden
      in programmeren te zien, en indien gewenst kunt u ook met mij contact opnemen. Hieronder geef ik
      een formulier waarmee u contact met mij kan opnemen. <br>
      Als u het formulier hebt ingevoerd, worden uw gegevens en uw bericht automatisch naar mij gemailed zodat
      ik zo snel mogelijk kan reageren.</p>
      <hr class="my-4">
      <p class="lead">
         
          <form action="portfolio.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Voornaam">
                </div>
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Achternaam">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="Email adres">
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Telefoonnummer">
              </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputLinkedin" placeholder="Linkedin (indien van toepassing)">
                </div>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Eventuele opmerkingen</span>
                  </div>
                  <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <input type="submit" class="btn btn-dark btn-lg btn-block" name="btnSubmit">
          </form>
          
      </p>
    </div>
</div>
<div class="col-md-1" id="divLinks">
    <a href="vliegtuigen.php" style="background-color: #bf2626;"  class="btn btn-lg" role="button" aria-disabled="false" id="link1"><font face = "Verdana">Vliegtuigschema website</font></a>
    <br><br>
    <a href="project.php" style="background-color: #bf2626;"  class="btn btn-lg" role="button" aria-disabled="false" id="link2"><font face = "Verdana">Dierentuin Management System</font></a>
    <br><br>
    <a href="workshop.php" style="background-color: #bf2626;"  class="btn btn-lg" role="button" aria-disabled="false" id="link3"><font face = "Verdana">Workshop webdesign</font></a>
    <br><br>
    <a href="OefenSite.php" style="background-color: #bf2626;"  class="btn btn-lg" role="button" aria-disabled="false" id="link4"><font face = "Verdana">Practice site</font></a>
    <br><br>
    <a href="cv.php" style="background-color: #bf2626;"  class="btn btn-lg" role="button" aria-disabled="false" id="link5"><font face = "Verdana">CV invoer site</font></a>
    
</div>
<div class="col-md-1">
    &nbsp;
</div>


<div class="row">
    &nbsp;    
</div>

<div class="row">
    
</div>
    
    
    
<script src="js/jquery.min.js.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>