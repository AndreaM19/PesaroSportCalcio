<?php
include '../include/db/db_data.php';
if(@$_GET['rl']==1){
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	if ($remove_stmt = $mysqli->prepare("DELETE FROM members WHERE id=".$_GET['userid']."")) {    
		// Esegui la query ottenuta.
		$remove_stmt->execute();
		echo"<script>location.href='../admin.php?loc=message&msg=2001'</script>";
	}
	else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
}
?>
