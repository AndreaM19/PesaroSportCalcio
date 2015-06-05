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
	$galleryTitle=$_POST['title'];
	$eventId=$_GET['eventid'];
	if ($insert_stmt = $mysqli->prepare("INSERT INTO event_gallery (gallery_name) VALUES (?)")) {    
		$insert_stmt->bind_param('s', $galleryTitle); 
		// Esegui la query ottenuta.
		$insert_stmt->execute();
		

		$conn=connectToDB($HOST,$USER,$PASSWORD,$DB,$PORT);
		$galId;
		$queryText = "select id_event_gallery from event_gallery where gallery_name='".$galleryTitle."' limit 1";
		$query = queryToDB ($conn, $queryText);
		while ($row = mysqli_fetch_array($query)){
			$galId=$row['id_event_gallery'];
		}
		
		if(isset($galId)){
			$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
			if ($update_stmt = $mysqli->prepare("update event set event_gallery=? where id_event=?")) {    
					$update_stmt->bind_param('ss', $galId, $eventId); 
					// Esegui la query ottenuta.
					$update_stmt->execute();
					echo"<script>location.href='../admin.php?loc=message&msg=2004'</script>";
			}
			else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
		}
		
		
	}
	else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
}
?>
