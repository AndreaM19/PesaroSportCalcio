<?php
include '../include/db/db_data.php';
include '../include/functions/utility.php';
include '../include/db/db_query.php';
if(@$_GET['rl']==1){
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	if ($remove_stmt = $mysqli->prepare($DELETE_EVENT)) {    
		// Esegui la query ottenuta.
		$remove_stmt->execute();
		echo"<script>location.href='../admin.php?loc=message&msg=2003'</script>";
	}
	else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
}
?>
