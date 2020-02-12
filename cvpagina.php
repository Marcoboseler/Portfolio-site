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
            opacity: 0.95;
        }
        pre {
            overflow-x: hidden;
        }
        #btnTerug {
            background-color: indianred;
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
        <a class="nav-link" href="portfolio.php">Hoofdpagina<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Mijn CV<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="beroepsproducten.php">Projecten<span class="sr-only">(current)</span></a>
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
        
    </div>
    <div class="col-md-6">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">                                                                               <form action="portfolio.php">
              <input type="submit" value="Terug naar de hoofdpagina" id="btnTerug">
          </form>
            <h1 class="display-4"></h1>
            <p class="lead">
            <pre><h4>
                        Persoonlijke gegevens
                    
        Naam                         Marco Böseler
        Adres                        Rijkenspad 17, 4463 GS Goes
        Mobiele nummer               06 11393327
        E-mail adres                 marcoboseler@gmail.com
        Geboortedatum en -plaats     22-08-2000 te Goes
        Nationaliteit                Spaanse en Nederlandse



                        Opleiding

 2018 – Heden	1e jaar ICT-opleiding: Applicatieontwikkelaar

 2017 – 2018	E.S.O. 4 op Concha Méndez Cuesta, Torremolinos

 2012 – 2017	Havo op het Pontes Goese Lyceum, Goes



                        Werkervaring

 2020 – Heden	Computer Student bij Student Aan Huis

 2018 – 2019	Kassamedewerker Jumbo Goes

 2018	        Bijles Engels geven aan scholieren in Torremolinos

 2017  	        Kassamedewerker Jumbo Goes

 2016 	        Bediening in restaurant Saloniki Goes 

 2015	        Vulploegmedewerker Albert Heijn Goes



                        Automatiseringskennis

 MS Word
 MS PowerPoint
 MS Visio
 MS Excel
 MS Access

 Udemy Edwin Diaz’s Become a PHP master


                        Hobby’s

 Uitgaan, fitness en computers.		

               </pre></h4>
            </p>
          </div>
        </div>
    </div>
</div>



<script src="js/jquery.min.js.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>