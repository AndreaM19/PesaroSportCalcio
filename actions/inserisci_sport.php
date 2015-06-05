<?php
include '../include/db/db_data.php';
include '../include/functions/utility.php';
include '../include/db/db_query.php';
include '../include/db/db_function.php';

//Session
sec_session_start();
if(login_check(new mysqli($HOST, $USER, $PASSWORD, $DB)));
else header('Location: ../index.php?msg=1000');

if(@$_GET['rl']==1){
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	$sportName=$_POST['title'];
	if ($insert_stmt = $mysqli->prepare("INSERT INTO sport (sport_name) VALUES (?)")) {    
		$insert_stmt->bind_param('s', $sportName); 
		// Esegui la query ottenuta.
		$insert_stmt->execute();
		echo"<script>location.href='../admin.php?loc=message&msg=2010'</script>";
	}
	else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
}
?>
