<?php
include("include/functions/utility.php");
include("include/db/db_data.php");
include("include/db/db_function.php");
include("include/db/db_query.php");
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
    <script>
	function reload() {
		var loc = $('#eventSelector').find(":selected").val();
		location.href = "eventi.php?type="+loc;
	}
	</script>
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
            <h1>Eventi:</h1>
            <div class="col-md-12 divider"></div>
            <p>In questa sezione del sito puoi trovare gli eventi organizzati e promossi dall'associazione Pesaro Sport Calcio:</p><br>
            
            
            <div class="col-md-12 text-center">
            <h5>Naviga tra gli eventi:</h5>
            <select class="form-control" style="max-width:300px; margin:0 auto;" onChange="reload()" id="eventSelector">
                <?php
                $queryText = $SHOW_EVENT_TYPE;
                $query = queryToDB ($conn, $queryText);
                while ($row = mysqli_fetch_array($query)){
                    //echo"<button type='button' class='btn btn-warning' aria-expanded='false' style='margin:5px;'>".$row['event_type_name']."</button>";
					if($row['event_type_acr']==$_GET['type'])echo"<option value='".$row['event_type_acr']."' selected>".$row['event_type_name']."</option>";
					else echo"<option value='".$row['event_type_acr']."'>".$row['event_type_name']."</option>";
                }	
                freeMemoryAfterQuery($query)
                ?>
            </select>
                <br><br><br>
            </div>
            
            
            <br>
            <?php
            if(@$_GET['type']=="sport") $queryText=$SHOW_ALL_SPORT_EVENTS;
            else $queryText=$SHOW_CAT_EVENTS;
            
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
<?php
//disconnect from database
disconnectFromDB($conn);
?>