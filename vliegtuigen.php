<!DOCTYPE html><?php include 'vliegtuigphp.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vliegtuigenschema</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        html {
            overflow-x: hidden;
        }
        body {
            background-image: url(singa.JPG);
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        div {
            opacity: 0.95;
        }
        #btnSubmit {
            background-color: cornflowerblue;
            text-decoration-color: brown;
        }
    </style>
</head>
<body>
<form action="portfolio.php">
    <input type="submit" value="HUB" id="btnSubmit">
</form>
<br><br>
<div class="row">
<div class="col-md-1">
    &nbsp;
</div>
<div class="col-md-4">
    <div class="jumbotron jumbotron-fluid" style="background-color: #799CD2;">
        <div class="container">
            <h1 class="display-3"><p style="text-align:center">Invoeren van vluchten</p></h1>
        </div>
        <div class="container">
            <p style="text-align:center">
            <form action="vliegtuigen.php" method="post">
                <input type="text">
            </form>
            </p>
        </div>
    </div>
</div>
<div class="col-md-2">
    &nbsp;
</div>
<div class="col-md-4">
    <div class="jumbotron jumbotron-fluid" style="background-color: #799CD2;">
        <div class="container">
            <h1 class="display-3"><p style="text-align:center">Overzicht van de vluchten</p></h1>
        </div>
        <div class="container">
            <p style="text-align:center">
            <form action="vliegtuigen.php" method="post">
        
            </form>
            </p>
        </div>
    </div>
</div>
<div class="col-md-1">
    &nbsp;
</div>
</div>
    
    
    
    
    <script src="js/jquery.min.js.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>