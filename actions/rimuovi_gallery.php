<?php
include '../include/db/db_data.php';
include '../include/functions/utility.php';
include '../include/db/db_query.php';include '../include/db/db_function.php';

//Session
sec_session_start();
if(login_check(new mysqli($HOST, $USER, $PASSWORD, $DB)));
else header('Location: ../index.php?msg=1000');

if(@$_GET['rl']==1){
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	if ($remove_stmt = $mysqli->prepare($DELETE_GALLERY)) {    
		// Esegui la query ottenuta.
		$remove_stmt->execute();
		echo"<script>location.href='../admin.php?loc=message&msg=2008'</script>";
	}
	else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
}
?>
