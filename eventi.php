<?php
include("include/functions/utility.php");
include("include/db/db_data.php");
include("include/db/db_function.php");
?>

<?php
//connection to database
$conn=connectToDB($HOST,$USER,$PASSWORD,$DB,$PORT);
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
    
    <!-- Left -->
    <div class="col-md-1"></div>
    
    <!-- Main container -->
    <div class="col-md-7 container-main">
        <h1>Eventi:</h1>
        <div class="col-md-12 divider"></div>
        <p>In questa sezione del sito puoi trovare gli eventi organizzati e promossi dall'associazione Pesaro Sport Calcio:</p>
        <p>Tipologia di evento:
        <select>
        <?php
		$queryText = "SELECT * FROM event_type";
		$query = queryToDB ($conn, $queryText);
		while ($row = mysqli_fetch_array($query)){
			echo"<option value='".$row['event_type_name']."'>".$row['event_type_name']."</option>";
		}	
		freeMemoryAfterQuery($query)
		?>
        </select>
        <br>
        <?php
		if($_GET['type']=="sport") $queryText = "select event_date, event_title, event_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where event_type_name='Torneo' or event_type_name='Campionato' or event_type_name='Manifestazione sportiva'";
		else $queryText = "select event_date, event_title, event_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where event_type_name='".eventType($_GET['type'])."'";
		
		$query=queryToDB($conn,$queryText);
		$count=0;
		while ($row=mysqli_fetch_array($query)) :
		?>
		<br>
		<div class="col-md-12">	
        <h4><?php echo $row['event_date']." ".$row['event_title']; ?></h4>
        <h5>Categoria: <?php echo $row['event_type_name']." ".$row['sport_name']; ?></h5>
        <p><?php echo $row['event_description']; ?></p>    
		<hr>
		<br>
		</div>
		<?php
			$count++;
		endwhile
		;
		freeMemoryAfterQuery($query);
		if ($count == 0)
			echo "<br><br><h5>Nessun evento in programma per questa tipologia</h5><br><br>";
		?>
        
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
<?php
//disconnect from database
disconnectFromDB($conn);
?>