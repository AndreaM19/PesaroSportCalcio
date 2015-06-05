<?php ini_set("memory_limit", "200000000"); // for large images so that we do not get "Allowed memory exhausted"?>
<?php

include '../include/db/db_data.php';
include '../include/functions/utility.php';
include '../include/db/db_query.php';

$fileRandName=NULL;

// upload the file
if ((isset($_POST["submitted_form"])) && ($_POST["submitted_form"] == "edit_event_form")) {
	
	// file needs to be jpg,gif,bmp,x-png and 4 MB max
	if (($_FILES["flyer"]["type"] == "image/jpeg" || $_FILES["flyer"]["type"] == "image/pjpeg" || $_FILES["flyer"]["type"] == "image/gif" || $_FILES["flyer"]["type"] == "image/x-png") && ($_FILES["flyer"]["size"] < 4000000))
	{  
		// some settings
		$max_upload_width = 2592;
		$max_upload_height = 1944;
		  
		// if user chosed properly then scale down the image according to user preferances
		if(isset($_REQUEST['max_width_box']) and $_REQUEST['max_width_box']!='' and $_REQUEST['max_width_box']<=$max_upload_width){
			$max_upload_width = $_REQUEST['max_width_box'];
		}    
		if(isset($_REQUEST['max_height_box']) and $_REQUEST['max_height_box']!='' and $_REQUEST['max_height_box']<=$max_upload_height){
			$max_upload_height = $_REQUEST['max_height_box'];
		}	
		
		// if uploaded image was JPG/JPEG
		if($_FILES["flyer"]["type"] == "image/jpeg" || $_FILES["flyer"]["type"] == "image/pjpeg"){	
			$image_source = imagecreatefromjpeg($_FILES["flyer"]["tmp_name"]);
		}		
		// if uploaded image was GIF
		if($_FILES["flyer"]["type"] == "image/gif"){	
			$image_source = imagecreatefromgif($_FILES["flyer"]["tmp_name"]);
		}	
		// BMP doesn't seem to be supported so remove it form above image type test (reject bmps)	
		// if uploaded image was BMP
		if($_FILES["flyer"]["type"] == "image/bmp"){	
			$image_source = imagecreatefromwbmp($_FILES["flyer"]["tmp_name"]);
		}			
		// if uploaded image was PNG
		if($_FILES["flyer"]["type"] == "image/x-png"){
			$image_source = imagecreatefrompng($_FILES["flyer"]["tmp_name"]);
		}
		if(!is_dir("../files/locandine")){
			mkdir("../files/locandine", 0777);
		}
		
		$fileRandName=randomValue()."_".$_FILES["flyer"]["name"];
		$remote_file = "../files/locandine/".$fileRandName;
		imagejpeg($image_source,$remote_file,100);
		chmod($remote_file,0644);

		// get width and height of original image
		list($image_width, $image_height) = getimagesize($remote_file);
	
		if($image_width>$max_upload_width || $image_height >$max_upload_height){
			$proportions = $image_width/$image_height;
			
			if($image_width>$image_height){
				$new_width = $max_upload_width;
				$new_height = round($max_upload_width/$proportions);
			}		
			else{
				$new_height = $max_upload_height;
				$new_width = round($max_upload_height*$proportions);
			}		
			
			
			$new_image = imagecreatetruecolor($new_width , $new_height);
			$image_source = imagecreatefromjpeg($remote_file);
			
			imagecopyresampled($new_image, $image_source, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height);
			imagejpeg($new_image,$remote_file,100);
			
			imagedestroy($new_image);
		}
		
		imagedestroy($image_source);
		
		//header("Location: ../admin.php?loc=message&msg=2005");
		//exit;
	}
	//else{
		//header("Location: ../admin.php?loc=message&msg=1002");
		//exit;
	//}
}

if(@$_GET['rl']==1){
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	$eventId=$_GET['eventid'];
	$eventTitle=$_POST['title'];
	$eventDate=$_POST['date'];
	$eventShortDesc=$_POST['shortDescription'];
	if(isset($fileRandName))$eventFlyer=$fileRandName;
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
