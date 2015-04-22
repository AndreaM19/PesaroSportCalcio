<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
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
    
    <!-- Left -->
    <div class="col-md-1"></div>
    
    <!-- Main container -->
    <div class="col-md-7 container-main">
        <h1>L'ASSOCIAZIONE</h1>
        <div class="col-md-12 divider"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
        
        <br>

        <div class="col-md-12 divider"></div>
        
        <div class="col-md-12">
            <h3>Partners</h3>
            <div class="col-md-12 text-center partners">
                <a href="http://www.coni.it/it/" title="CONI" target="_blank"><img src="img/loghi/coni.jpg" title="CONI" alt="CONI"></a>
                <a href="http://www.csain.it/" title="CSAIn" target="_blank"><img src="img/loghi/CSAIn.jpg" title="CSAIn" alt="CSAIn"></a>
                <a href="http://www.aics.it/" title="AiCS" target="_blank"><img src="img/loghi/aics.png" title="AiCS" alt="AiCS"></a>
                <a href="http://www.comune.pesaro.pu.it/" title="Comune di Pesaro" target="_blank"><img src="img/loghi/ComunePesaro.jpg" title="Comune di Pesaro" alt="Comune di Pesaro"></a>
                <a href="http://www.regione.marche.it/" title="Regione Marche" target="_blank"><img src="img/loghi/RegioneMarche.jpg" title="Regione Marche" alt="Regione Marche"></a>
                <a href="http://www.confindustria.pu.it/" title="Confindustria Pesaro Urbino" target="_blank"><img src="img/loghi/ConfindustriaPU.png" title="Confindustria Pesaro Urbino" alt="Confindustria Pesaro Urbino"></a>
            </div>
        </div>
    
    </div>
    
    <br><br>
    
    <!-- Sidebar -->
    <div class="col-md-3">
    	<div class="col-md-12 divider" style="margin-top:69px;"></div>
		<?php
            include("include/sidebar/side.php");
        ?> 
    </div>
    
    <!-- Right -->
    <div class="col-md-1"></div>
    
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
