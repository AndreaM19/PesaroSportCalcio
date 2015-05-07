<?
//Session
include 'include/db/db_function.php';
sec_session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Pesaro Sport Calcio è un'associazione sportiva che promuove e organizza eventi sportivi e culturali nella città di Pesaro legati al mondo del calcio e non solo.">
    <meta name="keywords" content="Pesaro, Sport, Calcio, Calcetto, Torneo, Campionato, CSAIN, Eventi Sportivi, Manifestazioni, Marche, Italia">
    <meta name="author" content="Andrea Marchetti">
    <link rel="icon" href="img/icon/favicon.ico">
    
    <title>Pesaro Sport Calcio</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	
    <!-- Navbar -->
    <?php
	include("include/navbar/navbar.php");
	?>
    
    <!--<div class="col-md-12 divider-ciano"></div>-->
    
    <!-- Carousel -->
    <?php
	//include("include/carousel/carousel.php");
	?>
    
    <div class="col-lg-12" style="margin-bottom:80px;"></div>
    
    <div class=" container-fluid">
    
        <!-- Left -->
        <div class="col-md-1"></div>
        
        <!-- Main container -->
        <div class="col-md-7 container-main">
            <h1>CONTATTI</h1>
            <div class="col-md-12 divider"></div>
            <p>In questa sezione del sito puoi trovare tutti i recapiti per contattare il personale della nostra associazione:</p>
            
            <br>
            <h5><b>Associazione Pesaro Sport Calcio</b></h5>
            <h6>Mail - <a href="mailto:calcio5pesaro@libero.it" target="_blank">calcio5pesaro@libero.it</a> / <a href="mailto:calcio8-11pesaro@libero.it" target="_blank">calcio8-11pesaro@libero.it</a></h6>
            <br>
            <h5><b>Bernardini Renato (Presidente)</b></h5>
            <h6>Telefono - 347 2547881 / 340 6523950</h6>
            
            <br>
            <h5><b>Mari Dott. Marco (Segretario)</b></h5>
            <h6>Telefono - 333 3342159</h6>
            
            <br>
            <h5><b>Comitato provinciale Pesaro e Urbino</b></h5>
            <h6>Mail - <a href="mailto:csainpesarourbino@gmail.com" target="_blank">csainpesarourbino@gmail.com</a></h6>
            
        
        </div>
        
        <br><br>
        
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="col-md-12 divider" style="margin-top:29px;"></div>
            <?php
                include("include/sidebar/side.php");
            ?> 
        </div>
        
        <!-- Right -->
        <div class="col-md-1"></div>
    
    </div>
    
    <?php
		include("include/footer/footer.html");
	?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
