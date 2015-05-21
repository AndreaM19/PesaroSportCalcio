<h1>Nuovo evento</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <p><b>Inserisci i dati di un nuovo evento</p>
    <br />
    
    <form action="actions/inserisci_evento.php?rl=1" method="post" name="new_user_form">
    	<div class="col-md-12">
            <label for="title">Titolo dell'evento</label>
            <input type="text" name="title" id="title" class="form-control" maxlength="100" required="required"/><br />
            <br />
            <label for="date">Data</label>
            <input type="text" name="date" id="date" class="form-control" required="required"/><br />
            <br />        
        </div>
        <div class="col-md-6">
        	<label for="eventCat">Categoria evento</label>
            <select class="form-control" id="eventCat" name="eventCat">
                <?php
                $queryText = $SHOW_EVENT_TYPE;
                $query = queryToDB ($conn, $queryText);
                while ($row = mysqli_fetch_array($query)){
                    echo"<option value='".$row['id_event_type']."'>".$row['event_type_name']."</option>";
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
					echo"<option value='".$row['id_sport']."'>".$row['sport_name']."</option>";
                }	
                freeMemoryAfterQuery($query)
                ?>
            </select>
            <br />
        </div>
        
        <div class="col-md-4">
        	<br />
        	<label for="exampleInputFile">Locandina dell'evento</label>
        </div>
        <div class="col-md-8">
        	<br />
        	<input type="file" id="flyer" name="flyer">
        </div>
        
        <div class="col-md-12">
        	<br />
            <br />
        	<label for="shortDescription">Breve descrizione dell'evento (Max 250 caratteri)</label>
        	<textarea class="form-control" rows="4" id="shortDescription" name="shortDescription"></textarea>
        </div>
        
        <div class="col-md-12">
        	<br />
        	<label for="description">Descrizione completa dell'evento</label>
        	<textarea class="form-control" rows="10" id="description" name="description"></textarea>
        </div>
        
        <div class="col-md-12">
        	<br />
        	<a href="admin.php" class="btn btn-danger">Annulla</a>
			<!--<input type="submit" value="Registra" class="btn btn-info" onclick="return confirmData()"/>-->
        	<input type="submit" value="Inserisci evento" class="btn btn-info" />
        </div>
    </form>
    
    <div class="col-md-12" style="height:80px;">
    </div>

</div>

