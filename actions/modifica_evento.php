<?php
include '../include/db/db_data.php';
include '../include/functions/utility.php';
include '../include/db/db_query.php';

if(@$_GET['rl']==1){
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	$eventId=$_GET['eventid'];
	$eventTitle=$_POST['title'];
	$eventDate=$_POST['date'];
	$eventShortDesc=$_POST['shortDescription'];
	if(isset($_POST['flyer']))$eventFlyer=$_POST['flyer'];
	else $eventFlyer="";
	$eventSport=$_POST['eventSport'];
	$eventType=$_POST['eventCat'];
	$eventInfos=$_POST['description'];
	
	if($eventFlyer==""){
		if ($update_stmt = $mysqli->prepare("update event set event_title=?, event_date=?, event_short_description=?, sport=?, event_type=?, event_infos=? where id_event=?")) {    
			$update_stmt->bind_param('sssiisi', $eventTitle, $eventDate, $eventShortDesc, $eventSport, $eventType, $eventInfos, $eventId); 
			// Esegui la query ottenuta.
			$update_stmt->execute();
			echo"<script>location.href='../admin.php?loc=message&msg=2004'</script>";
		}
		else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";		
	}
	else{
		if ($update_stmt = $mysqli->prepare("update event set event_title=?, event_date=?, event_short_description=?, event_flyer=?, sport=?, event_type=?, event_infos=? where id_event=?")) {    
			$update_stmt->bind_param('ssssiisi', $eventTitle, $eventDate, $eventShortDesc, $eventFlyer, $eventSport, $eventType, $eventInfos, $eventId); 
			// Esegui la query ottenuta.
			$update_stmt->execute();
			echo"<script>location.href='../admin.php?loc=message&msg=2004'</script>";
		}
		else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
	}
}
?>
