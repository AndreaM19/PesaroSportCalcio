<h1>Esito dell'operazione</h1>
<div class="col-md-12 divider"></div>
<div class="admin-home">
    <?php
	$message;
	if(isset($_GET['msg'])){
		switch ($_GET['msg']) {
			case "1002":
				$message=$ERROR_1002;
				break;
			case "2000":
				$message=$SUCCESS_2000;
				break;
			case "2001":
				$message=$SUCCESS_2001;
				break;
			case "2002":
				$message=$SUCCESS_2002;
				break;
			case "2003":
				$message=$SUCCESS_2003;
				break;
			case "2004":
				$message=$SUCCESS_2004;
				break;
			case "2005":
				$message=$SUCCESS_2005;
				break;
			case "2006":
				$message=$SUCCESS_2006;
				break;
			case "2007":
				$message=$SUCCESS_2007;
				break;
			case "2008":
				$message=$SUCCESS_2008;
				break;
			case "2009":
				$message=$SUCCESS_2009;
				break;
			case "2010":
				$message=$SUCCESS_2010;
				break;
			case "2011":
				$message=$SUCCESS_2011;
				break;
		}
		if(isset($message)) echo "<h4>".$message."</h4>";
	}
	?>
	<br />
    <a href="admin.php" class="btn btn-info btn-lg">Torna alla pagina di amministrazione</a>
    

</div>
