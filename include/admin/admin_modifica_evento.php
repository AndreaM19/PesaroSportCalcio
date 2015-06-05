<h1>Nuovo evento</h1>
<div class="col-md-12 divider"></div>

<?php
	$queryText=$SHOW_EVENT_DATA;
	$query = queryToDB ($conn, $queryText);
	while ($row = mysqli_fetch_array($query)){
		$array = array($row['id_event'], $row['event_title'], $row['event_date'], $row['event_short_description'], $row['event_flyer'], $row['sport'], $row['event_type'], $row['event_infos']);
	}	
	freeMemoryAfterQuery($query)
?>

<div class="admin-home">
    <p><b>Modifica i dati dell'evento</p>
    <br />
    
    <form action="actions/modifica_evento.php?rl=1&eventid=<?php echo $_GET['eventid']?>" method="post" name="edit_event_form" id="edit_event_form" enctype="multipart/form-data">
    	<div class="col-md-12">
            <label for="title">Titolo dell'evento</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo $array[1] ?>" maxlength="100" required="required"/><br />
            <br />
            <label for="date">Data</label>
            <input type="text" name="date" id="date" class="form-control" value="<?php echo $array[2] ?>" required="required"/><br />
            <br />        
        </div>
        <div class="col-md-6">
        	<label for="eventCat">Categoria evento</label>
            <select class="form-control" id="eventCat" name="eventCat">
                <?php
                $queryText = $SHOW_EVENT_TYPE;
                $query = queryToDB ($conn, $queryText);
                while ($row = mysqli_fetch_array($query)){
                    if($row['id_event_type']==$array[6]) echo"<option value='".$row['id_event_type']."' selected='selected'>".$row['event_type_name']."</option>";
					else echo"<option value='".$row['id_event_type']."'>".$row['event_type_name']."</option>";
                }	
                freeMemoryAfterQuery($query)
                ?>
            </select>
            <br />
        </div>
        
        <div class="col-md-6">
        	<label for="eventSport">Sport</label>
            <select class="form-control" id="eventSport" name="eventSport">
                <?php
                $queryText = $SHOW_SPORT_LIST;
                $query = queryToDB ($conn, $queryText);
                while ($row = mysqli_fetch_array($query)){
					if($row['id_sport']==$array[5]) echo"<option value='".$row['id_sport']."' selected='selected'>".$row['sport_name']."</option>";
					else echo"<option value='".$row['id_sport']."'>".$row['sport_name']."</option>";
                }	
                freeMemoryAfterQuery($query)
                ?>
            </select>
            <br />
        </div>
        
        <div class="col-md-4">
        	<br />
        	<label for="exampleInputFile">Locandina dell'evento: <?php echo $array[4] ?></label>
        </div>
        <div class="col-md-8">
        	<br />
        	<input type="file" id="flyer" name="flyer">
            <input name="max_width_box" type="hidden" id="max_width_box" value="1024" size="4">
    		<input name="max_height_box" type="hidden" id="max_height_box" value="768" size="4">
			<input name="submitted_form" type="hidden" id="submitted_form" value="edit_event_form" />
        </div>
        
        <div class="col-md-12">
        	<br />
            <br />
        	<label for="shortDescription">Breve descrizione dell'evento (Max 250 caratteri)</label>
        	<textarea class="form-control" rows="4" id="shortDescription" name="shortDescription"><?php echo $array[3] ?></textarea>
        </div>
        
        <div class="col-md-12">
        	<br />
        	<label for="description">Descrizione completa dell'evento</label>
        	<textarea class="form-control" rows="10" id="description" name="description"><?php echo $array[7] ?></textarea>
        </div>
        
        <div class="col-md-12">
        	<br />
        	<a href="admin.php" class="btn btn-danger">Annulla</a>
			<!--<input type="submit" value="Registra" class="btn btn-info" onclick="return confirmData()"/>-->
        	<input type="submit" value="Conferma modifiche" class="btn btn-info" />
        </div>
    </form>
    
    <div class="col-md-12" style="height:80px;">
    </div>

</div>

