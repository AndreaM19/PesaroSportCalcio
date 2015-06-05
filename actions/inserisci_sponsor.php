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
	$sponsorName=$_POST['title'];
	$event=$_GET['eventid'];
	if ($insert_stmt = $mysqli->prepare("INSERT INTO sponsor (sponsor_name, event_id) VALUES (?, ?)")) {    
		$insert_stmt->bind_param('ss', $sponsorName, $event); 
		// Esegui la query ottenuta.
		$insert_stmt->execute();
		echo"<script>location.href='../admin.php?loc=message&msg=2012'</script>";
	}
	else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
}
?>
