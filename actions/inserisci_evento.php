<?php
include '../include/db/db_data.php';
include '../include/db/db_query.php';
if(@$_GET['rl']==1){
	$eventTitle=$_POST['title'];
	$eventDate=$_POST['date'];
	$eventShortDesc=$_POST['shortDescription'];
	$eventFLyer=$_POST[''];
	$eventSport=$_POST['eventSport'];
	$eventType=$_POST['eventCat'];
	$eventInfos=$_POST['description'];
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	if ($insert_stmt = $mysqli->prepare("INSERT INTO event (event_title, event_date, event_short_description, event_flyer, sport, event_type, event_infos) VALUES (?, ?, ?, ?, ?, ?, ?)")) {    
		$insert_stmt->bind_param('sssssss', $eventTitle, $eventDate, $eventShortDesc, $eventFLyer, $eventSport, $eventType, $eventInfos); 
		// Esegui la query ottenuta.
		$insert_stmt->execute();
		echo"<script>location.href='../admin.php?loc=message&msg=2000'</script>";
	}
	else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
}
?>
