<h1>Esito dell'operazione</h1>
<div class="col-md-12 divider"></div>
<div class="admin-home">
    <?php
	$message;
	if(isset($_GET['msg'])){
		switch ($_GET['msg']) {
			case "2000":
				$message=$SUCCESS_2000;
				break;
			case "2001":
				$message=$SUCCESS_2001;
				break;
			case "2002":
				$message=$SUCCESS_2002;
				break;
		}
		if(isset($message)) echo "<h4>".$message."</h4>";
	}
	?>
	<br />
    <a href="admin.php" class="btn btn-info btn-lg">Torna alla pagina di amministrazione</a>
    

</div>
