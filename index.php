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
    
    <div class="banner";>
    	<!--<img src="img/carousel/1.jpg" class="img-responsive">-->
    </div>
    
    <div class=" container-fluid">
        <!-- Left -->
        <div class="col-md-1"></div>
        
        <!-- Main container -->
        <div class="col-md-7 container-main">
            <h1>I PROSSIMI EVENTI DEL CALENDARIO</h1>
            <div class="col-md-12 divider"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
            <div class="col-md-12 event" style="background-image:url(img/events/4.jpg);">
                <div class="info">
                    <h1>CALENDARIO EVENTI SPORTIVI</h1>
                    <p>Entra in questa sezione per conoscere tutte le date degli eventi sportivi organizzati dall'associazione. Troverai informazioni per tornei e  campionati di tutti gli sport che possono praticare i nostri soci.</p>
                    <p><a class="btn btn-info" href="eventi.php?type=sport" role="button">Vedi i dettagli &raquo;</a></p>
                </div>
            </div>
            <!--
            <div class="col-md-4 event" style="background-image:url(img/events/5.jpg);">
                <div class="info">
                    <h1>TORNEO CALCETTO</h1>
                    <span class="label label-success">16/04/2015</span>
                    <p>Lorem ipsum dolor sit amet. </p>
                    <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>
            -->
            <div class="col-md-7 event" style="background-image:url(img/events/6.jpg);">
                <div class="info">
                    <h1>CORSI DI FORMAZIONE</h1>
                    <p>In questa sezione troverai tutte le informazioni relative ai corsi di formazione sportiva organizzati dall'asociazione.</p>
                    <p><a class="btn btn-info" href="eventi.php?type=formazione" role="button">Vedi i dettagli &raquo;</a></p>
                </div>
            </div>
            
            <div class="col-md-5 event" style="background-image:url(img/events/7.jpg);">
                <div class="info">
                    <h1>MANIFESTAZIONI CULTURALI</h1>
                    <p>Pesaro Sport Calcio non è solo un'associazione sportiva ma anche un'associazione culturale, trovi tutte le informazioni in questa sezione del sito.</p>
                    <p><a class="btn btn-info" href="eventi.php?type=cultura" role="button">Vedi i dettagli &raquo;</a></p>
                </div>
            </div>
            
            <div class="col-md-12">
                <h1>Informazioni</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            
            <div class="col-md-12">
                <h3>Informazioni secondarie</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            
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
